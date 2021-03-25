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
    <section id="milling">
      <div class="container background">
        <div class="milling__background"></div>
        <div class="milling">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-12 col-lg-6 d-flex flex-column align-items-start">
              <h1 class="milling__title">
                Фрезерный центр
                <br>
                MiLLax
              </h1>
              <p class="milling__description">
                В нашем центре вы сможете найти самое передовое
                <br>
                оборудование, учитывающее все требования к работе
                <br>
                зубного техника: сканеры, программное обеспечение
                <br>
                и станки, большой выбор материалов и удобное ПО
                <br>
                для решения самого широкого спектра задач.
              </p>

              <button class="milling__button button button-outline">Посмотреть прайс-лист</button>
            </div>
            <!-- /.col-6 -->

            <div class="col-12 col-lg-6 col-no-px--mobile">
              <div class="milling__picture">
                <img class="milling__image lazyload" data-src="img/pictures/milling/1.jpg" src="img/pictures/milling/1-preview.jpg" alt="">
              </div>
              <!-- /.milling__picture -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.milling -->
      </div>
      <!-- /.container -->
    </section>

    <section id="information-milling-1" class="section">
      <div class="container">
        <div class="information">
          <div class="information__item">
            <div class="row">
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <h3 class="information__title">Аренда рабочего места зубного техника в лаборатории MILLax</h3>
                <p class="information__description">
                  Современная технология изготовления коронок включает две основные составляющие:
                  - Компьютерное цифровое моделирование - CAD. Заключается в пошаговом выстраивании и адаптации 3D-модели коронки компьютером и индивидуализации зубным техником - оператором cam.
                  - Компьютерный цифровой просчёт стратегии фрезерования - CAM. Процесс предполагает виртуальный расчёт, симуляцию траектории движения инструментов и осей фрезерной установки и последующий запуск его на станке.
                </p>
              </div>
              <!-- /.col-6 -->

              <div class="col-12 col-md-6">
                <div class="information__content">
                  <p class="information__description">
                    Наличие фрезерного центра cad/cam в Москве дает возможность сократить сроки производства технически сложных изделий с максимальной точностью. Мы располагаем таким современным оборудованием как:
                    • станком CORiTEC 350i
                    • станками CORiTEC 250i
                    • печь для синтеризации Programat S1 1600
                    • 3D сканерами Medit T310
                    • 3D принтером ASIGA MAX UV
                    Это помогает гарантировать бесперебойно-стабильное и качественное производство зубных протезов в самые кратчайшие сроки. Ведь именно надежность и стабильность в партнерстве является гарантом для построения комфортных и профессиональных отношений.
                  </p>
                </div>
                <!-- /.information__content -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.information__item -->
        </div>
        <!-- /.information -->
      </div>
      <!-- /.container -->
    </section>

    <section id="information-milling-2" class="section">
      <div class="container">
        <div class="information">
          <div class="information__item">
            <div class="row">
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <h3 class="information__title">Как работает стоматологический фрезерный центр cad / cam</h3>
                <p class="information__description">
                  Мы принимаем заказы на изготовление готовой продукции по цифровым моделям — stl-файлам.
                  Для удобства заказчиков на сайте была создана поэтапная и удобная форма для заполнения информации по заказу и отправке файлов во фрезерный центр.
                  Файл предварительно проверяется на отсутствие различных дефектов и соответствие требованиям и ограничениям протоколу фрезерования и запускается процесс просчёта по заранее отработанной стратегии для данной конструкции и материала. Использование материалов от производителя циркониевых дисков Aidite позволяет гарантировать качество цветопередачи и градиентный переход оттенков по всей высоте диска.
                </p>
              </div>
              <!-- /.col-6 -->

              <div class="col-12 col-md-6">
                <div class="information__content">
                  <p class="information__description">
                    В нашей зуботехнической лаборатории принимаются заказы на фрезерование:
                    - индивидуального титанового абатмента из Pre-milled заготовки (с клиническим винтом);
                    - рельсовой титановой балки с уровня имплантата или мультиюнита (с клиническими винтами);
                    - каркаса из CoCr с уровня имплантата или мультиюнита (с клиническим винтом);
                    - временных коронок из PMMA (Yamahachi – Япония);
                    - каркасов из диоксида циркония из предокрашенных блоков Aidite;
                    - анатомических коронок из Multilayer3D PRO из предокрашенных шестислойных дисков и множество других операций.

                    С полным списком услуг вы можете ознакомиться в каталоге. Используем в работе только высококачественный импортный материал, гарантирующий надежность и прочность готовых изделий. Для заказа услуг воспользуйтесь соответствующей формой на сайте или звоните нам по указанным на странице телефонам.
                  </p>
                </div>
                <!-- /.information__content -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.information__item -->
        </div>
        <!-- /.information -->
      </div>
      <!-- /.container -->
    </section>

    <section id="equipment" class="section">
      <div class="container background">

        <h2 class="section__title">Оборудование фрезерного центра</h2>

        <div class="equipment">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-offset="150" data-aos-delay="100">
              <div class="equipment__item">
                <div class="equipment__picture">
                  <img src="img/equipment/1.png" alt="" class="equipment__image">
                </div>
                <!-- /.equipment__picture -->

                <div class="equipment__content">
                  <h3 class="equipment__title">
                    Фрезерные станки
                    с чпу imes-icore
                  </h3>

                  <button class="equipment__button button button-secondary">Подробнее</button>
                </div>
                <!-- /.equipment__content -->

                <a data-micromodal-trigger="modal-equipment" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->

            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-offset="150" data-aos-delay="200">
              <div class="equipment__item">
                <div class="equipment__picture">
                  <img src="img/equipment/2.png" alt="" class="equipment__image">
                </div>
                <!-- /.equipment__picture -->

                <div class="equipment__content">
                  <h3 class="equipment__title">
                    Печи для синтеризации
                    programmat s1
                  </h3>

                  <button class="equipment__button button button-secondary">Подробнее</button>
                </div>
                <!-- /.equipment__content -->

                <a data-micromodal-trigger="modal-equipment" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->

            <div class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0" data-aos="fade-up" data-aos-offset="150" data-aos-delay="300">
              <div class="equipment__item">
                <div class="equipment__picture">
                  <img src="img/equipment/3.png" alt="" class="equipment__image">
                </div>
                <!-- /.equipment__picture -->

                <div class="equipment__content">
                  <h3 class="equipment__title">
                    3D сканеры medit t310
                  </h3>

                  <button class="equipment__button button button-secondary">Подробнее</button>
                </div>
                <!-- /.equipment__content -->

                <a data-micromodal-trigger="modal-equipment" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->

            <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-offset="150" data-aos-delay="400">
              <div class="equipment__item">
                <div class="equipment__picture">
                  <img src="img/equipment/4.png" alt="" class="equipment__image">
                </div>
                <!-- /.equipment__picture -->

                <div class="equipment__content">
                  <h3 class="equipment__title">
                    3D принтер asiga
                    max uv
                  </h3>

                  <button class="equipment__button button button-secondary">Подробнее</button>
                </div>
                <!-- /.equipment__content -->

                <a data-micromodal-trigger="modal-equipment" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.equipment -->

      </div>
      <!-- /.container -->
    </section>

    <section id="resident" class="section">
      <div class="container">
        <div class="section__heading">
          <h2 class="section__title">Резиденты-операторы CAD | CAM</h2>
          <h3 class="section__subtitle">
            Millax – это дружная команда, которая объединена одной целью
            <br>
            – сделать стоматологию комфортной и качественной
          </h3>
        </div>
        <!-- /.section__heading -->

        <div class="resident">
          <div class="swiper-container resident__slider resident__slider--thumb resident-thumb__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="resident__thumb resident-thumb">
                  <img src="img/pictures/slider/resident/thumb.jpg" alt="" class="resident-thumb__photo">
                  <div class="resident-thumb__wrapper">
                    <div class="resident-thumb__name">Имя Фамилия</div>
                    <div class="resident-thumb__job">Деятельность</div>
                  </div>
                  <!-- /.resident-thumb__wrapper -->
                </div>
                <!-- /.resident-thumb -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="resident__thumb resident-thumb">
                  <img src="img/pictures/slider/resident/thumb.jpg" alt="" class="resident-thumb__photo">
                  <div class="resident-thumb__wrapper">
                    <div class="resident-thumb__name">Имя Фамилия</div>
                    <div class="resident-thumb__job">Деятельность</div>
                  </div>
                  <!-- /.resident-thumb__wrapper -->
                </div>
                <!-- /.resident-thumb -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="resident__thumb resident-thumb">
                  <img src="img/pictures/slider/resident/thumb.jpg" alt="" class="resident-thumb__photo">
                  <div class="resident-thumb__wrapper">
                    <div class="resident-thumb__name">Имя Фамилия</div>
                    <div class="resident-thumb__job">Деятельность</div>
                  </div>
                  <!-- /.resident-thumb__wrapper -->
                </div>
                <!-- /.resident-thumb -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="resident__thumb resident-thumb">
                  <img src="img/pictures/slider/resident/thumb.jpg" alt="" class="resident-thumb__photo">
                  <div class="resident-thumb__wrapper">
                    <div class="resident-thumb__name">Имя Фамилия</div>
                    <div class="resident-thumb__job">Деятельность</div>
                  </div>
                  <!-- /.resident-thumb__wrapper -->
                </div>
                <!-- /.resident-thumb -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->

          <div class="swiper-container resident__slider resident__slider--main resident-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="resident__item resident-item">
                  <div class="resident-item__picture">
                    <img class="resident-item__photo lazyload" data-src="img/pictures/slider/resident/full.jpg" src="img/pictures/slider/resident/preview.jpg" alt="">
                  </div>
                  <!-- /.resident-item__picture -->

                  <div class="resident-item__content">
                    <p class="resident-item__description">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                      Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>

                    <p class="resident-item__description">
                      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                  </div>
                  <!-- /.resident-item__description -->
                </div>
                <!-- /.resident__item resident-item -->
              </div>
              <!-- /.swiper-slider -->

              <div class="swiper-slide">
                <div class="resident__item resident-item">
                  <div class="resident-item__picture">
                    <img class="resident-item__photo lazyload" data-src="img/pictures/slider/resident/full.jpg" src="img/pictures/slider/resident/preview.jpg" alt="">
                  </div>
                  <!-- /.resident-item__picture -->

                  <div class="resident-item__content">
                    <p class="resident-item__description">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                      Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>

                    <p class="resident-item__description">
                      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                  </div>
                  <!-- /.resident-item__description -->
                </div>
                <!-- /.resident__item resident-item -->
              </div>
              <!-- /.swiper-slider -->

              <div class="swiper-slide">
                <div class="resident__item resident-item">
                  <div class="resident-item__picture">
                    <img class="resident-item__photo lazyload" data-src="img/pictures/slider/resident/full.jpg" src="img/pictures/slider/resident/preview.jpg" alt="">
                  </div>
                  <!-- /.resident-item__picture -->

                  <div class="resident-item__content">
                    <p class="resident-item__description">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                      Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>

                    <p class="resident-item__description">
                      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                  </div>
                  <!-- /.resident-item__description -->
                </div>
                <!-- /.resident__item resident-item -->
              </div>
              <!-- /.swiper-slider -->

              <div class="swiper-slide">
                <div class="resident__item resident-item">
                  <div class="resident-item__picture">
                    <img class="resident-item__photo lazyload" data-src="img/pictures/slider/resident/full.jpg" src="img/pictures/slider/resident/preview.jpg" alt="">
                  </div>
                  <!-- /.resident-item__picture -->

                  <div class="resident-item__content">
                    <p class="resident-item__description">
                      Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                      Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </p>

                    <p class="resident-item__description">
                      Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                    </p>
                  </div>
                  <!-- /.resident-item__description -->
                </div>
                <!-- /.resident__item resident-item -->
              </div>
              <!-- /.swiper-slider -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->

          <div class="swiper-button-prev resident-slider__prev"></div>
          <div class="swiper-button-next resident-slider__next"></div>
        </div>
        <!-- /.resident -->
      </div>
      <!-- /.container -->
    </section>

    <section id="service" class="section">
      <div class="container col-no-px--mobile">
        <h2 class="section__title">Цены на услуги фрезерного центра</h2>
        <div class="service">
          <div class="swiper-container service__slider service-slider" data-aos="fade-up" data-aos-offset="150">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="service__card service-card">
                  <div class="service-card__content">
                    <h3 class="service-card__title">Название услуги в две строки</h3>
                    <p class="service-card__description mb-4"><strong>Описание: </strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                    <div class="service-card__price mb-4">
                      <span class="service-card__heading">Цена изготовления</span>
                      <strong class="service-card__value service-card__value--price">15000р</strong>
                    </div>
                    <!-- /.service-card__price -->

                    <div class="service-card__time mb-4">
                      <span class="service-card__heading">Сроки изготовления</span>
                      <strong class="service-card__value">3-5 дней</strong>
                    </div>
                    <!-- /.service-card__price -->
                  </div>
                  <!-- /.service-card__content -->

                  <div class="service-card__picture">
                    <img src="img/service/1.jpg" alt="" class="service-card__image">
                  </div>
                  <!-- /.service-card__picture -->
                </div>
                <!-- /.service__card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="service__card service-card">
                  <div class="service-card__content">
                    <h3 class="service-card__title">Название услуги в две строки</h3>
                    <p class="service-card__description mb-4"><strong>Описание: </strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                    <div class="service-card__price mb-4">
                      <span class="service-card__heading">Цена изготовления</span>
                      <strong class="service-card__value service-card__value--price">15000р</strong>
                    </div>
                    <!-- /.service-card__price -->

                    <div class="service-card__time mb-4">
                      <span class="service-card__heading">Сроки изготовления</span>
                      <strong class="service-card__value">3-5 дней</strong>
                    </div>
                    <!-- /.service-card__price -->
                  </div>
                  <!-- /.service-card__content -->

                  <div class="service-card__picture">
                    <img src="img/service/1.jpg" alt="" class="service-card__image">
                  </div>
                  <!-- /.service-card__picture -->
                </div>
                <!-- /.service__card -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="service__card service-card">
                  <div class="service-card__content">
                    <h3 class="service-card__title">Название услуги в две строки</h3>
                    <p class="service-card__description mb-4"><strong>Описание: </strong> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. </p>
                    <div class="service-card__price mb-4">
                      <span class="service-card__heading">Цена изготовления</span>
                      <strong class="service-card__value service-card__value--price">15000р</strong>
                    </div>
                    <!-- /.service-card__price -->

                    <div class="service-card__time mb-4">
                      <span class="service-card__heading">Сроки изготовления</span>
                      <strong class="service-card__value">3-5 дней</strong>
                    </div>
                    <!-- /.service-card__price -->
                  </div>
                  <!-- /.service-card__content -->

                  <div class="service-card__picture">
                    <img src="img/service/1.jpg" alt="" class="service-card__image">
                  </div>
                  <!-- /.service-card__picture -->
                </div>
                <!-- /.service__card -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->

            <div class="swiper-button-prev service-slider__prev"></div>
            <div class="swiper-button-next service-slider__next"></div>
          </div>
          <!-- /.swiper-container -->

          <button class="service__button button button-secondary">Скачать полный прайс
            <svg class="button__icon button__icon--white" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M12.3738 15.4922C12.3914 15.5146 12.4138 15.5327 12.4394 15.5452C12.4649 15.5577 12.493 15.5641 12.5215 15.5641C12.5499 15.5641 12.578 15.5577 12.6036 15.5452C12.6292 15.5327 12.6516 15.5146 12.6691 15.4922L15.2941 12.1711C15.3902 12.0492 15.3035 11.8687 15.1465 11.8687H13.4098V3.9375C13.4098 3.83437 13.3254 3.75 13.2223 3.75H11.816C11.7129 3.75 11.6285 3.83437 11.6285 3.9375V11.8664H9.89648C9.73945 11.8664 9.65273 12.0469 9.74883 12.1688L12.3738 15.4922ZM21.0996 14.6719H19.6934C19.5902 14.6719 19.5059 14.7563 19.5059 14.8594V18.4688H5.53711V14.8594C5.53711 14.7563 5.45273 14.6719 5.34961 14.6719H3.94336C3.84023 14.6719 3.75586 14.7563 3.75586 14.8594V19.5C3.75586 19.9148 4.09102 20.25 4.50586 20.25H20.5371C20.952 20.25 21.2871 19.9148 21.2871 19.5V14.8594C21.2871 14.7563 21.2027 14.6719 21.0996 14.6719Z" fill="#515151" />
            </svg>
          </button>
        </div>
        <!-- /.service -->
      </div>
      <!-- /.container -->
    </section>

    <section id="analytics" class="section">
      <div class="container">
        <div class="analytics" data-aos="fade-right" data-aos-offset="150">
          <h2 class="section__title">
            Сравнительный анализ цен на услуги
            <br>
            фрезерного центра в г. Москва
          </h2>

          <div class="analytics__table">
            <img class="analytics__image" src="img/pictures/milling/2.svg" alt="">
          </div>

          <div class="analytics__content">
            <p class="analytics__title">
              Фрезерование <br> титанового абатмента <br> из Pre-milled заготовки <br> (с клиническим <br> винтом)*
            </p>

            <p class="analytics__title">
              Фрезерование <br> рельсовой титановой <br> балки на 4-х опорах <br> (с 2-мя комплектами <br> винтов)*
            </p>

            <p class="analytics__title">
              Фрезерование каркаса <br> из CoCr с уровня <br> имплантата или <br> мультиюнита <br> (с 2-мя винтами)*
            </p>

            <p class="analytics__title">
              Фрезерование <br> временной <br> коронки из <br> PMMA*
            </p>

            <p class="analytics__title">
              Фрезерование <br> каркаса из <br> диоксида циркония, <br> до 3 единиц <br> мостом*
            </p>

            <p class="analytics__title">
              Фрезерование <br> анатомической <br> коронки из <br> Multilayer3D / <br> Multilayer3D PRO, <br> до 3 единиц <br> мостом*
            </p>
          </div>
          <!-- /.analytics__content -->

          <div class="analytics__annotation">
            <img class="analytics__image" src="img/pictures/milling/3.svg" alt="">
          </div>

          <p class="analytics__description">
            *
            Анализ рыночных цен проводился по выборочным позициям на основе открытых данных ведущих <br> зуботехнических лабораторий и фрезерных центров Москвы:
            Ортос (Ортос фрезерный центр Москва), Артикон <br> (Артикон Москва фрезерный центр), Зуботехническая лаборатория Цифродент (фрезерный центр cad cam)
          </p>

        </div>
        <!-- /.analytics -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <div class="modal micromodal-slide modal-equipment" id="modal-equipment">
    <div class="modal__overlay" data-micromodal-close>
      <div class="modal__container modal-equipment__container">
        <div class="modal__header">
          <button class="modal__close" data-micromodal-close></button>
        </div>

        <div class="modal__content">
          <div class="modal-equipment__item">
            <div class="modal-equipment__header">
              <h3 class="modal-equipment__title">CORiTEC 250i</h3>
              <img src="img/pictures/250i.png" alt="" class="modal-equipment__photo">
            </div>
            <!-- /.modal-equipment__header -->

            <div class="modal-equipment__main">
              <p class="modal-equipment__description">
                Система абсолютного позиционирования, высокое разрешение координатной сетки и динамичные сервомоторы дают 20% прирост скорости обработки и оптимальную точность изготовления таких сложных реставраций, как цельно-дуговые конструкции с винтовой фиксацией.
                <br>
                <br>
                Одновременное фрезерование в 5-ти осях с возможностью работы под углом свыше 30º.в сухом и мокром режимах.
                <br>
                <br>
                Система фиксации в нулевой точке держателя блоков (Zero Point Clamping) обеспечивает быструю смену заготовок одним нажатием кнопки, и дает значительные преимущества при изготовлении работ с винтовой фиксацией.
              </p>

              <ul class="modal-equipment__list list list--unmarked">
                <li class="list__item">
                  <strong class="list__item--strong">Количество осей:</strong>5
                </li>

                <li class="list__item">
                  <strong class="list__item--strong">Тип обработки:</strong> Одновременная
                </li>

                <li class="list__item">
                  <strong>Обрабатываемый материал:</strong> PMMA / Ti / Кобальт-хром/цветные металлы (CoCr/NFM) / Композиты (Composites) / Стеклокерамика (Glass ceramic)
                </li>

              </ul>
            </div>
            <!-- /.modal-equipment__main -->
          </div>
          <!-- /.modal-equipment__item -->

          <div class="modal-equipment__item">
            <div class="modal-equipment__header">
              <h3 class="modal-equipment__title">CORiTEC 350i</h3>
              <img src="img/pictures/350i.png" alt="" class="modal-equipment__photo">
            </div>
            <!-- /.modal-equipment__header -->

            <div class="modal-equipment__main">
              <p class="modal-equipment__description">
                Система абсолютного позиционирования, высокое разрешение координатной сетки и динамичные сервомоторы дают 20% прирост скорости обработки и оптимальную точность изготовления таких сложных реставраций, как цельно-дуговые конструкции с винтовой фиксацией.
                <br>
                <br>
                Одновременное фрезерование в 5-ти осях с возможностью работы под углом свыше 30º.в сухом и мокром режимах.
                <br>
                <br>
                Система фиксации в нулевой точке держателя блоков (Zero Point Clamping) обеспечивает быструю смену заготовок одним нажатием кнопки, и дает значительные преимущества при изготовлении работ с винтовой фиксацией.
              </p>

              <ul class="modal-equipment__list list list--unmarked">
                <li class="list__item">
                  <strong class="list__item--strong">Количество осей:</strong>5
                </li>

                <li class="list__item">
                  <strong class="list__item--strong">Тип обработки:</strong> Одновременная
                </li>

                <li class="list__item">
                  <strong>Обрабатываемый материал:</strong> PMMA / Ti / Кобальт-хром/цветные металлы (CoCr/NFM) / Композиты (Composites) / Стеклокерамика (Glass ceramic)
                </li>

              </ul>
            </div>
            <!-- /.modal-equipment__main -->
          </div>
          <!-- /.modal-equipment__item -->
        </div>
      </div>
    </div>
  </div>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>