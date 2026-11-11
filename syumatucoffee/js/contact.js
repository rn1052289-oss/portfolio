document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  var form = document.querySelector('[data-contact-form]');

  if (!form) {
    return;
  }

  var submitButton = form.querySelector('[data-contact-submit]');
  var statusMessage = document.getElementById('contact-form-status');

  if (!submitButton || !statusMessage) {
    return;
  }

  function showStatus(message, state) {
    statusMessage.textContent = message;
    statusMessage.className = 'contact-form__status contact-form__status--' + state;
    statusMessage.hidden = false;
  }

  form.addEventListener('submit', function (event) {
    event.preventDefault();

    if (!form.checkValidity()) {
      form.reportValidity();
      return;
    }

    form.reset();
    showStatus('フォーム操作のデモが完了しました。入力内容は送信・保存されていません。', 'success');
    statusMessage.focus();
  });
});
