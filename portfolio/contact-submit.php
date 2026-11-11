<?php
declare(strict_types=1);

ini_set('display_errors', '0');
header('Cache-Control: no-store, max-age=0');
header('X-Content-Type-Options: nosniff');
header('Referrer-Policy: no-referrer');
header("Content-Security-Policy: default-src 'none'; style-src 'unsafe-inline'; frame-ancestors 'none'; base-uri 'none'; form-action 'none'");

const EXPECTED_ORIGIN = 'https://rnportfolio.xsrv.jp';

$acceptHeader = is_string($_SERVER['HTTP_ACCEPT'] ?? null) ? $_SERVER['HTTP_ACCEPT'] : '';
$wantsJson = stripos($acceptHeader, 'application/json') !== false;

function respond(int $status, array $payload): void
{
    global $wantsJson;

    http_response_code($status);
    if ($wantsJson) {
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        exit;
    }

    header('Content-Type: text/html; charset=UTF-8');
    $ok = ($payload['ok'] ?? false) === true;
    $heading = $ok ? '送信を受け付けました。' : '送信できませんでした。';
    $message = is_string($payload['message'] ?? null)
        ? $payload['message']
        : ($ok ? '送信処理が完了しました。' : '入力内容を確認し、もう一度お試しください。');
    $safeHeading = htmlspecialchars($heading, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $safeMessage = htmlspecialchars($message, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    $backLabel = $ok ? 'ポートフォリオへ戻る' : 'お問い合わせフォームへ戻る';
    $backHref = $ok ? 'index.html' : 'contact.html#contact-intro';

    echo '<!DOCTYPE html><html lang="ja"><head><meta charset="UTF-8">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    echo '<meta name="robots" content="noindex,nofollow"><title>' . $safeHeading . '｜Riku</title>';
    echo '<style>*,*::before,*::after{box-sizing:border-box}body{margin:0;min-height:100vh;display:grid;place-items:center;padding:24px;background:#f2efe9;color:#2d2926;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI","Yu Gothic",Meiryo,sans-serif;line-height:1.8}.panel{width:min(680px,100%);padding:clamp(28px,7vw,64px);border:1.5px solid #2d2926;background:#fffdf8}.eyebrow{margin:0 0 18px;color:#a5281f;font:700 12px/1.5 ui-monospace,SFMono-Regular,Menlo,monospace;letter-spacing:.12em;text-transform:uppercase}h1{margin:0;font-size:clamp(30px,7vw,54px);line-height:1.2;letter-spacing:-.03em}p{margin:20px 0 0;color:#686461}.button{display:inline-flex;align-items:center;justify-content:center;min-height:48px;margin-top:32px;padding:11px 20px;border:1.5px solid #a5281f;color:#a5281f;font:700 13px/1.5 ui-monospace,SFMono-Regular,Menlo,monospace;letter-spacing:.06em;text-decoration:none}.button:focus-visible{outline:2px solid #a5281f;outline-offset:4px}</style>';
    echo '</head><body><main class="panel"><p class="eyebrow">Contact / Riku</p><h1>' . $safeHeading . '</h1>';
    echo '<p>' . $safeMessage . '</p><a class="button" href="' . $backHref . '">' . $backLabel . ' →</a>';
    echo '</main></body></html>';
    exit;
}

function post_text(string $key): string
{
    $value = $_POST[$key] ?? '';
    return is_string($value) ? trim($value) : '';
}

function secure_same_origin_request(): bool
{
    $https = strtolower(is_string($_SERVER['HTTPS'] ?? null) ? $_SERVER['HTTPS'] : '');
    if ($https !== 'on' && $https !== '1') {
        return false;
    }

    $fetchSite = strtolower(is_string($_SERVER['HTTP_SEC_FETCH_SITE'] ?? null) ? trim($_SERVER['HTTP_SEC_FETCH_SITE']) : '');
    if ($fetchSite !== '' && $fetchSite !== 'same-origin') {
        return false;
    }

    $origin = is_string($_SERVER['HTTP_ORIGIN'] ?? null) ? trim($_SERVER['HTTP_ORIGIN']) : '';
    if ($origin !== '') {
        return hash_equals(EXPECTED_ORIGIN, $origin);
    }

    // Older user agents may omit Origin on a regular form POST. In that case,
    // require a same-origin HTTPS Referer instead of accepting a missing signal.
    $referer = is_string($_SERVER['HTTP_REFERER'] ?? null) ? trim($_SERVER['HTTP_REFERER']) : '';
    if ($referer === '') {
        return false;
    }

    $scheme = parse_url($referer, PHP_URL_SCHEME);
    $host = parse_url($referer, PHP_URL_HOST);
    $port = parse_url($referer, PHP_URL_PORT);

    return is_string($scheme)
        && is_string($host)
        && hash_equals('https', strtolower($scheme))
        && hash_equals('rnportfolio.xsrv.jp', strtolower($host))
        && ($port === null || $port === 443);
}

function unavailable(?string $pendingSubmission = null): void
{
    if ($pendingSubmission !== null) {
        @unlink($pendingSubmission);
    }
    error_log('Riku contact form state storage is unavailable.');
    respond(503, ['ok' => false, 'message' => '現在、送信受付を一時停止しています。時間をおいて再度お試しください。']);
}

function enforce_rate_limit(string $remoteAddress, string $email, ?string $pendingSubmission = null): void
{
    $secret = hash('sha256', __FILE__ . PHP_VERSION_ID);
    $now = time();
    $windowSeconds = 600;
    $limits = [
        hash_hmac('sha256', 'identity|' . $remoteAddress . '|' . strtolower($email), $secret) => 6,
        hash_hmac('sha256', 'network|' . $remoteAddress, $secret) => 40,
    ];
    $rateFile = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR)
        . DIRECTORY_SEPARATOR
        . 'riku-contact-rate-' . substr(hash('sha256', __FILE__), 0, 16) . '.json';
    $handle = @fopen($rateFile, 'c+');

    if (!is_resource($handle) || !flock($handle, LOCK_EX)) {
        if (is_resource($handle)) {
            fclose($handle);
        }
        unavailable($pendingSubmission);
    }

    @chmod($rateFile, 0600);

    rewind($handle);
    $rawState = stream_get_contents($handle);
    if ($rawState === false) {
        flock($handle, LOCK_UN);
        fclose($handle);
        unavailable($pendingSubmission);
    }
    $decoded = trim($rawState) === '' ? [] : json_decode($rawState, true);
    if (!is_array($decoded)) {
        flock($handle, LOCK_UN);
        fclose($handle);
        unavailable($pendingSubmission);
    }
    $buckets = $decoded;

    foreach ($buckets as $bucketKey => $bucket) {
        $startedAt = is_array($bucket) ? (int) ($bucket['started_at'] ?? 0) : 0;
        if ($startedAt < $now - $windowSeconds) {
            unset($buckets[$bucketKey]);
        }
    }

    foreach ($limits as $key => $maximumAttempts) {
        $bucket = is_array($buckets[$key] ?? null) ? $buckets[$key] : ['started_at' => $now, 'count' => 0];
        $count = (int) ($bucket['count'] ?? 0);
        if ($count >= $maximumAttempts) {
            $retryAfter = max(1, $windowSeconds - ($now - (int) ($bucket['started_at'] ?? $now)));
            flock($handle, LOCK_UN);
            fclose($handle);
            if ($pendingSubmission !== null) {
                @unlink($pendingSubmission);
            }
            header('Retry-After: ' . $retryAfter);
            respond(429, ['ok' => false, 'message' => '短時間に複数回の送信がありました。少し時間をおいてから再度お試しください。']);
        }
        $bucket['count'] = $count + 1;
        $buckets[$key] = $bucket;
    }

    $encoded = json_encode($buckets, JSON_UNESCAPED_SLASHES);
    if (!is_string($encoded)) {
        flock($handle, LOCK_UN);
        fclose($handle);
        unavailable($pendingSubmission);
    }
    rewind($handle);
    $truncated = ftruncate($handle, 0);
    $written = $truncated ? fwrite($handle, $encoded) : false;
    $flushed = $written === strlen($encoded) ? fflush($handle) : false;
    flock($handle, LOCK_UN);
    fclose($handle);
    if (!$truncated || $written !== strlen($encoded) || !$flushed) {
        unavailable($pendingSubmission);
    }
}

function begin_submission(string $submissionKey): string
{
    $base = rtrim(sys_get_temp_dir(), DIRECTORY_SEPARATOR);
    $directory = $base . DIRECTORY_SEPARATOR . 'riku-contact-submissions-' . substr(hash('sha256', __FILE__), 0, 16);
    if (!is_dir($directory) && !@mkdir($directory, 0700) && !is_dir($directory)) {
        unavailable();
    }
    if (!is_writable($directory)) {
        unavailable();
    }
    @chmod($directory, 0700);

    $now = time();
    $storedSubmissions = mt_rand(1, 20) === 1
        ? glob($directory . DIRECTORY_SEPARATOR . '*.json')
        : false;
    if (is_array($storedSubmissions)) {
        $deleted = 0;
        foreach ($storedSubmissions as $storedSubmission) {
            $modifiedAt = @filemtime($storedSubmission);
            if (is_int($modifiedAt) && $modifiedAt < $now - 3600) {
                if (@unlink($storedSubmission)) {
                    $deleted++;
                }
                if ($deleted >= 100) {
                    break;
                }
            }
        }
    }
    $file = $directory . DIRECTORY_SEPARATOR . hash('sha256', $submissionKey) . '.json';
    for ($attempt = 0; $attempt < 2; $attempt++) {
        $handle = @fopen($file, 'x');
        if (is_resource($handle)) {
            $payload = json_encode(['status' => 'processing', 'created_at' => $now], JSON_UNESCAPED_SLASHES);
            $written = is_string($payload) ? fwrite($handle, $payload) : false;
            $flushed = $written === strlen((string) $payload) ? fflush($handle) : false;
            fclose($handle);
            @chmod($file, 0600);
            if ($written !== strlen((string) $payload) || !$flushed) {
                @unlink($file);
                unavailable();
            }
            return $file;
        }

        $existingRaw = @file_get_contents($file);
        $existing = is_string($existingRaw) ? json_decode($existingRaw, true) : null;
        if (!is_array($existing)) {
            unavailable();
        }
        $createdAt = (int) ($existing['created_at'] ?? 0);
        $status = is_string($existing['status'] ?? null) ? $existing['status'] : '';
        if ($createdAt >= $now - 3600 && $status === 'complete') {
            respond(200, ['ok' => true, 'duplicate' => true, 'message' => '同じ内容の送信処理はすでに完了しています。']);
        }
        if ($createdAt >= $now - 120 && $status === 'processing') {
            respond(409, ['ok' => false, 'message' => '同じ内容を現在送信しています。少し待ってから結果をご確認ください。']);
        }
        if (!@unlink($file)) {
            unavailable();
        }
    }

    unavailable();
}

function complete_submission(string $file): void
{
    $payload = json_encode(['status' => 'complete', 'created_at' => time()], JSON_UNESCAPED_SLASHES);
    $temporary = @tempnam(dirname($file), 'complete-');
    if (!is_string($payload)
        || !is_string($temporary)
        || @file_put_contents($temporary, $payload, LOCK_EX) !== strlen($payload)
        || !@rename($temporary, $file)) {
        if (is_string($temporary)) {
            @unlink($temporary);
        }
        error_log('Riku contact form could not finalize its idempotency record.');
        return;
    }
    @chmod($file, 0600);
}

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Allow: POST');
    respond(405, ['ok' => false, 'message' => 'お問い合わせフォームから送信してください。']);
}

if (!secure_same_origin_request()) {
    respond(403, ['ok' => false, 'message' => 'このページからフォームを送信してください。']);
}

if (post_text('contact_fax_opt_in') !== '') {
    respond(200, ['ok' => true, 'message' => '送信を受け付けました。']);
}

$name = post_text('entry.138936404');
$email = post_text('entry.1596440106');
$company = post_text('entry.1516021331');
$service = post_text('entry.307653654');
$budget = post_text('entry.1542202325');
$message = post_text('entry.722735448');
$consent = post_text('entry.197068259');
$source = post_text('source');
$submittedId = post_text('submission_id');

$services = [
    'LP制作',
    '店舗・小規模サイト制作',
    'WordPressサイト制作・テーマ化',
    'Figmaからのコーディング',
    '制作会社からのスポット実装',
    '継続・業務委託',
    '既存サイトの改修',
    'その他・まずは相談',
];

$budgetToGoogle = [
    '' => '',
    '15万円未満' => '15万円未満',
    '15万円以上〜30万円未満' => '15万〜30万円',
    '30万円以上〜50万円未満' => '30万〜50万円',
    '50万円以上〜90万円未満' => '50万〜90万円',
    '90万円以上' => '90万円以上',
    '継続・業務委託の相談' => '継続・業務委託の相談',
];

$sourceLabels = [
    'home-hero' => 'トップページ',
    'home-partner' => 'トップページ（制作会社向け案内）',
    'home-footer' => 'トップページ下部',
    'works' => '制作事例一覧',
    'pricing-partner' => '料金ページ（外部パートナー）',
    'pricing' => '料金ページ',
    'about' => 'Aboutページ',
    'privacy' => 'プライバシーポリシー',
    'case-shumatsu' => '週末珈琲便 Case Study',
    'case-kaze' => 'KAZE COFFEE Case Study',
    'case-salon' => '個人サロン Case Study',
    'case-juku' => '塾・教室 Case Study',
    'case-yuakari' => '湯灯商會 Case Study',
    'case-urushi' => '伝統漆器 Case Study',
];

$errors = [];
if ($name === '' || strlen($name) > 400) {
    $errors['name'] = 'お名前を確認してください。';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) {
    $errors['email'] = 'メールアドレスを確認してください。';
}
if (strlen($company) > 600) {
    $errors['company'] = '会社名・屋号が長すぎます。';
}
if (!in_array($service, $services, true)) {
    $errors['service'] = 'ご相談内容を選択してください。';
}
if (!array_key_exists($budget, $budgetToGoogle)) {
    $errors['budget'] = 'ご予算目安を確認してください。';
}
if ($message === '' || strlen($message) > 12000) {
    $errors['message'] = 'お問い合わせ内容を確認してください。';
}
if ($consent !== 'プライバシーポリシーを確認し、同意します') {
    $errors['consent'] = 'プライバシーポリシーへの同意が必要です。';
}

if ($errors !== []) {
    respond(422, ['ok' => false, 'message' => '入力内容を確認してください。', 'fields' => $errors]);
}

if (isset($sourceLabels[$source])) {
    $message = "【参照ページ】{$sourceLabels[$source]}\n\n{$message}";
}

$googlePayload = [
    'entry.138936404' => $name,
    'entry.1596440106' => $email,
    'entry.1516021331' => $company,
    'entry.307653654' => $service,
    // Googleフォーム側の既存選択肢へ対応付ける。画面上の境界表記は重複させない。
    'entry.1542202325' => $budgetToGoogle[$budget],
    'entry.722735448' => $message,
    'entry.197068259' => $consent,
    'fvv' => '1',
    'pageHistory' => '0',
];
$encodedPayload = http_build_query($googlePayload, '', '&', PHP_QUERY_RFC3986);

$remoteAddress = is_string($_SERVER['REMOTE_ADDR'] ?? null) ? $_SERVER['REMOTE_ADDR'] : 'unknown';
$validSubmittedId = preg_match('/\A[0-9a-f]{8}-[0-9a-f]{4}-4[0-9a-f]{3}-[89ab][0-9a-f]{3}-[0-9a-f]{12}\z/i', $submittedId) === 1;
$submissionKey = $validSubmittedId
    ? 'uuid|' . strtolower($submittedId)
    : 'fallback|' . hash('sha256', $remoteAddress . "\0" . $encodedPayload);
$pendingSubmission = begin_submission($submissionKey);
enforce_rate_limit($remoteAddress, $email, $pendingSubmission);

$googleUrl = 'https://docs.google.com/forms/d/e/1FAIpQLSdPpXSzCtmhp463mHqJqqs-pI39oHLaXwAHVyFnfk8q5FAzWA/formResponse';
$httpStatus = 0;
$requestSucceeded = false;

if (function_exists('curl_init')) {
    $curl = curl_init($googleUrl);
    curl_setopt_array($curl, [
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $encodedPayload,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => false,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_USERAGENT => 'RikuPortfolioContact/1.0',
        CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
    ]);
    $responseBody = curl_exec($curl);
    $httpStatus = (int) curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $requestSucceeded = $responseBody !== false;
    unset($curl);
} else {
    $context = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\nUser-Agent: RikuPortfolioContact/1.0\r\n",
            'content' => $encodedPayload,
            'timeout' => 15,
            'ignore_errors' => true,
        ],
    ]);
    $stream = @fopen($googleUrl, 'rb', false, $context);
    $responseHeaders = [];
    if (is_resource($stream)) {
        $responseBody = stream_get_contents($stream);
        $metadata = stream_get_meta_data($stream);
        $responseHeaders = is_array($metadata['wrapper_data'] ?? null) ? $metadata['wrapper_data'] : [];
        fclose($stream);
        $requestSucceeded = $responseBody !== false;
    }
    if (isset($responseHeaders[0]) && preg_match('/\s(\d{3})\s/', $responseHeaders[0], $matches)) {
        $httpStatus = (int) $matches[1];
    }
}

if (!$requestSucceeded || $httpStatus < 200 || $httpStatus >= 400) {
    @unlink($pendingSubmission);
    respond(502, ['ok' => false, 'message' => '送信先から正常な応答を受け取れませんでした。時間をおいて再度お試しください。']);
}

complete_submission($pendingSubmission);
respond(200, ['ok' => true, 'message' => '送信先から正常な応答を受け取り、送信処理が完了しました。']);
