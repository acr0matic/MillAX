<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <!-- Базовые мета-теги для поисковиков -->
  <title>Заголовок</title>

  <!-- Иконки для страницы -->
  <link rel="shortcut icon" href="img/favicons/favicon.ico" type="image/x-icon">
  <link rel="icon" sizes="16x16" href="img/favicons/favicon-16x16.png" type="image/png">
  <link rel="icon" sizes="32x32" href="img/favicons/favicon-32x32.png" type="image/png">
  <link rel="apple-touch-icon-precomposed" href="img/favicons/apple-touch-icon-precomposed.png">
  <link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="167x167" href="img/favicons/apple-touch-icon-167x167.png">
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicons/apple-touch-icon-180x180.png">
  <link rel="apple-touch-icon" sizes="1024x1024" href="img/favicons/apple-touch-icon-1024x1024.png">

  <!-- Метатаги которые выводят информацию о странице в поисковой запрос -->
  <meta name="description" content="описание не длиннее 155 символов" />
  <meta name="keywords" content="мета-теги, шаблон, html, css, acr0matic" />

  <!-- Метатаги для ссылок в социальных сетях -->
  <meta property="og:locale" content="ru_RU" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="" />
  <meta property="og:description" content="" />
  <meta property="og:image" content="" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />

  <!-- Контролирует поведение поисковых систем при индексации страницы -->
  <meta name="robots" content="index,follow,noodp" />

  <!-- Покраска адресной строки в мобильных Chrome, Firefox OS и Opera -->
  <meta name="theme-color" content="#4285f4" />

  <!-- Для Windows Phone -->
  <meta name="msapplication-navbutton-color" content="#4285f4" />

  <!-- Для iOS Safari -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <!-- Верификация Яндекс.Вебмастер  -->
  <meta name="yandex-verification" content="" />

  <!-- Yandex.Metrika counter -->

  <!-- /Yandex.Metrika counter -->

  <!-- Стили -->
  <!-- build:css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- endbuild -->
</head>

<body>

  <!-- Шапка -->
  <?php include_once 'partials/header.php' ?>

  <!-- Основной контент -->
  <main>
    <section id="stl-file">
      <div class="container">
        <div class="stl-file">
          <div class="swiper-container stl__slider stl-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="stl-slider__slide stl-slider__slide--form">
                  <div class="modal__header">
                    <h2 class="modal__title">
                      Укажите Ваши данные
                    </h2>
                  </div>
                  <!-- /.modal__title -->

                  <div class="modal__content">
                    <form action="" class="form form-excursion">
                      <input class="input input-field mb-3" type="text" placeholder="Наименование заказчика" name="user_name">
                      <input class="input input-field mb-3" type="text" placeholder="ФИО пациента" name="patient_name">
                      <input class="input input-field mb-3" type="tel" placeholder="Контактный номер телефона" name="user_phone">
                      <div class="form__policy">
                        <!-- <label class="checkbox">
                          <input type="checkbox">
                          <span class="checkbox__mark"></span>
                          <span class="checkbox__label">Я принимаю <a href="" class="checkbox__policy">политику конфиденциальности</a></span>
                        </label> -->
                      </div>
                      <!-- /.policy-wrapper -->
                    </form>
                  </div>
                  <!-- /.modal__content -->
                </div>
                <!-- /.stl-slider__slide -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->

          <div class="stl-slider__control">
            <button class="stl-slider__prev stl-slider__button button button-outline">
              <img src="img/icons/controls/arrow--left.svg" alt="">
              Назад
            </button>
            <button class="stl-slider__next stl-slider__button button button-outline">
              Далее
              <img src="img/icons/controls/arrow--right.svg" alt="">
            </button>
          </div>
          <!-- /.stl-slider__control -->
        </div>
        <!-- /.stl-file -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <div class="modal modal-stl micromodal-slide" id="modal-stl__construction">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите тип конструкции
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row mb-4">
              <div class="col-6">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Анатомическая <br> коронка</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Каркас</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Абатмент</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Рельсовая балка</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-6">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Анатомическая коронка <br> винтовой фиксации</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Каркас винтовой фиксации</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Вкладка</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Разборная вкладка</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->

            <button data-micromodal-close class="modal-stl__button button button-outline">Подтвердить</button>
          </div>
          <!-- /.modal-stl__wrapper -->
        </div>
        <!-- /.modal__container -->
      </div>
      <!-- /.modal__overlay -->
    </div>
    <!-- /.modal -->
  </div>

  <div class="modal modal-stl micromodal-slide" id="modal-stl__material">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите материал изготовления
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row mb-5">
              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">ZrO2</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Multilayer 3D</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">PMMA</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Titan</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->

            <div class="row mb-4">
              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">WAX</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Pre-mill (T)</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">CoCr</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Другое_____</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->

            <button data-micromodal-close class="modal-stl__button button button-outline">Подтвердить</button>
          </div>
          <!-- /.modal-stl__wrapper -->
        </div>
        <!-- /.modal__container -->
      </div>
      <!-- /.modal__overlay -->
    </div>
    <!-- /.modal -->
  </div>

  <div class="modal modal-stl micromodal-slide" id="modal-stl__advanced">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Опак и карвинг
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row mb-5">
              <div class="col-3">
                <div class="modal-stl__section">
                  <label class="checkbox checkbox--small">
                    <input type="checkbox">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Опак</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section">
                  <label class="checkbox checkbox--small">
                    <input type="checkbox">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Карвинг</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->
            </div>
            <!-- /.row -->
            <button data-micromodal-close class="modal-stl__button button button-outline">Подтвердить</button>
          </div>
          <!-- /.modal-stl__wrapper -->
        </div>
        <!-- /.modal__container -->
      </div>
      <!-- /.modal__overlay -->
    </div>
    <!-- /.modal -->
  </div>

  <div class="modal modal-stl micromodal-slide" id="modal-stl__color">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal-stl__block">
          <div class="modal__header">
            <h2 class="modal__title modal-stl__title">
              Укажите дизайн промежуточной части
            </h2>
          </div>
          <!-- /.modal__title -->

          <div class="modal__content">
            <div class="modal-stl__wrapper">
              <div class="row">
                <div class="col-4">
                  <div class="modal-stl__section">
                    <label class="radio radio--big radio--color">
                      <div class="modal-stl__color modal-stl__color--big stl-color--primary-1"></div>
                      <span class="radio__input">
                        <input type="radio" name="color-main">
                        <span class="radio__control"></span>
                      </span>
                      <span class="radio__label"></span>
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-4 -->

                <div class="col-4">
                  <div class="modal-stl__section">
                    <label class="radio radio--big radio--color">
                      <div class="modal-stl__color modal-stl__color--big stl-color--primary-2"></div>
                      <span class="radio__input">
                        <input type="radio" name="color-main">
                        <span class="radio__control"></span>
                      </span>
                      <span class="radio__label"></span>
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-4 -->

                <div class="col-4">
                  <div class="modal-stl__section">
                    <label class="radio radio--big radio--color">
                      <div class="modal-stl__color modal-stl__color--big stl-color--primary-3"></div>
                      <span class="radio__input">
                        <input type="radio" name="color-main">
                        <span class="radio__control"></span>
                      </span>
                      <span class="radio__label"></span>
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-4 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.modal-stl__wrapper -->
          </div>
          <!-- /.modal__content -->
        </div>
        <!-- /.modal__block -->

        <div class="modal-stl__block">
          <div class="modal__header">
            <h2 class="modal__title modal-stl__title">
              Укажите цвет коронки по шкале VITA
            </h2>
          </div>
          <!-- /.modal__title -->

          <div class="modal__content">
            <div class="modal-stl__wrapper">
              <div class="row justify-content-center">
                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">A1</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">A2</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">A3</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">A4</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">B1</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">B2</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">B3</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">B4</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">C1</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">C2</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">C3</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">C4</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">D1</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">D2</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">D3</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">D4</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">Bleach 1</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">Bleach 2</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">Bleach 3</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="modal-stl__color stl-color--primary-1"></div>
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">Bleach 4</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->

                <div class="col-3 mb-3">
                  <div class="modal-stl__section">
                    <label class="radio radio--color">
                      <div class="radio__wrapper">
                        <span class="radio__input">
                          <input type="radio" name="color-secondary">
                          <span class="radio__control"></span>
                        </span>
                        <span class="radio__label">Другое_____</span>
                      </div>
                      <!-- /.radio__wrapper -->
                    </label>
                  </div>
                  <!-- /.modal-stl__section -->
                </div>
                <!-- /.col-3 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.modal-stl__wrapper -->

            <button data-micromodal-close class="modal-stl__button button button-outline">Подтвердить</button>
          </div>
          <!-- /.modal__content -->
        </div>
        <!-- /.modal__block -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>

  <div class="modal modal-stl micromodal-slide" id="modal-stl__system">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите систему имплантов и размеры
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">ANKYLOS</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-1">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">C</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-1">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">X</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-1">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Anthogyr Axiom</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-2">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">C</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">ASTRA TECH</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-3">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.0</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-3">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.5 / 4.0</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-3">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">4.5 / 5.0</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-3">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">BEGO Semados</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-4">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.25 / 3.75</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-4">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">4.5</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-4">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Dentium / implantium</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-5">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">ICX</span>
                </label>
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">MegaGen AnyOne</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-6">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.0</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">MegaGen AnyRidge</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-7">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.0</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">MIS SEVEN</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-8">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">NP (3.3)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-8">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">SP (3.75)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-8">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">SP (4.2)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-8">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">WP (5.0 / 6.0)</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">NIKO / LOKO</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-9">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.5</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-9">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">4.5</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">NobelActive</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-10">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.0</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-10">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">NP (3.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-10">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">RP (4.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-10">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">WP (5.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-10">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">NobelReplace</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-11">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">NP (3.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-11">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">RP (4.3)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-11">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">WP (5.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-11">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Osstem</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-12">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Mini (3.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-12">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Regular (4.0 / 4.5 / 5.0)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-12">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Straumann Bone Level</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-13">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">NC (3.3)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-13">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">RC (4.1 / 4.8)</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Straumann SyncOcta</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-13">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">NN (3.5)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-13">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">RN (4.8)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-13">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">WN (6.5)</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">XiVE</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-14">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.0</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-14">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.4</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-14">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.8</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-14">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">4.5</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-14">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">5.5</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-14">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Multi-Unit</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">IRIS Liko-M</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-15">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">3.0</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <div class="modal-stl__row mb-4">
              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Conmet</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-16">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">NP (2.2)</span>
                  </label>

                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-16">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">RP (2.7)</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mr-5">
                <label class="radio">
                  <span class="radio__input">
                    <input type="radio" name="system">
                    <span class="radio__control"></span>
                  </span>
                  <span class="radio__label">Другое_____________</span>
                </label>

                <div class="modal-stl__group mt-3">
                  <label class="checkbox checkbox--small ml-4">
                    <input type="radio" name="group-15">
                    <span class="checkbox__mark"></span>
                    <span class="checkbox__label">Размеры___________</span>
                  </label>
                </div>
                <!-- /.modal-stl__group -->
              </div>
              <!-- /.modal-stl__section -->
            </div>
            <!-- /.modal-stl__row -->

            <button data-micromodal-close class="modal-stl__button button button-outline">Подтвердить</button>
          </div>
          <!-- /.modal-stl__wrapper -->
        </div>
        <!-- /.modal__container -->
      </div>
      <!-- /.modal__overlay -->
    </div>
    <!-- /.modal -->
  </div>

  <div class="modal modal-stl micromodal-slide" id="modal-stl__parameter">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите параметры отступа
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <label class="modal-stl__input">
              <div class="row align-items-center mb-4">
                <div class="col-2">
                  Глубина:
                </div>
                <!-- /.col-3 -->

                <div class="col-10">
                  <div class="row">
                    <div class="col-6">
                      <input class="input input-field" placeholder="Вестибулярная, мм" type="text">
                    </div>
                    <!-- /.col-6 -->

                    <div class="col-6">
                      <input class="input input-field" placeholder="Небная, мм" type="text">
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-9 -->
              </div>
              <!-- /.row -->
            </label>

            <label class="modal-stl__input">
              <div class="row align-items-center mb-5">
                <div class="col-2">
                  Ширина:
                </div>
                <!-- /.col-3 -->

                <div class="col-10">
                  <div class="row">
                    <div class="col-6">
                      <input class="input input-field" placeholder="Ширина, мм" type="text">
                    </div>
                    <!-- /.col-6 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.col-9 -->
              </div>
              <!-- /.row -->
            </label>
          </div>
          <!-- /.modal-stl__wrapper -->

          <button data-micromodal-close class="modal-stl__button button button-outline">Подтвердить</button>
        </div>
        <!-- /.modal__container -->
      </div>
      <!-- /.modal__overlay -->
    </div>
    <!-- /.modal -->
  </div>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>