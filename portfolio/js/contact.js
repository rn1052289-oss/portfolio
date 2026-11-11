document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('#contact-form');
  const success = document.querySelector('.form-success');
  const resetButton = document.querySelector('[data-reset-contact]');

  if (!form || !success) return;

  const submitButton = form.querySelector('[type="submit"]');
  const error = form.querySelector('.form-error');
  const status = form.querySelector('.form-actions__note');
  const sourceInput = form.querySelector('input[name="source"]');
  const submissionIdInput = form.querySelector('input[name="submission_id"]');
  const referral = document.querySelector('[data-contact-referral]');
  const errorMessage = form.querySelector('[data-form-error-message]');
  const fieldErrorList = form.querySelector('[data-form-field-errors]');
  const originalButtonLabel = submitButton?.innerHTML || '';
  const originalStatus = status?.innerHTML || '';
  const params = new URLSearchParams(window.location.search);
  let isSubmitting = false;

  const fieldConfig = {
    name: { label: 'お名前', selector: '[name="entry.138936404"]' },
    email: { label: 'メールアドレス', selector: '[name="entry.1596440106"]' },
    company: { label: '会社名・屋号', selector: '[name="entry.1516021331"]' },
    service: { label: 'ご相談内容', selector: '[name="entry.307653654"]' },
    budget: { label: 'ご予算目安', selector: '[name="entry.1542202325"]' },
    message: { label: 'お問い合わせ内容', selector: '[name="entry.722735448"]' },
    consent: { label: 'プライバシーポリシーへの同意', selector: '[name="entry.197068259"]' }
  };

  const serviceValues = {
    landing: 'LP制作',
    'small-site': '店舗・小規模サイト制作',
    wordpress: 'WordPressサイト制作・テーマ化',
    figma: 'Figmaからのコーディング',
    partner: '制作会社からのスポット実装',
    retainer: '継続・業務委託',
    repair: '既存サイトの改修',
    other: 'その他・まずは相談'
  };

  const sourceLabels = {
    'home-hero': 'トップページ',
    'home-partner': '制作会社向けのご案内',
    'home-footer': 'トップページ',
    works: '制作事例一覧',
    'pricing-partner': '制作会社向け料金案内',
    pricing: '料金案内',
    about: 'Aboutページ',
    privacy: 'プライバシーポリシー',
    'case-shumatsu': '「週末珈琲便」の事例',
    'case-kaze': '「KAZE COFFEE」の事例',
    'case-salon': '「個人サロン」の事例',
    'case-juku': '「塾・教室」の事例',
    'case-yuakari': '「湯灯商會」の事例',
    'case-urushi': '「伝統漆器」の事例'
  };

  const requestedService = serviceValues[params.get('service')] || '';
  const requestedSource = sourceLabels[params.get('source')] ? params.get('source') : '';

  const applyContext = () => {
    if (sourceInput) sourceInput.value = requestedSource;

    if (requestedService) {
      const matchingOption = [...form.querySelectorAll('input[name="entry.307653654"]')]
        .find(option => option.value === requestedService);
      if (matchingOption) matchingOption.checked = true;
    }

    if (referral && requestedSource) {
      referral.textContent = `${sourceLabels[requestedSource]}から、ご相談内容を引き継ぎました。選択内容は変更できます。`;
      referral.hidden = false;
    }
  };

  const restoreSubmitButton = () => {
    if (submitButton) {
      submitButton.disabled = false;
      submitButton.innerHTML = originalButtonLabel;
    }
    if (status) status.innerHTML = originalStatus;
  };

  const clearFieldErrors = () => {
    Object.values(fieldConfig).forEach(({ selector }) => {
      form.querySelectorAll(selector).forEach(field => {
        field.removeAttribute('aria-invalid');
        const describedBy = (field.getAttribute('aria-describedby') || '')
          .split(/\s+/)
          .filter(id => id && id !== 'contact-field-errors');
        if (describedBy.length) field.setAttribute('aria-describedby', describedBy.join(' '));
        else field.removeAttribute('aria-describedby');
      });
    });
    if (fieldErrorList) {
      fieldErrorList.replaceChildren();
      fieldErrorList.hidden = true;
    }
  };

  const showError = (message, fields = {}) => {
    isSubmitting = false;
    restoreSubmitButton();
    if (status) status.textContent = '送信できませんでした';
    clearFieldErrors();
    if (errorMessage) {
      errorMessage.textContent = message || '送信結果を確認できませんでした。';
    }
    let firstInvalidField = null;
    if (fieldErrorList && fields && typeof fields === 'object') {
      Object.entries(fields).forEach(([key, fieldMessage]) => {
        const config = fieldConfig[key];
        if (!config || typeof fieldMessage !== 'string') return;
        const item = document.createElement('li');
        item.textContent = `${config.label}：${fieldMessage}`;
        fieldErrorList.appendChild(item);
        form.querySelectorAll(config.selector).forEach(field => {
          field.setAttribute('aria-invalid', 'true');
          const describedBy = new Set((field.getAttribute('aria-describedby') || '').split(/\s+/).filter(Boolean));
          describedBy.add('contact-field-errors');
          field.setAttribute('aria-describedby', [...describedBy].join(' '));
          if (!firstInvalidField) firstInvalidField = field;
        });
      });
      fieldErrorList.hidden = fieldErrorList.childElementCount === 0;
    }
    if (error) {
      error.hidden = false;
      error.focus({ preventScroll: true });
      error.scrollIntoView({
        behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
        block: 'center'
      });
    }
    if (firstInvalidField) {
      window.requestAnimationFrame(() => firstInvalidField.focus({ preventScroll: true }));
    }
  };

  const createSubmissionId = () => {
    if (window.crypto?.randomUUID) return window.crypto.randomUUID();
    if (window.crypto?.getRandomValues) {
      const bytes = new Uint8Array(16);
      window.crypto.getRandomValues(bytes);
      bytes[6] = (bytes[6] & 0x0f) | 0x40;
      bytes[8] = (bytes[8] & 0x3f) | 0x80;
      const hex = [...bytes].map(byte => byte.toString(16).padStart(2, '0')).join('');
      return `${hex.slice(0, 8)}-${hex.slice(8, 12)}-${hex.slice(12, 16)}-${hex.slice(16, 20)}-${hex.slice(20)}`;
    }
    return '';
  };

  const renewSubmissionId = () => {
    if (submissionIdInput) submissionIdInput.value = createSubmissionId();
  };

  form.addEventListener('submit', async event => {
    event.preventDefault();
    if (isSubmitting) return;

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    isSubmitting = true;
    if (error) error.hidden = true;
    clearFieldErrors();
    if (submitButton) {
      submitButton.disabled = true;
      submitButton.textContent = '送信しています…';
    }
    if (status) status.textContent = 'お問い合わせを送信しています…';

    const controller = new AbortController();
    const timeout = window.setTimeout(() => controller.abort(), 20000);

    try {
      const response = await fetch(form.action, {
        method: 'POST',
        body: new FormData(form),
        headers: { Accept: 'application/json' },
        signal: controller.signal
      });
      const result = await response.json().catch(() => null);

      if (!response.ok || result?.ok !== true) {
        const requestError = new Error(result?.message || '送信結果を確認できませんでした。');
        requestError.fields = result?.fields || {};
        throw requestError;
      }

      isSubmitting = false;
      form.hidden = true;
      success.hidden = false;
      success.focus({ preventScroll: true });
      success.scrollIntoView({
        behavior: window.matchMedia('(prefers-reduced-motion: reduce)').matches ? 'auto' : 'smooth',
        block: 'center'
      });
    } catch (requestError) {
      const message = requestError.name === 'AbortError'
        ? '通信がタイムアウトしました。'
        : requestError.message;
      showError(message, requestError.fields);
    } finally {
      window.clearTimeout(timeout);
    }
  });

  form.addEventListener('invalid', event => {
    event.target.setAttribute('aria-invalid', 'true');
  }, true);

  form.addEventListener('input', event => {
    if (event.target.matches('input, select, textarea')) {
      clearFieldErrors();
      if (error) error.hidden = true;
    }
  });

  resetButton?.addEventListener('click', () => {
    form.reset();
    renewSubmissionId();
    applyContext();
    restoreSubmitButton();
    if (error) error.hidden = true;
    clearFieldErrors();
    success.hidden = true;
    form.hidden = false;
    form.querySelector('input:not([type="hidden"]), select, textarea')?.focus();
  });

  renewSubmissionId();
  applyContext();

  if (window.location.hash === '#contact-intro') {
    const alignContactIntro = () => window.requestAnimationFrame(() => {
      document.querySelector('#contact-intro')?.scrollIntoView({ block: 'start' });
    });
    if (document.readyState === 'complete') alignContactIntro();
    else window.addEventListener('load', alignContactIntro, { once: true });
  }
});
