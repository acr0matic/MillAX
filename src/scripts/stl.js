// {
//   "id":12,
//   "isSupport":false,
//   "stage":[
//      {
//         "name":"first",
//         "option":{
//            "material":"Не определено",
//            "construction":"Не определено",
//            "system":"Не определено",
//            "color":"Не определено",
//            "parameter":"Не определено",
//            "advanced":"Не определено"
//         }
//      },
//      {
//         "name":"second",
//         "option":{
//            "material":"Не определено",
//            "construction":"Не определено",
//            "system":"Не определено",
//            "color":"Не определено",
//            "parameter":"Не определено",
//            "advanced":"Не определено"
//         }
//      }
//   ]
// }

const teethData = {};
let teethTempData = {};

const teeths = document.querySelectorAll('.stl-teeth__map .stl-teeth__item');
const teethPreviewContainer = document.querySelector('.stl-stage__teeth');

let currentTeeth = null;
let currentTeethId = null;
let currentStage = null;

function generateTeethData() {
  teethTempData['isSupport'] = false;
  teethTempData['stage'] = [];

  const stages = document.querySelectorAll('.stl-stage__tab');
  stages.forEach(stage => {
    teethTempData.stage.push({
      ['name']: stage.getAttribute('data-stl-stage'),
      ['option']: {
        ['material']: 'Не определено',
        ['construction']: 'Не определено',
        ['system']: 'Не определено',
        ['color']: 'Не определено',
        ['parameter']: 'Не определено',
        ['advanced']: 'Не определено',
      },
    });
  });
}

teeths.forEach(teeth => {
  // Прописываем айди каждому зубу на основе текста внутри зуба
  teeth.setAttribute('data-teeth-id', teeth.querySelector('.stl-teeth__id').innerHTML.replace(/\s/g, ''));
  teeth.addEventListener('click', () => {

    // Получаем текущий зуб и его айди
    currentTeeth = teeth;
    currentTeethId = currentTeeth.getAttribute('data-teeth-id');

    currentStage = document.querySelector('.stl-stage__tab--active').getAttribute('data-stl-stage');

    // Очистка временного объекта и генерация нового
    teethTempData = {};
    generateTeethData();

    // Подгружаем сохраненные значения
    if (teethData[currentTeethId])
      teethTempData = teethData[currentTeethId];

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
  updateTooltips();

  console.log("Временный объект внутри зуба: ");
  console.log(teethTempData);
  console.log("Объект всех зубов: ");
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
        console.log("🚀 ~ file: stl.js ~ line 100 ~ accept.addEventListener ~ selectedOption", selectedOption)

        if (selectedOption.length === 0) {
          teethTempDatateethTempData.stage[0].option[statusType] = 'Не определено';
        }

        if (statusType === 'advanced') {
          teethTempData.stage[0].option[statusType] = [];

          if (selectedOption.length === 0) {
            teethTempData.stage[0].option[statusType] = ['Не определено'];
            updateInfo();
          }
        }

        selectedOption.forEach(option => {
          const selected = option.getAttribute('type');

          if (selected === 'radio')
            teethTempData.stage[0].option[statusType] = getRadioValue(option);

          if (selected === 'checkbox')
            teethTempData.stage[0].option[statusType].push(getCheckboxValue(option));

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

    const value = teethTempData.stage[0].option[statusType];

    if (value !== 'Не определено')
      statusIcon.classList.add('stl-stage__checkmark--visible');
    else
      statusIcon.classList.remove('stl-stage__checkmark--visible');
  });

  // Обновление таблицы внутри зуба
  teethInfoItems.forEach(item => {
    const dataType = item.getAttribute('data-stl-info');
    const output = item.querySelector('.stl-info__value');

    const value = teethTempData.stage[0].option[dataType];

    if (value !== 'Не определено')
      output.innerHTML = value;
    else
      output.innerHTML = "Не определено";
  });
}

let tippyInstances = [];
const singleton = tippy.createSingleton([], {
  placement: 'bottom',
  allowHTML: true,
  theme: 'millax',

  delay: 100,
});

function updateTooltips() {
  // Проверка на существование тултипа
  let isExist;
  tippyInstances.forEach(instance => {
    const instanceID = instance.reference.getAttribute('data-teeth-id');
    if (instanceID === currentTeethId)
      isExist = true;
  });

  if (isExist) return;

  // Обновление массива и синглтона
  tippyInstances.push(tippy(currentTeeth));
  singleton.setInstances(tippyInstances);

  tippyInstances.forEach(instance => {
    instance.reference.addEventListener('mouseover', () => {
      const teethID = instance.reference.getAttribute('data-teeth-id');
      if (teethData[teethID]) {
        instance.setContent(InfoTemplate(teethData[teethID]));
      }
    });
  });
}

function InfoTemplate(data) {
  return `
  <div class="stl-stage__info stl-info stl-info--mini">
  <div data-stl-info="construction" class="stl-info__item mb-1">
    <h3 class="stl-info__title">Конструкция</h3>
    <div class="stl-info__value">${data.stage[0].option.construction}</div>
  </div>
  <!-- /.stl-info__item -->

  <div data-stl-info="system" class="stl-info__item mb-1">
    <h3 class="stl-info__title">Система имплантов и размеры</h3>
    <div class="stl-info__value">${data.stage[0].option.system}</div>
  </div>
  <!-- /.stl-info__item -->

  <div data-stl-info="material" class="stl-info__item mb-1">
    <h3 class="stl-info__title">Материал изготовления</h3>
    <div class="stl-info__value">${data.stage[0].option.material}</div>
  </div>
  <!-- /.stl-info__item -->

  <div data-stl-info="color" class="stl-info__item mb-1">
    <h3 class="stl-info__title">Цвет коронки</h3>
    <div class="stl-info__value">${data.stage[0].option.color}</div>
  </div>
  <!-- /.stl-info__item -->

  <div data-stl-info="parameter" class="stl-info__item mb-1">
    <h3 class="stl-info__title">Десневая часть</h3>
    <div class="stl-info__value">${data.stage[0].option.parameter}</div>
  </div>
  <!-- /.stl-info__item -->

  <div data-stl-info="advanced" class="stl-info__item">
    <h3 class="stl-info__title">Опак и карвинг</h3>
    <div class="stl-info__value">${data.stage[0].option.advanced}</div>
  </div>
  <!-- /.stl-info__item -->
</div>
<!-- /.stl-stage__info -->
`
}