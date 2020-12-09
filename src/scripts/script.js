AOS.init({
  once: true,
});

MicroModal.init({
  awaitCloseAnimation: true,
  disableFocus: true,
  disableScroll: false,
});

if (window.matchMedia("(max-width: 996px)").matches) {
  const accordions = Array.from(document.querySelectorAll('.handorgel')).map((selector) => new handorgel(selector));

  accordions.forEach((accordion) => {
    const icon = accordion.element.querySelector('.handorgel__icon--mobile');

    accordion.on('fold:open', () => {
      icon.classList.toggle('handorgel__icon--opened');
    });

    // listen for event
    accordion.on('fold:close', () => {
      icon.classList.toggle('handorgel__icon--opened');
    });
  });

}

const phoneInput = document.querySelectorAll('[name=user_phone]');
const phoneMaskOptions = {
  mask: '+{7}(000)000-00-00'
};

phoneInput.forEach(input => {
  IMask(input, phoneMaskOptions);
});

const forms = document.querySelectorAll('.form');

forms.forEach(form => {
  const button = form.querySelector('.button');
  const checkbox = form.querySelector('input[type=checkbox]');

  if (checkbox) {
    button.setAttribute('disabled', 'disabled');

    checkbox.addEventListener('change', () => {
      if (checkbox.checked)
        button.removeAttribute('disabled');
      else
        button.setAttribute('disabled', 'disabled');
    })
  }
});
