// const teethData = [
//   {
//     'id': 41,
//     'isSupport' : false,
//     'stage': [
//       {
//         'stage': 1,
//         'construction': 'Не определено',
//         'system': 'Не определено',
//         'material': 'Не определено',
//         'parameter': 'Не определено',
//         'design': 'Не определено',
//         'advanced': 'Не определено',
//       },
//       {
//         'stage': 2,
//         'construction': 'Не определено',
//         'system': 'Не определено',
//         'material': 'Не определено',
//         'parameter': 'Не определено',
//         'design': 'Не определено',
//         'advanced': 'Не определено',
//       },
//     ]
//   }
// ];

const teethData = [
  {

  },
];

const teeths = document.querySelectorAll('.stl-teeth__map .stl-teeth__item');
const teethPreviewContainer = document.querySelector('.stl-stage__teeth');

teeths.forEach(teeth => {
  // Прописываем айди каждому зубу на основе текста внутри зуба
  teeth.setAttribute('data-teeth-id', teeth.querySelector('.stl-teeth__id').innerHTML.replace(/\s/g, ''));
  teeth.addEventListener('click', () => {
    
    // Очищаем блок и добавляем иконку зуба
    teethPreviewContainer.innerHTML = '';
    teethPreviewContainer.append(teeth);
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

