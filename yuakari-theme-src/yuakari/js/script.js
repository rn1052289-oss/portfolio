/* ================================================
   script.js
   湯灯商會 全ページ共通JavaScript
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {

  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;
  const saveData = Boolean(navigator.connection && navigator.connection.saveData);

  /* ================================
     1. ヒーロースライダー
     ================================ */
  const SLIDE_INTERVAL = 5000;
  const slides = document.querySelectorAll(".hero-slide");
  const heroSection = document.getElementById("hero");
  let currentSlide = 0;
  let slideTimer = null;
  let userPausedHero = reducedMotion || saveData;
  let heroToggle = null;

  if (slides.length > 1 && heroSection) {
    heroToggle = document.createElement("button");
    heroToggle.type = "button";
    heroToggle.className = "hero-slider-toggle";
    heroToggle.setAttribute("aria-controls", "hero-slider");
    heroSection.appendChild(heroToggle);

    heroToggle.addEventListener("click", function () {
      if (slideTimer !== null) {
        userPausedHero = true;
        stopHeroSlider();
      } else {
        userPausedHero = false;
        startHeroSlider();
      }
    });

    if (!userPausedHero) {
      startHeroSlider();
    } else {
      stopHeroSlider();
    }
    updateHeroToggle();

    document.addEventListener("visibilitychange", function () {
      if (document.hidden) {
        stopHeroSlider();
      } else if (!userPausedHero) {
        startHeroSlider();
      }
    });
  }

  function startHeroSlider() {
    if (userPausedHero || document.hidden || slides.length < 2) {
      updateHeroToggle();
      return;
    }

    clearInterval(slideTimer);
    heroSection.classList.remove("is-motion-paused");
    slideTimer = setInterval(function () {
      slides[currentSlide].classList.remove("is-active");
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add("is-active");
    }, SLIDE_INTERVAL);
    updateHeroToggle();
  }

  function stopHeroSlider() {
    clearInterval(slideTimer);
    slideTimer = null;
    if (heroSection) heroSection.classList.add("is-motion-paused");
    updateHeroToggle();
  }

  function updateHeroToggle() {
    if (!heroToggle) return;
    const isRunning = slideTimer !== null;
    heroToggle.textContent = isRunning ? "停止 / Pause" : "再生 / Play";
    heroToggle.setAttribute(
      "aria-label",
      isRunning
        ? "メイン画像の自動切替を停止 / Pause automatic hero slideshow"
        : "メイン画像の自動切替を再生 / Play automatic hero slideshow"
    );
  }


  /* ================================
     2. ハンバーガーメニューの開閉
     ================================ */
  const hamburgerBtn = document.getElementById("hamburger-btn");
  const globalNav    = document.getElementById("global-nav");

  if (hamburgerBtn && globalNav) {

    const mobileMenu = window.matchMedia("(max-width: 768px)");
    let lastFocused = null;

    hamburgerBtn.addEventListener("click", function () {
      const isOpen = hamburgerBtn.getAttribute("aria-expanded") === "true";
      if (isOpen) { closeMenu(true); } else { openMenu(); }
    });

    function openMenu() {
      if (!mobileMenu.matches) return;
      lastFocused = document.activeElement;
      hamburgerBtn.setAttribute("aria-expanded", "true");
      hamburgerBtn.setAttribute("aria-label", "メニューを閉じる");
      globalNav.classList.add("is-open");
      globalNav.removeAttribute("inert");
      globalNav.setAttribute("aria-hidden", "false");
      document.documentElement.classList.add("is-menu-open");
      document.body.classList.add("is-menu-open");

      window.requestAnimationFrame(function () {
        const firstLink = globalNav.querySelector("a, button");
        if (firstLink) firstLink.focus();
      });
    }

    function closeMenu(restoreFocus) {
      hamburgerBtn.setAttribute("aria-expanded", "false");
      hamburgerBtn.setAttribute("aria-label", "メニューを開く");
      globalNav.classList.remove("is-open");
      document.documentElement.classList.remove("is-menu-open");
      document.body.classList.remove("is-menu-open");

      if (mobileMenu.matches) {
        globalNav.setAttribute("inert", "");
        globalNav.setAttribute("aria-hidden", "true");
      } else {
        globalNav.removeAttribute("inert");
        globalNav.removeAttribute("aria-hidden");
      }

      if (restoreFocus && lastFocused instanceof HTMLElement) {
        lastFocused.focus();
      }
    }

    const navLinks = globalNav.querySelectorAll("a");
    navLinks.forEach(function (link) {
      link.addEventListener("click", function () { closeMenu(false); });
    });

    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && hamburgerBtn.getAttribute("aria-expanded") === "true") {
        closeMenu(true);
      }

      if (e.key === "Tab" && hamburgerBtn.getAttribute("aria-expanded") === "true") {
        const focusable = Array.from(globalNav.querySelectorAll("a, button:not([disabled])"));
        if (!focusable.length) return;
        const first = focusable[0];
        const last = focusable[focusable.length - 1];

        if (e.shiftKey && document.activeElement === first) {
          e.preventDefault();
          last.focus();
        } else if (!e.shiftKey && document.activeElement === last) {
          e.preventDefault();
          first.focus();
        }
      }
    });

    function syncMenuMode() {
      closeMenu(false);
    }

    mobileMenu.addEventListener("change", syncMenuMode);
    syncMenuMode();
  }


  /* ================================
     3. スムーススクロール
     ================================ */
  const smoothLinks = document.querySelectorAll('a[href^="#"]');

  smoothLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");
      if (targetId === "#") return;
      const target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        const header = document.querySelector(".site-header");
        const offset = header ? header.offsetHeight : 0;
        const pos = target.getBoundingClientRect().top + window.pageYOffset - offset;
        window.scrollTo({ top: pos, behavior: "smooth" });
      }
    });
  });


  /* ================================
     4. 現在ページのナビアクティブ
        WordPress の URL 形式（/about/ 等）に対応
        ※ PHP 側の aria-current が優先。JS は補助的に動作する
     ================================ */
  (function () {
    // WordPress URL: /about/ → slug = "about"
    const pathname = location.pathname.replace(/\/$/, ""); // 末尾スラッシュ除去
    const currentSlug = pathname.split("/").pop() || "home";

    document.querySelectorAll(".global-nav-list a").forEach(function (link) {
      // PHP が既に設定済みの場合はスキップ
      if (link.getAttribute("aria-current") === "page") return;

      const href = link.getAttribute("href") || "";
      // href から slug を取り出す（例: https://example.com/about/ → "about"）
      const linkSlug = href.replace(/\/$/, "").split("/").pop() || "home";

      if (linkSlug === currentSlug) {
        link.setAttribute("aria-current", "page");
        return;
      }

      // ツアー詳細ページ（tour-craft, tour-morning 等）は TOURS をアクティブに
      if (
        currentSlug.startsWith("tour") &&
        currentSlug !== "tours" &&
        linkSlug === "tours"
      ) {
        link.setAttribute("aria-current", "page");
      }
    });
  })();


  /* ================================
     5. 言語切り替え
     ================================
     【修正内容】
     ① langSwitchBtn を switchLanguage() 呼び出しより前に宣言
        → const の TDZ（Temporal Dead Zone）エラーを解消
        → localStorage に "en" が保存されていてもクラッシュしない

     ② <br> など HTML 構造を保持する innerHTML キャッシュ方式
        → textContent では <br> が消えるため innerHTML で保存・復元

     ③ placeholder / aria-label の切り替えを追加
        → フォームのプレースホルダーも言語に応じて切り替わる

     ④ ヘッダーボタンとフッターリンクの双方向連携
        → どちらから切り替えても両方の表示が正しく更新される
     ================================ */

  // ★ 先に取得する（switchLanguage 内で参照するため宣言を前に移動）
  const langSwitchBtn = document.getElementById("lang-switch-btn");

  // 元の innerHTML をキャッシュ（<br> などの HTML 構造を守るため）
  const jaHtmlCache = new Map();

  let currentLang = localStorage.getItem("yuakari-lang") || "ja";

  // 保存済み言語が英語ならページ読み込み時に英語へ切り替え
  if (currentLang !== "ja") {
    switchLanguage(currentLang);
  }

  // ヘッダーの言語切り替えボタン
  if (langSwitchBtn) {
    langSwitchBtn.addEventListener("click", function () {
      const newLang = (currentLang === "ja") ? "en" : "ja";
      switchLanguage(newLang);
    });
  }

  // フッターの言語リンク
  const footerLangLinks = document.querySelectorAll(".footer-lang-link");
  footerLangLinks.forEach(function (link) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const newLang = this.getAttribute("data-lang");
      switchLanguage(newLang);
    });
  });

  function switchLanguage(lang) {

    // --- テキストコンテンツの切り替え ---
    document.querySelectorAll("[data-ja]").forEach(function (el) {
      // 初回実行時に元の innerHTML を保存（<br> など HTML 構造を保持）
      if (!jaHtmlCache.has(el)) {
        jaHtmlCache.set(el, el.innerHTML);
      }

      if (lang === "ja") {
        // 保存した日本語 HTML を復元（<br> が消えない）
        el.innerHTML = jaHtmlCache.get(el);
      } else {
        const newText = el.getAttribute("data-" + lang);
        if (newText !== null) {
          // innerHTML で設定（&amp; などエンティティも正しく扱える）
          el.innerHTML = newText;
        }
      }
    });

    // --- placeholder の切り替え（フォーム入力欄）---
    document.querySelectorAll("[data-placeholder-ja]").forEach(function (el) {
      const newPlaceholder = el.getAttribute("data-placeholder-" + lang);
      if (newPlaceholder !== null) { el.placeholder = newPlaceholder; }
    });

    // --- aria-label の切り替え ---
    document.querySelectorAll("[data-aria-label-ja]").forEach(function (el) {
      const newLabel = el.getAttribute("data-aria-label-" + lang);
      if (newLabel !== null) { el.setAttribute("aria-label", newLabel); }
    });

    // --- html lang 属性の更新 ---
    document.documentElement.lang = lang;

    // --- ヘッダー言語ボタンの表示更新（フッターから呼ばれた場合も更新）---
    if (langSwitchBtn) {
      const spans = langSwitchBtn.querySelectorAll("span:not(.lang-divider)");
      if (lang === "en") {
        spans[0].className = "lang-other";   // JP → 非選択
        spans[1].className = "lang-current"; // EN → 選択中
      } else {
        spans[0].className = "lang-current"; // JP → 選択中
        spans[1].className = "lang-other";   // EN → 非選択
      }
      // ボタン自体の aria-label も更新
      langSwitchBtn.setAttribute(
        "aria-label",
        lang === "en" ? "Switch to Japanese" : "Switch to English"
      );
    }

    // --- body クラスの切り替え（CSS での言語別スタイル制御に使用）---
    document.body.classList.toggle("is-en", lang === "en");
    document.body.classList.toggle("is-ja", lang === "ja");

    currentLang = lang;
    localStorage.setItem("yuakari-lang", lang);
  }


  /* ================================
     6. ヘッダー：スクロールで背景を濃くする
     ================================ */
  const siteHeader = document.getElementById("header");

  if (siteHeader) {
    const onScroll = function () {
      if (window.scrollY > 60) {
        siteHeader.classList.add("is-scrolled");
      } else {
        siteHeader.classList.remove("is-scrolled");
      }
    };
    window.addEventListener("scroll", onScroll, { passive: true });
    onScroll(); // 初回実行
  }


  /* ================================
     7. スクロールリビールアニメーション
        ― IntersectionObserver で要素を順次表示する
     ================================
     【仕組み】
     ① prefers-reduced-motion が有効なら何もしない（アクセシビリティ）
     ② 主要な要素に .js-reveal / .js-stagger / .js-reveal-img クラスを自動付与
        ※ ページ固有HTML に書かなくても全ページに適用される
     ③ IntersectionObserver で可視判定 → .is-visible を付与
     ④ CSS側で初期状態（非表示）と is-visible 時のアニメーションを定義
     ================================ */
  if (!reducedMotion) {

    // --- セクションラベル ---
    document.querySelectorAll(".section-label").forEach(function (el) {
      if (!el.closest(".hero-section")) {
        el.classList.add("js-reveal");
      }
    });

    // --- セクション見出し（和文・英文サブ）---
    document.querySelectorAll(".section-heading-ja, .section-heading-sub").forEach(function (el) {
      if (!el.closest(".hero-section")) {
        el.classList.add("js-reveal");
      }
    });

    // --- 本文テキスト ---
    document.querySelectorAll(
      ".about-body, .philosophy-body, .pause-text, .about-pause-text, .contact-sub"
    ).forEach(function (el) {
      el.classList.add("js-reveal");
    });

    // --- コンセプト帯タイトル / サブ ---
    document.querySelectorAll(
      ".pause-title, .pause-sub, .about-pause-title, .about-pause-sub"
    ).forEach(function (el) {
      el.classList.add("js-reveal");
    });

    // --- 画像エリア ---
    document.querySelectorAll(
      ".about-image-area, .philosophy-image-area"
    ).forEach(function (el) {
      el.classList.add("js-reveal-img");
    });

    // --- カードグリッド（子要素を stagger で出す）---
    document.querySelectorAll(
      ".discover-grid, .features-grid, .food-grid, .craft-cards-grid, .festival-grid, .voice-grid"
    ).forEach(function (el) {
      el.classList.add("js-stagger");
    });

    // --- ツアーカード（TOP専用・featuredも含む）---
    document.querySelectorAll(".tour-grid").forEach(function (el) {
      el.classList.add("js-stagger");
    });

    // --- アクセス情報・CTAボタン ---
    document.querySelectorAll(
      ".access-content, .contact-cta-area, .about-cta-inner, .contact-inner"
    ).forEach(function (el) {
      el.classList.add("js-reveal");
    });

    // --- sub-firstview のテキスト ---
    document.querySelectorAll(".sub-firstview-inner").forEach(function (el) {
      el.classList.add("js-fv-reveal");
    });

    // --- タイムライン ---
    document.querySelectorAll(".timeline").forEach(function (el) {
      el.classList.add("js-stagger");
    });

    // --- IntersectionObserver 設定 ---
    const observerOptions = {
      threshold: 0.12,
      rootMargin: "0px 0px -30px 0px"
    };

    // 通常 reveal
    const revealObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          revealObserver.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // 画像 reveal
    const imgObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          imgObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: "0px 0px -20px 0px" });

    // stagger（子要素に delay を付ける）
    const staggerObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const children = entry.target.children;
          Array.from(children).forEach(function (child, i) {
            // 各子要素に --stagger-delay カスタムプロパティで遅延を渡す
            child.style.setProperty("--stagger-i", i);
            child.classList.add("js-stagger-item", "is-visible");
          });
          staggerObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.08, rootMargin: "0px 0px -20px 0px" });

    // FV reveal（ページロード後すぐ起動するように閾値を低く）
    const fvObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          fvObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.01 });

    // 各 Observer に要素を登録
    document.querySelectorAll(".js-reveal").forEach(function (el) {
      revealObserver.observe(el);
    });
    document.querySelectorAll(".js-reveal-img").forEach(function (el) {
      imgObserver.observe(el);
    });
    document.querySelectorAll(".js-stagger").forEach(function (el) {
      staggerObserver.observe(el);
    });
    document.querySelectorAll(".js-fv-reveal").forEach(function (el) {
      fvObserver.observe(el);
    });

  } // end if (!reducedMotion)


  /* ================================
     8. Philosophy / About スライダー
        （about.js と重複しないよう、about.js がある場合は委譲）
     ================================ */
  // about.js で制御しているため、ここでは何もしない


  /* ================================
     9. hover 演出 — ツアーカードの矢印スライド
        （CSS側で .tour-card-btn / .tour-featured-btn に transition を追加）
     ================================ */
  // CSS に委譲


}); // end DOMContentLoaded
