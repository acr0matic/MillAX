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
    SaveData: (data, type) => {

      // Если ничего не выбрано
      if (data.length === 0) {
        teethTempData.stage[currentStage].option[type] = 'Не определено';
      }

      // Обработчик для чекбоксов
      if (type === 'advanced' || type === 'system') {
        teethTempData.stage[currentStage].option[type] = [];

        if (data.length === 0)
          teethTempData.stage[currentStage].option[type] = ['Не определено'];
      }

      data.forEach(option => {
        const selected = option.getAttribute('type');

        if (selected === 'radio' && type === 'system')
          teethTempData.stage[currentStage].option[type].push(getRadioValue(option));

        else if (selected === 'radio')
          teethTempData.stage[currentStage].option[type] = getRadioValue(option);

        if (selected === 'checkbox')
          teethTempData.stage[currentStage].option[type].push(getCheckboxValue(option));

      });
    },

    ClearData: (type) => {
      teethTempData.stage[currentStage].option[type] = 'Не определено';
    }
  }
}();

const TeethController = function () {
  return {
    Init: (teeths) => {
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
          if (teethData[currentTeethId]) teethTempData = teethData[currentTeethId];

          TeethController.UpdateInfo();
          UpdateCircle().Update();

          // Очищаем блок и добавляем иконку зуба
          teethPreviewContainer.forEach(container => {
            const clonedTeeth = teeth.cloneNode(true);
            clonedTeeth.classList.remove('stl-teeth__item--saved');
            clonedTeeth.classList.remove('stl-teeth__item--support');

            container.innerHTML = '';
            container.append(clonedTeeth);
          });

          stlSlider.slideNext();
        });

        teeth.addEventListener('contextmenu', (e) => {
          e.preventDefault();
          ContextController.SetTarget(e);
          ContextController.Check();
          ContextController.Show(e);
        });
      });
    },

    GenerateData: () => {
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

    Save: (teeth) => {
      teethData[currentTeethId] = teethTempData;
      teeth.classList.add('stl-teeth__item--saved')
    },

    Reset: (teeth) => {
      delete teethData[currentTeethId];
      teeth.classList.remove('stl-teeth__item--saved')
    },

    UpdateInfo: () => {
      // Обновление таблицы внутри зуба
      const teethInfoBlock = document.querySelectorAll('.stl-slider__slide--stage .stl-stage__info');

      teethInfoBlock.forEach((block, index) => {
        const teethInfoItems = block.querySelectorAll('.stl-info__item');

        teethInfoItems.forEach(item => {
          const dataType = item.getAttribute('data-stl-info');
          const output = item.querySelector('.stl-info__value');
          const value = teethTempData.stage[index].option[dataType];

          if (value == 'Не определено') {
            output.innerHTML = "Не определено";
            TooltipController.Remove();
          }

          else
            output.innerHTML = value;
        });
      });
    },

    GetInfo: () => {
      const teethInfoBlock = document.querySelectorAll('.stl-slider__slide--stage .stl-stage__info');
      const data = []

      teethInfoBlock.forEach(block => {
        let items = block.querySelectorAll('.stl-info__item .stl-info__value')
        items.forEach(item => {
          data.push(item.innerHTML);
        });
      });

      return data;
    }
  }
}();

const MainController = function () {
  const saveButton = document.querySelectorAll('[data-stl-action="save"]');
  const resetButton = document.querySelectorAll('[data-stl-action="reset"]');
  const sendButton = document.querySelector('[data-stl-action="send"]');
  const backButton = document.querySelector('[data-stl-action="back"]');
  const screenshotButton = document.querySelector('[data-stl-action="screenshot"]');

  const summaryTable = document.getElementById('summary');

  return {
    Init: function () {
      saveButton.forEach(button => button.addEventListener('click', () => {
        this.Save(currentTeeth);
        this.CheckData();
      }));

      resetButton.forEach(button => button.addEventListener('click', () => {
        this.Reset(currentTeeth);
        this.CheckData();
      }));

      this.CheckData();
      sendButton.addEventListener('click', () => {
        summaryTable.innerHTML = summaryTemplate(teethData);

        stlSlider.slideTo(0);
      });


      backButton.addEventListener('click', () => stlSlider.slideTo(1));
      screenshotButton.addEventListener('click', () => this.Screenshot());

      // Вызов алерта перед закрытием страницы
      // window.onbeforeunload = () => '';
    },

    Save: function () {
      const data = TeethController.GetInfo();
      let count = 0;

      data.forEach(item => {
        if (item !== "Не определено") {
          TeethController.Save(currentTeeth);
          TooltipController.Add(currentTeethId);
        }

        else
          if (++count === 12) currentTeeth.classList.remove('stl-teeth__item--saved')
      });
    },

    Reset: function () {
      TeethController.Reset(currentTeeth);
      TooltipController.Remove();
    },

    Update: function () {
    },

    Screenshot: () => {
      const targetDiv = document.getElementById('teethMap');
      targetDiv.style.backgroundColor = "#f1f1f1";

      html2canvas(targetDiv).then(canvas => canvas.toBlob(blob => {
        window.open(URL.createObjectURL(blob));
      }));

      targetDiv.style.backgroundColor = "#ffffff";
    },

    CheckData: () => {
      if (Object.keys(teethData).length === 0)
        sendButton.setAttribute('disabled', 'disabled');
      else
        sendButton.removeAttribute('disabled');
    }
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
    Add: function (teethId, target) {

      // Проверка на существование тултипа
      for (let index = 0; index < tippyInstances.length; index++) {
        const instanceID = tippyInstances[index].reference.getAttribute('data-teeth-id');

        isExist = (instanceID === teethId) ? true : false;

        if (isExist) {
          TooltipController.Update();
          return;
        };
      }

      if (!target) tippyInstances.push(tippy(currentTeeth));
      else tippyInstances.push(tippy(target));


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
      let teethID = 0;

      tippyInstances.forEach(instance => {
        teethID = instance.reference.getAttribute('data-teeth-id');
        instance.setContent(InfoTemplate(teethData[teethID]));
      });

      singleton.setInstances(tippyInstances);
    },
  }
}();

const ModalController = function () {
  return {
    Init: () => {
      const optionButtons = document.querySelectorAll('.stl-stage__button');

      optionButtons.forEach(button => {
        button.addEventListener('click', () => {
          stlModals.forEach(modal => {
            const selectedOption = modal.querySelectorAll(`input:checked`);

            selectedOption.forEach(selected => selected.checked = false);
          });
        });
      });
    },

    Save: (modal, optionType) => {
      let options;

      if (optionType === 'system')
        options = modal.querySelectorAll(`input[name=${optionType}]:checked, input[name=system-size]:checked`);
      else
        options = modal.querySelectorAll(`input[name=${optionType}]:checked`);

      StageController.SaveData(options, optionType);
      UpdateCircle(optionType).Check();
      TeethController.UpdateInfo();
    },

    Reset: (optionType) => {
      StageController.ClearData(optionType);
      UpdateCircle(optionType).Uncheck();
      TeethController.UpdateInfo();
      TooltipController.Update();
    },
  }
}();

const ContextController = function () {
  let target = null;
  let currentTarget = null;
  let canCopy, canPaste;

  const contextMenu = document.getElementById('contextMenu');
  const contextTeeth = contextMenu.querySelector('.context-menu__teeth');
  const copyButton = contextMenu.querySelector('[data-context-action=copy]')
  const pasteButton = contextMenu.querySelector('[data-context-action=paste]')

  const toggleMenu = (param) => {
    if (param === 'show') {
      contextMenu.classList.add('context-menu--visible');
      if (contextTeeth.innerHTML != '') showTeeth();
    }

    else contextMenu.classList.remove('context-menu--visible');
  };

  const setPosition = (e) => {
    let element = e.target.getBoundingClientRect();

    let offsetX = element.left + ((element.width) / 2);
    let offsetY = element.bottom + window.scrollY;

    contextMenu.style.left = `${offsetX - 80}px`;
    contextMenu.style.top = `${offsetY + 30}px`;
  }

  const setTeeth = (target) => {
    const clonedTeeth = target.cloneNode(true);
    clonedTeeth.classList.remove('stl-teeth__item--saved');

    contextTeeth.innerHTML = '';
    contextTeeth.append(clonedTeeth);
  }

  const showTeeth = () => {
    contextTeeth.parentNode.classList.remove('context-menu__wrapper--hidden');
  }

  return {
    Init: () => {
      window.addEventListener('scroll', () => {
        ContextController.Hide();
      });

      window.addEventListener('click', (e) => {
        if (!contextMenu.contains(e.target)) {
          ContextController.Hide();
        }
      });

      copyButton.addEventListener('click', () => {
        if (canCopy) {
          ContextController.Copy();
          ContextController.Hide();
        }

        else return;
      });

      pasteButton.addEventListener('click', () => {
        if (canPaste) {
          ContextController.Paste();
          ContextController.Hide();
        }

        else return;
      });
    },

    SetTarget: (e) => target = e,

    Check: () => {
      currentTarget = target.currentTarget;
      const ID = target.currentTarget.getAttribute('data-teeth-id');
      const teeth = teethData[ID];

      if (teeth) {
        canCopy = true;
        copyButton.classList.remove('context-menu__item--disabled');
      }

      else {
        canCopy = false;
        copyButton.classList.add('context-menu__item--disabled');
      }

      if (Object.keys(copiedTeeth).length !== 0) {
        canPaste = true;
        pasteButton.classList.remove('context-menu__item--disabled');
      }

      else {
        canPaste = false;
        pasteButton.classList.add('context-menu__item--disabled');
      };
    },

    Show: (e) => {
      setPosition(e);
      toggleMenu("show");
    },

    Hide: () => {
      toggleMenu("hide");
    },

    Copy: () => {
      const ID = currentTarget.getAttribute('data-teeth-id');

      setTeeth(currentTarget);
      copiedTeeth = JSON.parse(JSON.stringify(teethData[ID]));
    },

    Paste: () => {
      const ID = currentTarget.getAttribute('data-teeth-id');
      currentTarget.classList.add('stl-teeth__item--saved');

      teethData[ID] = JSON.parse(JSON.stringify(copiedTeeth));

      TooltipController.Add(ID, currentTarget);
      TooltipController.Update();
    }
  }
}();

// ************************************ Объявление переменных

const teethData = {};
let teethTempData = {};
let copiedTeeth = {};

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
ModalController.Init();
ContextController.Init();

// ************************************ Обработка стадий и модальных окон

const stlModals = document.querySelectorAll('.modal-stl');
const optionCircle = document.querySelectorAll('.stl-stage__control')
const optionButtons = document.querySelectorAll('.stl-stage__button');

const UpdateCircle = function (type) {
  let optionButton, checkmark;
  if (type) {
    optionButton = optionCircle[currentStage].querySelector(`.stl-stage__button[data-status=${type}`);
    checkmark = optionButton.parentNode.querySelector('.stl-stage__checkmark');
  }

  return {
    Check: () => {
      checkmark.classList.add('stl-stage__checkmark--visible');
    },

    Uncheck: () => {
      checkmark.classList.remove('stl-stage__checkmark--visible');
    },

    Update: () => {
      optionCircle.forEach((circle, index) => {
        const optionButtons = circle.querySelectorAll('.stl-stage__button')

        optionButtons.forEach(button => {
          const optionType = button.getAttribute('data-status');
          const statusIcon = button.parentNode.querySelector('.stl-stage__checkmark');

          const value = teethTempData.stage[index].option[optionType];

          if (value !== 'Не определено')
            statusIcon.classList.add('stl-stage__checkmark--visible');
          else
            statusIcon.classList.remove('stl-stage__checkmark--visible');
        });
      });
    }
  }
};

optionCircle.forEach(circle => {
  const optionButtons = circle.querySelectorAll('.stl-stage__button')

  optionButtons.forEach(button => {
    const optionType = button.getAttribute('data-status');

    stlModals.forEach(modal => {
      if (optionType === modal.getAttribute('data-status')) {
        const accept = modal.querySelector('[data-stl-action="accept"]');
        const reset = modal.querySelector('[data-stl-action="default"]');

        accept.addEventListener('click', () => {
          ModalController.Save(modal, optionType)
        });

        reset.addEventListener('click', () => {
          ModalController.Reset(optionType)
        });
      }
    });
  });
});


// ************************************ Прочее

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

function getRadioValue(radio) {
  let parent, result;

  if (radio.getAttribute('name') === 'system-size') {
    parent = radio.closest('.checkbox');
    result = parent.querySelector('.checkbox__label').innerHTML;
  }

  else {
    parent = radio.closest('.radio');
    result = parent.querySelector('.radio__label').innerHTML;
  }

  return result;
}

function getCheckboxValue(checkbox) {
  let parent = checkbox.closest('.checkbox')
  return parent.querySelector('.checkbox__label').innerHTML;
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

const teethMaps = document.querySelectorAll('.stl-teeth__row');
teethMaps.forEach(map => {
  const teethCheckboxes = map.querySelectorAll('.stl-teeth__checkbox input');
  const teethMap = map.querySelectorAll('.stl-teeth__item');

  teethCheckboxes.forEach((checkbox, index) => {
    checkbox.addEventListener('change', () => {

      if (checkbox.checked) setBridge(teethMap, index, true);
      else {
        if
          ((teethCheckboxes[index - 1] && teethCheckboxes[index - 1].checked) &&
          (teethCheckboxes[index - 1] && teethCheckboxes[index + 1].checked)) return;

        else if (teethCheckboxes[index - 1] && teethCheckboxes[index - 1].checked) {
          teethMap[index + 1].classList.remove('stl-teeth__item--support');
        }

        else if (teethCheckboxes[index + 1] && teethCheckboxes[index + 1].checked) {
          teethMap[index].classList.remove('stl-teeth__item--support');
        }

        else setBridge(teethMap, index);
      }
    });
  });
});

function setBridge(map, index, set) {
  if (set) {
    map[index].classList.add('stl-teeth__item--support');
    map[index + 1].classList.add('stl-teeth__item--support');
  }

  else {
    map[index].classList.remove('stl-teeth__item--support');
    map[index + 1].classList.remove('stl-teeth__item--support');
  }
}

function summaryTemplate(data) {
  let template = '';
  for (const key in data) {
    const teeth = (key, data[key]);

    template += `
    <div class="stl-info stl-info--large">
    <h2 class="stl-info__header mb-5">Номер зуба <span class="stl-info__teeth">${key}</span></h2>
    <div class="row">
      <div class="col-6">
        <h2 class="stl-info__heading mb-4">Этап 1</h2>
        <div data-stl-info="construction" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Конструкция</h3>
          <div class="stl-info__value">${teeth.stage[0].option.construction}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="system" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Система имплантов и размеры</h3>
          <div class="stl-info__value">${teeth.stage[0].option.system}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="material" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Материал изготовления</h3>
          <div class="stl-info__value">${teeth.stage[0].option.material}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="color" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Цвет коронки</h3>
          <div class="stl-info__value">${teeth.stage[0].option.color}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="parameter" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Десневая часть</h3>
          <div class="stl-info__value">${teeth.stage[0].option.parameter}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="advanced" class="stl-info__item">
          <h3 class="stl-info__title">Опак и карвинг</h3>
          <div class="stl-info__value">${teeth.stage[0].option.advanced}</div>
        </div>
        <!-- /.stl-info__item -->
      </div>

      <div class="col-6">
        <h2 class="stl-info__heading mb-4">Этап 2</h2>
        <div data-stl-info="construction" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Конструкция</h3>
          <div class="stl-info__value">${teeth.stage[1].option.construction}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="system" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Система имплантов и размеры</h3>
          <div class="stl-info__value">${teeth.stage[1].option.system}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="material" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Материал изготовления</h3>
          <div class="stl-info__value">${teeth.stage[1].option.material}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="color" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Цвет коронки</h3>
          <div class="stl-info__value">${teeth.stage[1].option.color}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="parameter" class="stl-info__item mb-4">
          <h3 class="stl-info__title">Десневая часть</h3>
          <div class="stl-info__value">${teeth.stage[1].option.parameter}</div>
        </div>
        <!-- /.stl-info__item -->

        <div data-stl-info="advanced" class="stl-info__item">
          <h3 class="stl-info__title">Опак и карвинг</h3>
          <div class="stl-info__value">${teeth.stage[1].option.advanced}</div>
        </div>
        <!-- /.stl-info__item -->
      </div>
    </div>
    </div>
    <!-- /.stl-stage__info -->
    `
  }

  return template;
}