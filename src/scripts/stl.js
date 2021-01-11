// ************************************ Объявление модулей

const StageController = function () {
  return {
    Init: function (stages) {
      stages.forEach((stage, index) => {
        stage.addEventListener('click', () => {
          StageController.Reset();
          StageController.Set(index);

          currentStage = index;
          stlStageSlider.slideTo(index);
        });
      });
    },

    Set: (index) => stages[index].classList.add('stl-stage__tab--active'),
    Reset: () => stages.forEach(stage => stage.classList.remove('stl-stage__tab--active')),
  }
}();

const TeethController = function () {
  return {
    Init: function (teeths) {
      teeths.forEach(teeth => {
        // Прописываем айди каждому зубу на основе текста внутри зуба
        teeth.setAttribute('data-teeth-id', teeth.querySelector('.stl-teeth__id').innerHTML.replace(/\s/g, ''));
        teeth.addEventListener('click', () => {

          // Получаем текущий зуб и его айди
          currentTeeth = teeth;
          currentTeethId = currentTeeth.getAttribute('data-teeth-id');

          currentStage = 0;
          stlStageSlider.slideTo(currentStage);

          StageController.Reset();
          StageController.Set(0);

          // Очистка временного объекта и генерация нового
          TeethController.GenerateData();

          // Подгружаем сохраненные значения
          if (teethData[currentTeethId])
            teethTempData = teethData[currentTeethId];

          updateInfo();

          // Очищаем блок и добавляем иконку зуба
          teethPreviewContainer.forEach(container => {
            const clonedTeeth = teeth.cloneNode(true);
            clonedTeeth.classList.remove('stl-teeth__item--saved');

            container.innerHTML = '';
            container.append(clonedTeeth);
          });

          stlSlider.slideNext();
        });
      });
    },

    GenerateData: function () {
      teethTempData = {};
      teethTempData['isSupport'] = false;
      teethTempData['stage'] = [];

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
    },

    Save: function (teeth) {
      teethData[currentTeethId] = teethTempData;
      teeth.classList.add('stl-teeth__item--saved')
    },

    Reset: function (teeth) {
      delete teethData[currentTeethId];
      console.log(teethData);
      teeth.classList.remove('stl-teeth__item--saved')
    },
  }
}();

const MainController = function () {
  const saveButton = document.querySelectorAll('[data-stl-action="save"]');
  const resetButton = document.querySelectorAll('[data-stl-action="reset"]');

  return {
    Init: function () {
      saveButton.forEach(button => button.addEventListener('click', () => this.Save(currentTeeth)));
      resetButton.forEach(button => button.addEventListener('click', () => this.Reset(currentTeeth)));
    },

    Save: function () {
      TeethController.Save(currentTeeth);
      TooltipController.Add();
    },

    Reset: function () {
      TeethController.Reset(currentTeeth);
      TooltipController.Remove();
    },

    Update: function () {
    },
  }
}();

const TooltipController = function () {
  let tippyInstances = [];
  const singleton = tippy.createSingleton([], {
    placement: 'bottom',
    allowHTML: true,
    theme: 'millax',
    maxWidth: 500,
    delay: 100,
  });

  const listener = function (instance) {
    const teethID = instance.getAttribute('data-teeth-id');
    if (teethData[teethID]) currentTeeth._tippy.setContent(InfoTemplate(teethData[teethID]));
  };

  return {
    Add: function () {
      // Проверка на существование тултипа
      for (let index = 0; index < tippyInstances.length; index++) {
        const instanceID = tippyInstances[index].reference.getAttribute('data-teeth-id');
        isExist = (instanceID === currentTeethId) ? true : false;

        if (isExist) return;
      }

      tippyInstances.push(tippy(currentTeeth));
      TooltipController.Update();

      let instance = tippyInstances[tippyInstances.indexOf(currentTeeth._tippy)].reference;
      instance.addEventListener('mouseover', listener(instance));
    },

    Remove: function () {
      let index = tippyInstances.indexOf(currentTeeth._tippy);
      if (index > -1) {
        let instance = tippyInstances[tippyInstances.indexOf(currentTeeth._tippy)].reference;
        instance.removeEventListener('mouseover', listener(instance));

        tippyInstances.splice(index, 1);
        TooltipController.Update();
      }
    },

    Update: function () {
      singleton.setInstances(tippyInstances);
    },
  }
}();

// ************************************ Объявление переменных

const teethData = {};
let teethTempData = {};

const
  teeths = document.querySelectorAll('.stl-teeth__map .stl-teeth__item'),
  teethPreviewContainer = document.querySelectorAll('.stl-stage__teeth');

let
  currentTeeth = null,
  currentTeethId = null;

let
  stages = document.querySelectorAll('.stl-stage__tab'),
  currentStage = null;



// ************************************ Инициализация

MainController.Init();
TeethController.Init(teeths);
StageController.Init(stages);



/*******************************************************************/

const stlModals = document.querySelectorAll('.modal-stl');
const optionCircle = document.querySelectorAll('.stl-stage__control')
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

        // Если ничего не выбрано
        if (selectedOption.length === 0) {
          teethTempData.stage[currentStage].option[statusType] = 'Не определено';
        }

        // Обработчик для чекбоксов
        if (statusType === 'advanced') {
          teethTempData.stage[currentStage].option[statusType] = [];

          if (selectedOption.length === 0) {
            teethTempData.stage[currentStage].option[statusType] = ['Не определено'];
            updateInfo();
          }
        }

        selectedOption.forEach(option => {
          const selected = option.getAttribute('type');

          if (selected === 'radio')
            teethTempData.stage[currentStage].option[statusType] = getRadioValue(option);

          if (selected === 'checkbox')
            teethTempData.stage[currentStage].option[statusType].push(getCheckboxValue(option));

          updateInfo();
        });

        // Галочки при сохранении настройки
        statusIcon.classList.add('stl-stage__checkmark--visible');
      })
    }
  });
});

function resetSelect(option) {
  option.forEach(input => {
    input.checked = false;
  });
}

const teethInfoBlock = document.querySelectorAll('.stl-stage__info');

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

    const value = teethTempData.stage[currentStage].option[statusType];

    if (value !== 'Не определено')
      statusIcon.classList.add('stl-stage__checkmark--visible');
    else
      statusIcon.classList.remove('stl-stage__checkmark--visible');
  });

  // Обновление таблицы внутри зуба
  teethInfoBlock.forEach((block, index) => {
    const teethInfoItems = block.querySelectorAll('.stl-info__item');

    teethInfoItems.forEach(item => {
      const dataType = item.getAttribute('data-stl-info');
      const output = item.querySelector('.stl-info__value');

      const value = teethTempData.stage[index].option[dataType];

      if (value !== 'Не определено')
        output.innerHTML = value;
      else
        output.innerHTML = "Не определено";
    });
  });

}

function InfoTemplate(data) {
  return `
  <div class="stl-stage__info stl-info stl-info--mini">
  <div class="row">
    <div class="col-6">
    <h2 class="stl-info__heading mb-4">Этап 1</h2>
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

    <div class="col-6">
    <h2 class="stl-info__heading mb-4">Этап 2</h2>
    <div data-stl-info="construction" class="stl-info__item mb-1">
      <h3 class="stl-info__title">Конструкция</h3>
      <div class="stl-info__value">${data.stage[1].option.construction}</div>
    </div>
    <!-- /.stl-info__item -->

    <div data-stl-info="system" class="stl-info__item mb-1">
      <h3 class="stl-info__title">Система имплантов и размеры</h3>
      <div class="stl-info__value">${data.stage[1].option.system}</div>
    </div>
    <!-- /.stl-info__item -->

    <div data-stl-info="material" class="stl-info__item mb-1">
      <h3 class="stl-info__title">Материал изготовления</h3>
      <div class="stl-info__value">${data.stage[1].option.material}</div>
    </div>
    <!-- /.stl-info__item -->

    <div data-stl-info="color" class="stl-info__item mb-1">
      <h3 class="stl-info__title">Цвет коронки</h3>
      <div class="stl-info__value">${data.stage[1].option.color}</div>
    </div>
    <!-- /.stl-info__item -->

    <div data-stl-info="parameter" class="stl-info__item mb-1">
      <h3 class="stl-info__title">Десневая часть</h3>
      <div class="stl-info__value">${data.stage[1].option.parameter}</div>
    </div>
    <!-- /.stl-info__item -->

    <div data-stl-info="advanced" class="stl-info__item">
      <h3 class="stl-info__title">Опак и карвинг</h3>
      <div class="stl-info__value">${data.stage[1].option.advanced}</div>
    </div>
    <!-- /.stl-info__item -->
    </div>
  </div>
</div>
<!-- /.stl-stage__info -->
`
}

/*******************************************************************/

// Валидация нажатия одного чекбокса и радиобатона в модальном окне "система"
const systemModal = document.getElementById('modal-stl__system');
const systemModalSection = systemModal.querySelectorAll('.modal-stl__section');

systemModalSection.forEach(section => {
  const mainRadio = section.querySelector('.radio input');
  const group = section.querySelectorAll('.modal-stl__group .checkbox input');

  mainRadio.addEventListener('change', () => {
    systemChecker(section);
  });

  group.forEach(item => {
    item.addEventListener('click', () => {
      mainRadio.checked = true;
    })
  });
});

function systemChecker(current) {
  systemModalSection.forEach(section => {
    const group = section.querySelectorAll('.modal-stl__group .checkbox input');

    if (section !== current) {
      group.forEach(item => {
        item.checked = false;
      });
    }
  });
}