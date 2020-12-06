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
        <img class="background__image background__image--milling-1" src="img/pictures/background/3.svg" alt="">
        <div class="milling__background"></div>
        <div class="milling">
          <div class="row">
            <div class="col-6">
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

            <div class="col-6">
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
    <!-- /.section -->

    <section id="equipment" class="section">
      <div class="container background">
        <img class="background__image background__image--milling-2" src="img/pictures/background/4.svg" alt="">

        <h2 class="section__title">Оборудование фрезерного центра</h2>

        <div class="equipment">
          <div class="row">
            <div class="col-3" data-aos="fade-up" data-aos-offset="150" data-aos-delay="100">
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

                <a href="" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->

            <div class="col-3" data-aos="fade-up" data-aos-offset="150" data-aos-delay="200">
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

                <a href="" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->

            <div class="col-3" data-aos="fade-up" data-aos-offset="150" data-aos-delay="300">
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

                <a href="" class="stretched-link"></a>
              </div>
            </div>
            <!-- /.col-3 -->

            <div class="col-3" data-aos="fade-up" data-aos-offset="150" data-aos-delay="400">
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

                <a href="" class="stretched-link"></a>
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
      <div class="container">
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
            <img class="analytics__image" src="img/pictures/milling/2.png" alt="">
          </div>
        </div>
        <!-- /.analytics -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>