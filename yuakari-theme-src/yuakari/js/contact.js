/* ================================================
   contact.js — お問い合わせページ専用JavaScript
   架空サイトのフォームUI見本（外部送信は行わない）
   ================================================ */

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector(".contact-form[data-demo-form='true']");
  if (!form) return;

  const requiredFields = Array.from(form.querySelectorAll("[required]"));

  function isEnglish() {
    return document.documentElement.lang === "en";
  }

  function errorFor(field) {
    const ids = (field.getAttribute("aria-describedby") || "").split(/\s+/);
    const errorId = ids.find(function (id) { return id.indexOf("error-") === 0; });
    return errorId ? document.getElementById(errorId) : null;
  }

  function validate(field) {
    const isEmpty = field.type === "checkbox" ? !field.checked : !field.value.trim();
    const invalidEmail = field.type === "email" && !isEmpty && !field.validity.valid;
    const invalid = isEmpty || invalidEmail;
    const error = errorFor(field);

    field.setAttribute("aria-invalid", invalid ? "true" : "false");
    field.classList.toggle("is-invalid", invalid);

    if (error) {
      if (invalidEmail) {
        error.textContent = isEnglish()
          ? "Please enter a valid email address."
          : "メールアドレスの形式を確認してください。";
      } else if (invalid) {
        error.textContent = isEnglish()
          ? "Please complete this required field."
          : "必須項目を入力してください。";
      } else {
        error.textContent = "";
      }
    }

    return !invalid;
  }

  requiredFields.forEach(function (field) {
    ["input", "change", "blur"].forEach(function (eventName) {
      field.addEventListener(eventName, function () {
        if (field.getAttribute("aria-invalid") === "true" || eventName === "blur") {
          validate(field);
        }
      });
    });
  });

  form.addEventListener("submit", function (event) {
    event.preventDefault();

    const firstInvalid = requiredFields.find(function (field) {
      return !validate(field);
    });

    if (firstInvalid) {
      firstInvalid.focus();
      return;
    }

    showDemoComplete();
  });

  function showDemoComplete() {
    const formArea = document.querySelector(".contact-form-area");
    if (!formArea) return;

    const topUrl = (typeof yuakariVars !== "undefined" && yuakariVars.homeUrl)
      ? yuakariVars.homeUrl
      : "/";
    const english = isEnglish();

    formArea.innerHTML =
      '<div class="contact-thanks" role="status" tabindex="-1">' +
      '<p class="contact-thanks-en">DEMO COMPLETE</p>' +
      '<h2 class="contact-thanks-title">' +
      (english ? "The form demo is complete" : "フォーム操作のデモが完了しました") +
      '</h2>' +
      '<p class="contact-thanks-text">' +
      (english
        ? "Your entries were not transmitted or stored."
        : "入力内容は送信・保存されていません。") +
      '</p>' +
      '<a href="https://rnportfolio.xsrv.jp/contact.html?source=yuakari-demo" class="contact-thanks-btn">' +
      (english ? "Contact Riku about a project" : "実際の制作について相談する") +
      '</a>' +
      '<a href="' + topUrl + '" class="contact-thanks-link">' +
      (english ? "Back to top" : "作品のトップへ戻る") +
      '</a>' +
      '</div>';

    formArea.querySelector(".contact-thanks").focus();
  }
});
