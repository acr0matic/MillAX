const stlDesktop = document.getElementById('stl-desktop');
const stlMobile = document.getElementById('stl-mobile');

// Показывать на телефоне "Версия только для ПК"
if (window.matchMedia("(max-width: 1200px)").matches) {
  stlDesktop.style.display = 'none';
  stlMobile.style.display = 'block';
}

// Прелоадер
const preloader = document.getElementById('preloader');
document.addEventListener("DOMContentLoaded", function () {
  window.setTimeout(function () {
    preloader.classList.add('preloader--hide');
  }, 1000);
});

// Форма обратной связи
const FormContoller = function () {
  const form = document.getElementById('stl-form');
  const mailMessage = document.getElementById('stlMailMessage');
  const mailPreloader = document.getElementById('stlFormPreloader');
  const mailAction = form.getAttribute('action');

  const allFields = form.querySelectorAll('input, textarea');
  const fields = form.querySelectorAll('[require]');
  const fileInput = form.querySelector('[type="file"]');

  let formData, screenshot, dropzone;

  return {
    Init: () => {
      Dropzone.autoDiscover = false;

      dropzone = new Dropzone('#dropzone', {
        url: form.getAttribute("action"),
        addRemoveLinks: true,
        dictDefaultMessage: "Чтобы прикрепить файлы, перетяните их в это окно",
        dictCancelUpload: 'Отменить',
        dictRemoveFile: 'Удалить',
        uploadMultiple: true,
        paramName: 'stl-file',
      });

      fields.forEach(field => {
        field.addEventListener('click', () => {
          field.classList.remove('input-field--error');
          mailMessage.classList.remove('stl-form__message--visible');
        });
      });

      dropzone.element.addEventListener('click', () => {
        mailMessage.classList.remove('stl-form__message--visible');
      });

      form.onsubmit = async (e) => {
        e.preventDefault();

        mailPreloader.classList.add('stl-form__preloader--visible')
        formData = new FormData(form);

        dropzone.files.forEach(file => formData.append('stl-file[]', file));

        if (FormContoller.ValidateFields()) {
          const targetDiv = document.getElementById('teethMap');
          targetDiv.style.backgroundColor = "#f1f1f1";

          html2canvas(targetDiv, { scrollY: -window.scrollY }).then(canvas => canvas.toBlob(blob => {
            screenshot = blob;

            FormContoller.SetData();
            FormContoller.SendMail(mailAction);

            targetDiv.style.backgroundColor = "#ffffff";
          }));
        }
      }
    },

    ValidateFields: () => {
      let isEmpty, noFile;

      fields.forEach(field => {
        if (!field.value) {
          field.classList.add('input-field--error');
          isEmpty = true;
        }
      });

      noFile = dropzone.files.length !== 0 ? false : true;

      if (isEmpty && noFile) {
        mailPreloader.classList.remove('stl-form__preloader--visible')
        FormContoller.SetMessage('error', 'Есть незаполненные поля, не выбран STL-файл');
      }

      else if (isEmpty) {
        mailPreloader.classList.remove('stl-form__preloader--visible')
        FormContoller.SetMessage('error', 'Есть незаполненные поля');
      }

      else if (noFile) {
        mailPreloader.classList.remove('stl-form__preloader--visible')
        FormContoller.SetMessage('error', 'Не выбран STL-файл');
      }

      return !isEmpty && !noFile;
    },

    SendMail: async (action) => {
      let response = await fetch(action, {
        method: 'POST',
        body: formData,
      });

      let result = await response.json();

      FormContoller.SetMessage('success', 'Письмо успешно отправлено! Номер заявки: #' + result);
      FormContoller.ResetFields();

      mailPreloader.classList.remove('stl-form__preloader--visible')
    },

    AddData: (name, data) => {
      formData.set(name, data);
    },

    SetData: () => {
      FormContoller.AddData('screenshot', screenshot, "screenshot.png");
      FormContoller.AddData('teethData', JSON.stringify(teethData));
    },

    SetMessage: (type, msg) => {
      mailMessage.classList.remove('stl-form__message--error');
      mailMessage.classList.remove('stl-form__message--success');

      if (type === 'error') {
        mailMessage.classList.add('stl-form__message--error');
        mailMessage.classList.add('stl-form__message--visible');
        mailMessage.innerHTML = msg;
      }

      if (type === 'success') {
        mailMessage.classList.add('stl-form__message--success');
        mailMessage.classList.add('stl-form__message--visible');
        mailMessage.innerHTML = msg;
      }
    },

    ResetFields: () => {
      dropzone.removeAllFiles();
      allFields.forEach(field => {
        field.value = "";
      });
    }
  }
}();

FormContoller.Init();
