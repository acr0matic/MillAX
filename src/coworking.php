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
    <section id="become">
      <div data-jarallax data-speed="0.2" class="jarallax">
        <img class="jarallax-img" src="img/pictures/become/background.jpg" alt="">
      </div>

      <div class="container">
        <div class="become">
          <div class="become__promo">
            <h1 class="become__title">Станьте частью прогрессивного сообщества зубных техников</h1>
            <div class="become__content">
              <img class="become__background" src="img/pictures/become/1.svg" alt="">
              <h2 class="become__subtitle">Что мы предлагаем</h2>
              <div class="become__service">
                <ul class="become__list list">
                  <li class="list__item">
                    Полностью укомплектованное
                    <br>
                    рабочее пространство
                  </li>
                  <li class="list__item">
                    Нетворкинг и поддержку коллег для
                    <br>
                    эффективного решения рабочих задач
                  </li>
                  <li class="list__item">
                    Совместные корпоративные
                    <br>
                    мероприятия с компанией
                    <br>
                    ЦИФРОДЕНТ</li>
                </ul>

                <ul class="become__list list">
                  <li class="list__item">
                    Гибкие условия работы с твоей
                    <br>
                    собственной клиентской базой</li>
                  <li class="list__item">
                    Комьюнити единомышленников:
                    <br>
                    обмен опытом успешных и
                    <br>
                    провальных кейсов
                  </li>
                </ul>
              </div>
              <!-- /.become__service -->
            </div>
            <!-- /.become__content -->
          </div>
          <!-- /.become__promo -->
        </div>
        <!-- /.become -->
      </div>
      <!-- /.container -->
    </section>

    <section id="included">
      <div class="container">
        <h2 class="section__title">Что входит в стоимость?</h2>
        <div class="included">
          <div class="row">
            <div class="col-4" data-aos="fade-up" data-aos-offset="150">
              <div class="included__card">
                <div class="included__wrapper">
                  <h3 class="included__title">
                    Инфраструктура
                  </h3>

                  <ul class="included__list">
                    <li class="included__item">- закрепленные рабочие места</li>
                    <li class="included__item">- оборудованные по самым современным стандартам (станки ЧПУ, печи, сканеры, «грязные» рабочие зоны, компьютеры с предустановленным ПО)</li>
                    <li class="included__item">зона отдыха, кухня, чай, кофе, вода</li>
                  </ul>
                </div>
                <!-- /.included__wrapper -->
              </div>
              <!-- /.included__card -->
            </div>
            <!-- /.col-4 -->

            <div class="col-4" data-aos="fade-up" data-aos-offset="150">
              <div class="included__card">
                <div class="included__wrapper">
                  <h3 class="included__title">
                    Сервис и услуги
                  </h3>

                  <ul class="included__list">
                    <li class="included__item">- услуги по закупке расходных материалов</li>
                    <li class="included__item">- бухгалтерская и юридическая поддержка</li>
                    <li class="included__item">- услуги по продвижению и построению индивидуальной траектории развития бизнеса</li>
                    <li class="included__item">- услуги администратора, курьера, обработчика</li>
                    <li class="included__item">- ИТ-поддержка</li>
                  </ul>
                </div>
                <!-- /.inculed_wrapper -->
              </div>
              <!-- /.included__card -->
            </div>
            <!-- /.col-4 -->

            <div class="col-4" data-aos="fade-up" data-aos-offset="150">
              <div class="included__card">
                <div class="included__wrapper">
                  <h3 class="included__title">
                    Ментерство и трекинг
                  </h3>

                  <ul class="included__list">
                    <li class="included__item">- индивидуальные консультации</li>
                    <li class="included__item">- экспертные сессии</li>
                    <li class="included__item">- индивидуальные и групповые встречи по динамике развития бизнеса</li>
                  </ul>
                </div>
                <!-- /.inculed_wrapper -->
              </div>
              <!-- /.included__card -->
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->

          <button class="mt-4 mx-auto button button-secondary" data-micromodal-trigger="modal-reservation">Забронировать место</button>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.included -->
      </div>
      <!-- /.container -->
    </section>

    <section id="statement">
      <div class="container background">

        <img class="statement__background" src="img/pictures/statement/1.svg" alt="">
        <img class="statement__background statement__background--right" src="img/pictures/statement/2.svg" alt="">
        <div class="statement">
          <div class="row justify-content-center">
            <div class="col-5">
              <div class="statement__item">
                <h2 class="statement__title">Условия резидентсва</h2>
                <ul class="statement__list list">
                  <li class="list__item">
                    Аренда рабочего места 30 000
                    <br>
                    рублей в месяц
                  </li>
                  <li class="list__item">
                    Весь объем фрезеровки / печати /
                    <br>
                    прессовки осуществляется силами
                    <br>
                    фрезерного центра</li>
                </ul>
              </div>
              <!-- /.statement__item -->
            </div>
            <!-- /.col-5 -->

            <div class="col-5">
              <div class="statement__item">
                <h2 class="statement__title">Кто может стать резидентом</h2>
                <ul class="statement__list list">
                  <li class="list__item">Объем работ более 250 единиц в месяц</li>
                  <li class="list__item">Желание развивать свой бизнес</li>
                  <li class="list__item">Бережное отношение к оборудованию</li>
                  <li class="list__item">Позитивный и дружелюбный настрой</li>
                </ul>
              </div>
              <!-- /.statement__item -->
            </div>
            <!-- /.col-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.statement -->
      </div>
      <!-- /.container -->
    </section>

    <section id="excursion" class="section">
      <div class="container">
        <div class="excursion">
          <div class="row">
            <div class="col-5" data-aos="fade-right" data-aos-offset="150">
              <form action="" class="form form-excursion">
                <h2 class="form-excursion__title mb-5">
                  Приглашаем на <span>экскурсию</span>
                  <br>
                  по коворкингу
                </h2>
                <input class="input input-field mb-3" type="text" placeholder="Ваше имя" name="user_name">
                <input class="input input-field mb-3" type="tel" placeholder="Номер телефона" name="user_phone">
                <input class="input input-field mb-3" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" min="2020-12-02" placeholder="Желаемая дата посещения" name="visit_date">
                <input class="input input-field mb-3" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" placeholder="Желаемое время посещения" name="visit_time">

                <button class="form-excursion__button button button-secondary">Записаться</button>
              </form>
            </div>
            <!-- /.col-5 -->

            <div class="col-5 offset-1" data-aos="fade-left" data-aos-offset="150">
              <div class="excursion__wrapper">
                <div class="swiper-container slider excursion-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="excursion__item">
                        <a data-fslightbox href="img/pictures/slider/excursion/1.jpg">
                          <img class="excursion-slider__image slider__image" src="img/pictures/slider/excursion/1.jpg" alt="">
                        </a>
                      </div>
                      <!-- /.excursion__item -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <div class="excursion__item">
                        <a data-fslightbox href="img/pictures/slider/excursion/2.jpg">
                          <img class="excursion-slider__image slider__image" src="img/pictures/slider/excursion/2.jpg" alt="">
                        </a>
                      </div>
                      <!-- /.excursion__item -->
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <div class="excursion__item">
                        <a data-fslightbox href="img/pictures/slider/excursion/2.jpg">
                          <img class="excursion-slider__image slider__image" src="img/pictures/slider/excursion/2.jpg" alt="">
                        </a>
                      </div>
                      <!-- /.excursion__item -->
                    </div>
                    <!-- /.swiper-slide -->
                  </div>
                  <!-- /.swiper-wrapper -->
                </div>
                <!-- /.swiper-container -->

                <div class="swiper-button-prev excursion-slider__prev"></div>
                <div class="swiper-button-next excursion-slider__next"></div>
              </div>
              <!-- /.excursion__wrapper -->
            </div>
            <!-- /.col-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.excursion -->
      </div>
      <!-- /.container -->
    </section>

    <section id="prices" class="section">
      <div class="container">
        <div class="section__heading">
          <h2 class="section__title">Цены для резидентов</h2>
          <h3 class="section__subtitle">В нашем коворкинге действуют льготные цены для резидентов</h3>
        </div>
        <!-- /.section__heading -->

        <div class="prices">
          <div class="row justify-content-center">
            <div class="col-6">
              <table class="table table-price" data-aos="fade-up" data-aos-offset="150">
                <caption class="table__caption">Цены для резидентов Millax</caption>
                <tr class="table__start">
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>

                <tr>
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>

                <tr>
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>

                <tr>
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>

                <tr>
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>

                <tr>
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>
                <tr>
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>

                <tr class="table__end">
                  <td>Наименование услуги</td>
                  <td>Цена</td>
                  <td>Сроки</td>
                </tr>
              </table>
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->

          <button class="prices__button button button-secondary">Скачать полный прайс
            <svg class="button__icon button__icon--white" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.3738 15.4922C12.3914 15.5146 12.4138 15.5327 12.4394 15.5452C12.4649 15.5577 12.493 15.5641 12.5215 15.5641C12.5499 15.5641 12.578 15.5577 12.6036 15.5452C12.6292 15.5327 12.6516 15.5146 12.6691 15.4922L15.2941 12.1711C15.3902 12.0492 15.3035 11.8687 15.1465 11.8687H13.4098V3.9375C13.4098 3.83437 13.3254 3.75 13.2223 3.75H11.816C11.7129 3.75 11.6285 3.83437 11.6285 3.9375V11.8664H9.89648C9.73945 11.8664 9.65273 12.0469 9.74883 12.1688L12.3738 15.4922ZM21.0996 14.6719H19.6934C19.5902 14.6719 19.5059 14.7563 19.5059 14.8594V18.4688H5.53711V14.8594C5.53711 14.7563 5.45273 14.6719 5.34961 14.6719H3.94336C3.84023 14.6719 3.75586 14.7563 3.75586 14.8594V19.5C3.75586 19.9148 4.09102 20.25 4.50586 20.25H20.5371C20.952 20.25 21.2871 19.9148 21.2871 19.5V14.8594C21.2871 14.7563 21.2027 14.6719 21.0996 14.6719Z" fill="#515151" />
            </svg>
          </button>
        </div>
        <!-- /.prices -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>
</body>

</html>