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

const teethData = [];
let teethTempData = [];

const teeths = document.querySelectorAll('.stl-teeth__map .stl-teeth__item');
const teethPreviewContainer = document.querySelector('.stl-stage__teeth');

let currentTeeth = null;
let currentTeethId = null;
let currentStage = null;

teeths.forEach(teeth => {
  // Прописываем айди каждому зубу на основе текста внутри зуба
  teeth.setAttribute('data-teeth-id', teeth.querySelector('.stl-teeth__id').innerHTML.replace(/\s/g, ''));
  teeth.addEventListener('click', () => {

    // Получаем текущий зуб и его айди
    currentTeeth = teeth;
    currentTeethId = currentTeeth.getAttribute('data-teeth-id');

    currentStage = document.querySelector('.stl-stage__tab--active').innerHTML;


    // Очистка временного объекта
    teethTempData = [];

    // Подгружаем сохраненные значения
    if (teethData[currentTeethId])
      teethTempData = teethData[currentTeethId];
    else
      teethTempData[currentStage] = {};

    updateInfo();

    // Очищаем блок и добавляем иконку зуба
    const clonedTeeth = teeth.cloneNode(true);
    clonedTeeth.classList.remove('stl-teeth__item--saved');
    teethPreviewContainer.innerHTML = '';
    teethPreviewContainer.append(clonedTeeth);

    stlSlider.slideNext();
  });
});

const saveButton = document.querySelector('[data-stl-action="save"]');
saveButton.addEventListener('click', () => {
  saveOptions(currentTeeth);
});

function saveOptions(teeth) {
  teethData[currentTeethId] = teethTempData;

  console.log(teethData);
  teeth.classList.add('stl-teeth__item--saved')
}

/*******************************************************************/

const stlModals = document.querySelectorAll('.modal-stl');
const optionButtons = document.querySelectorAll('.stl-stage__button');

optionButtons.forEach(button => {
  const statusType = button.getAttribute('data-status');
  const status = document.querySelector('[data-status=' + statusType);
  const statusIcon = status.querySelector('.stl-stage__checkmark');

  stlModals.forEach(modal => {
    if (statusType === modal.getAttribute('data-status')) {
      const accept = modal.querySelector('.modal-stl__button');

      accept.addEventListener('click', () => {
        const selectedOption = modal.querySelectorAll(`input[name=${statusType}]:checked`);

        if (statusType === 'advanced') {
          teethTempData[currentStage][statusType] = [];

          if (selectedOption.length === 0) {
            teethTempData[currentStage][statusType] = ['Не определено'];
            updateInfo();
          }
        }

        selectedOption.forEach(option => {
          const selected = option.getAttribute('type');

          if (selected === 'radio')
            teethTempData[currentStage][statusType] = getRadioValue(option);

          if (selected === 'checkbox')
            teethTempData[currentStage][statusType].push(getCheckboxValue(option));

          console.log(teethTempData);
          updateInfo();
        });

        // Галочки при сохранении настройки
        statusIcon.classList.add('stl-stage__checkmark--visible');
      })
    }
  });
});

const teethInfoBlock = document.querySelector('.stl-stage__info');
const teethInfoItems = teethInfoBlock.querySelectorAll('.stl-info__item');

function getRadioValue(radio) {
  let parent = radio.closest('.radio')
  return parent.querySelector('.radio__label').innerHTML;
}

function getCheckboxValue(checkbox) {
  let parent = checkbox.closest('.checkbox')
  return parent.querySelector('.checkbox__label').innerHTML;
}

function updateInfo() {

  // Обновление элементов круга
  optionButtons.forEach(button => {
    const statusType = button.getAttribute('data-status');
    const status = document.querySelector('[data-status=' + statusType);
    const statusIcon = status.querySelector('.stl-stage__checkmark');

    const value = teethTempData[currentStage].hasOwnProperty(statusType);

    if (value)
      statusIcon.classList.add('stl-stage__checkmark--visible');
    else
      statusIcon.classList.remove('stl-stage__checkmark--visible');
  });

  // Обновление таблицы внутри зуба
  teethInfoItems.forEach(item => {
    const dataType = item.getAttribute('data-stl-info');
    const output = item.querySelector('.stl-info__value');

    const value = teethTempData[currentStage][dataType];

    if (value)
      output.innerHTML = value;
    else
      output.innerHTML = "Не определено";
  });
}