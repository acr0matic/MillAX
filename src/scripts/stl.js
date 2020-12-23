const teeths = document.querySelectorAll('.stl-teeth__item');

teeths.forEach(teeth => {
  teeth.addEventListener('click', () => {
    stlSlider.slideNext();
  });
});

const stlModals = document.querySelectorAll('.modal-stl');
const stageButtons = document.querySelectorAll('.stl-stage__button');

stageButtons.forEach(button => {
  const statusType = button.getAttribute('data-status');
  const status = document.querySelector('[data-status=' + statusType);
  const statusIcon = status.querySelector('.stl-stage__checkmark');

  stlModals.forEach(modal => {
    if (statusType === modal.getAttribute('data-status')) {
      const accept = modal.querySelector('.modal-stl__button');
      accept.addEventListener('click', () => {
        statusIcon.classList.add('stl-stage__checkmark--visible');
      })
    }
  });
});

