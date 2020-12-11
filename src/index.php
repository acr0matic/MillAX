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
    <section id="hero" class="section">
      <div class="hero__background-second"></div>

      <div class="container">
        <div class="hero">
          <div class="row justify-content-between">
            <div class="col-12 col-lg-5">
              <div class="hero__picture hero-mobile-hide">
                <img class="hero__image lazyload" src="img/pictures/hero/1-preview.jpg" data-src="img/pictures/hero/1.jpg" alt="">
              </div>
              <!-- /.hero__picture -->
            </div>
            <!-- /.col-5 -->

            <div class="col-12 col-lg-6 col-no-pl">
              <div class="hero__content">
                <div class="hero__background">
                  <div class="hero__background-first"></div>
                </div>
                <div class="hero__wrapper">
                  <span class="hero__info">Доступ 24/7</span>
                  <h1 class="hero__title">Коворкинг для зубных техников CAD/CAM</h1>
                  <h2 class="hero__subtitle">
                    MiLLax- идеальное решение для техников
                    - предпринимателей, которые хотят управлять
                    своим временем на все 100%
                  </h2>

                  <div class="hero__picture hero__picture--mobile">
                    <img class="hero__image lazyload" src="img/pictures/hero/1-preview.jpg" data-src="img/pictures/hero/1.jpg" alt="">
                  </div>
                  <!-- /.hero__picture -->

                  <div class="hero__action">
                    <button data-micromodal-trigger="modal-reservation" class="button button-primary mb-4 mb-xl-0">Рабочее место в коворкинге</button>
                    <button class="button button-outline button-outline">Услуги фрезерного центра</button>
                  </div>
                  <!-- /.hero__action -->
                </div>
                <!-- /.hero__wrapper -->
              </div>
              <!-- /.hero__content -->
            </div>
            <!-- /.col-6 -->
          </div>
          <!-- /.row -->

          <div class="row">
            <div class="col-12">
              <div class="hero__promo hero-promo">
                <div class="row">
                  <div class="col-12 col-lg-7">
                    <div class="hero-promo__content">
                      <h2 class="hero-promo__title">Предоставляем полностью <span>укомплектованное пространство</span></h2>
                      <ul class="hero-promo__list list">
                        <li class="list__item">
                          офисная инфраструктура
                        </li>

                        <li class="list__item">
                          техническая инфраструктура
                        </li>

                        <li class="list__item">
                          операционное посредничество с юридическими
                          <br>
                          лицами-заказчиками техников
                        </li>
                        <li class="list__item">
                          сопутствующие услуги, необходимые для качественной реализации услуги (курьеры, обработчик, администратор)
                        </li>
                      </ul>
                      <!-- /.hero-promo__list list -->
                    </div>
                    <!-- /.hero-promo__content -->
                  </div>
                  <!-- /.col-7 -->

                  <div class="col-12 col-lg-5 col-no-pl">
                    <img src="img/pictures/hero/2-preview.jpg" data-src="img/pictures/hero/2.jpg" alt="" class="hero-promo__image lazyload">
                  </div>
                  <!-- /.col-5 -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.hero__promo -->
            </div>
            <!-- /.col-12 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.hero -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.section -->

    <section id="advantages">
      <div class="container background">
        <img class="background__image background__image--main-1" src="img/pictures/background/1.svg" alt="">
        <h2 class="section__title section__title--small-mb">
          Почему выгодно
          <br>
          работать с нами?
        </h2>
        <div class="advantage">
          <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-3" data-aos="fade-up" data-aos-offset="150">
              <div class="advantage__card">
                <h3 class="advantage__title">Надежность и качество</h3>
                <p class="advantage__description">
                  Арендаторам рабочего места
                  в компании MiLLax предоставляется
                  рабочая зона оснащенная
                  качественным оборудованием,
                  которое соответствует последним
                  тенденциям и техническим параметрам
                </p>
              </div>
              <!-- /.advantage__card -->
            </div>
            <!-- /.col-4 -->

            <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-3" data-aos="fade-up" data-aos-offset="150">
              <div class="advantage__card">
                <h3 class="advantage__title">Гарантия</h3>
                <p class="advantage__description">
                  Контроль качества позволяет выпускать продукцию без дефектов, процент переделок - менее 1% (в среднем
                  по рынку 2-3%)
                  Мы уверены в своем деле и даем гарантии на все виды услуг
                </p>
              </div>
              <!-- /.advantage__card -->
            </div>
            <!-- /.col-4 -->

            <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-3" data-aos="fade-up" data-aos-offset="150">
              <div class="advantage__card">
                <h3 class="advantage__title">Оптимальные сроки</h3>
                <p class="advantage__description">
                  Оборудование фрезерного центра позволяет работать в режиме
                  ‘’Non stop’’, и обеспечить высокую
                  степень производительности
                  А за счет грамотно налаженный внутренних процессов мы делаем свою работу оптимально быстро и заблаговременно доставляем заказчику
                </p>
              </div>
              <!-- /.advantage__card -->
            </div>
            <!-- /.col-4 -->

            <div class="col-12 col-md-6 col-lg-4 mb-md-4 mb-3" data-aos="fade-up" data-aos-offset="150">
              <div class="advantage__card">
                <h3 class="advantage__title">Курьерская служба</h3>
                <p class="advantage__description">
                  Расположение вблизи центра Москвы дает конкурентное преимущество
                  по экспресс доставке
                  Каждый маршрут курьеров
                  выверен с точностью до минут
                </p>
              </div>
              <!-- /.advantage__card -->
            </div>
            <!-- /.col-4 -->

            <div class="col-12 col-lg-4 mb-md-4 mb-3" data-aos="fade-up" data-aos-offset="150">
              <div class="advantage__card">
                <h3 class="advantage__title">Ценовая политика</h3>
                <p class="advantage__description">
                  Долгосрочное сотрудничество
                  - вот наша цель
                  Резиденты коворкинга получают доступ к услугам фрезерного центра
                  по льготной цене
                </p>
              </div>
              <!-- /.advantage__card -->
            </div>
            <!-- /.col-4 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.advantage -->
      </div>
      <!-- /.container -->
    </section>

    <section id="worth">
      <div class="container background">
        <h2 class="section__title">
          Наши ценности
        </h2>

        <div class="worth">
          <div class="worth__picture">
            <img src="img/pictures/worth/background.svg" alt="" class="worth__background">
            <img src="img/pictures/worth/photo.jpg" alt="" class="worth__image">
          </div>
          <!-- /.worth__picture -->

          <div class="worth__wrapper">
            <div class="worth__item">
              взаимоуважение
              внутри коллектива
            </div>
            <!-- /.worth__item -->

            <div class="worth__item">
              быть креативными
              и инновационными
            </div>
            <!-- /.worth__item -->

            <div class="worth__item">
              забота о людях и их развитие
            </div>
            <!-- /.worth__item -->

            <div class="worth__item">
              быть внимательными друг
              к другу, создавать семейную атмосферу
            </div>
            <!-- /.worth__item -->

            <div class="worth__item">
              Открытые и справедливые
              взаимоотношения со всеми партнерами
            </div>
            <!-- /.worth__item -->

            <div class="worth__item">
              радоваться каждому дню
              и каждой мелочи,
              быть позитивными
            </div>
            <!-- /.worth__item -->
          </div>
          <!-- /.worth__wrapper -->
        </div>
        <!-- /.worth -->
      </div>
    </section>

    <section id="coworking" class="section">
      <div class="container">
        <h2 class="section__title">Что мне дал коворкинг</h2>

        <div class="coworking">
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-7">
              <div class="coworking__item" data-aos="fade-right" data-aos-offset="150">
                <div class="handorgel">
                  <div class="handorgel__header">
                    <div class="handorgel__header__button">
                      <h3 class="handorgel__title">Комфортное место работы</h3>
                      <div class="handorgel__indicator">
                        <svg class="handorgel__icon" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#515151" />
                        </svg>

                        <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                        </svg>
                      </div>
                      <!-- /.faq__header -->
                    </div>
                    <!-- /.handorgel__header__button -->
                  </div>
                  <!-- /.handorgel__header -->

                  <div class="handorgel__content">
                    <div class="handorgel__content__inner">
                      <p class="handorgel__content__text">
                        Оборудованное под ключ рабочее место. Все необходимые программы, мощный ПК,
                        высокоскоростной интернет, удобная рабочая зона. Собственная зуботехническая
                        лаборатория с круглосуточным доступом. Удобное территориальное расположение в центре
                        Москвы. Работай, в любое время суток, когда тебе удобно.
                      </p>
                    </div>
                    <!-- /.handorgel__content__inner -->
                  </div>
                  <!-- /.handorgel__content -->
                </div>
                <!-- /.handorgel-->

                <div class="coworking__content">
                  <p class="coworking__descripition">
                    Оборудованное под ключ рабочее место. Все необходимые программы, мощный ПК,
                    высокоскоростной интернет, удобная рабочая зона. Собственная зуботехническая
                    лаборатория с круглосуточным доступом. Удобное территориальное расположение в центре
                    Москвы. Работай, в любое время суток, когда тебе удобно.
                  </p>
                </div>
                <!-- /.coworking__content -->
              </div>
              <!-- /.coworking__item -->

              <div class="coworking__item" data-aos="fade-right" data-aos-offset="150">
                <div class="handorgel">
                  <div class="handorgel__header">
                    <div class="handorgel__header__button">
                      <h3 class="handorgel__title">Развитие своего бизнеса</h3>
                      <div class="handorgel__indicator">
                        <svg class="handorgel__icon" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#515151" />
                        </svg>

                        <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                        </svg>
                      </div>
                      <!-- /.faq__header -->
                    </div>
                    <!-- /.handorgel__header__button -->
                  </div>
                  <!-- /.handorgel__header -->

                  <div class="handorgel__content">
                    <div class="handorgel__content__inner">
                      <p class="handorgel__content__text">
                        Устанавливай свой собственный прайс. Не надо подстраиваться под фиксированную цену
                        лабораторий и ждать зарплату в конце месяца. Пришел-поработал-заработал-вернулся
                        домой. Создавай свой собственный бренд, со своими уникальными разработками. Преврати
                        любимое дело в прибыльный бизнес.
                      </p>
                    </div>
                    <!-- /.handorgel__content__inner -->
                  </div>
                  <!-- /.handorgel__content -->
                </div>
                <!-- /.handorgel-->

                <div class="coworking__content">
                  <p class="coworking__descripition">
                    Устанавливай свой собственный прайс. Не надо подстраиваться под фиксированную цену
                    лабораторий и ждать зарплату в конце месяца. Пришел-поработал-заработал-вернулся
                    домой. Создавай свой собственный бренд, со своими уникальными разработками. Преврати
                    любимое дело в прибыльный бизнес.
                  </p>
                </div>
                <!-- /.coworking__content -->
              </div>
              <!-- /.coworking__item -->

              <div class="coworking__item" data-aos="fade-right" data-aos-offset="150">
                <div class="handorgel">
                  <div class="handorgel__header">
                    <div class="handorgel__header__button">
                      <h3 class="handorgel__title">Развитие навыков и компетенций</h3>
                      <div class="handorgel__indicator">
                        <svg class="handorgel__icon" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#515151" />
                        </svg>

                        <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                        </svg>
                      </div>
                      <!-- /.faq__header -->
                    </div>
                    <!-- /.handorgel__header__button -->
                  </div>
                  <!-- /.handorgel__header -->

                  <div class="handorgel__content">
                    <div class="handorgel__content__inner">
                      <p class="handorgel__content__text">
                        Развивай свои навыки, повышай свою квалификации. От штатного зубного техникаоператора из скучной зуботехнической лаборатории дойди до уровня высококлассного и
                        востребованного специалиста с собственной клиентской базой, став резидентом MiLLax
                      </p>
                    </div>
                    <!-- /.handorgel__content__inner -->
                  </div>
                  <!-- /.handorgel__content -->
                </div>
                <!-- /.handorgel-->

                <div class="coworking__content">
                  <p class="coworking__descripition">
                    Развивай свои навыки, повышай свою квалификации. От штатного зубного техникаоператора из скучной зуботехнической лаборатории дойди до уровня высококлассного и
                    востребованного специалиста с собственной клиентской базой, став резидентом MiLLax
                  </p>
                </div>
                <!-- /.coworking__content -->
              </div>
              <!-- /.coworking__item -->

              <div class="coworking__item" data-aos="fade-right" data-aos-offset="150">
                <div class="handorgel">
                  <div class="handorgel__header">
                    <div class="handorgel__header__button">
                      <h3 class="handorgel__title">Сообщество единомышленников (комьюнити, нетворкинг)</h3>
                      <div class="handorgel__indicator">
                        <svg class="handorgel__icon" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#515151" />
                        </svg>

                        <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                        </svg>
                      </div>
                      <!-- /.faq__header -->
                    </div>
                    <!-- /.handorgel__header__button -->
                  </div>
                  <!-- /.handorgel__header -->

                  <div class="handorgel__content">
                    <div class="handorgel__content__inner">
                      <p class="handorgel__content__text">
                        Стань членом профессионального сообщество зубных техников, моделировщиков,
                        докторов. Обменивайся опытом. Нетворкинг-помогай коллегам решать сложные рабочие
                        задачи и попроси помощь, когда она пригодится тебе. Члены сообщества оперативно
                        помогают друг другу и каждый из членов застрахован при форс мажорной ситуации. </p>
                    </div>
                    <!-- /.handorgel__content__inner -->
                  </div>
                  <!-- /.handorgel__content -->
                </div>
                <!-- /.handorgel-->

                <div class="coworking__content">
                  <p class="coworking__descripition">
                    Стань членом профессионального сообщество зубных техников, моделировщиков,
                    докторов. Обменивайся опытом. Нетворкинг-помогай коллегам решать сложные рабочие
                    задачи и попроси помощь, когда она пригодится тебе. Члены сообщества оперативно
                    помогают друг другу и каждый из членов застрахован при форс мажорной ситуации.
                  </p>
                </div>
                <!-- /.coworking__content -->
              </div>
              <!-- /.coworking__item -->

              <div class="coworking__item" data-aos="fade-right" data-aos-offset="150">
                <div class="handorgel">
                  <div class="handorgel__header">
                    <div class="handorgel__header__button">
                      <h3 class="handorgel__title">Расширение круга деловых контактов, заказчиков</h3>
                      <div class="handorgel__indicator">
                        <svg class="handorgel__icon" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#515151" />
                        </svg>

                        <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                        </svg>
                      </div>
                      <!-- /.faq__header -->
                    </div>
                    <!-- /.handorgel__header__button -->
                  </div>
                  <!-- /.handorgel__header -->

                  <div class="handorgel__content">
                    <div class="handorgel__content__inner">
                      <p class="handorgel__content__text">
                        Став резидентом компании ты гарантировано получаешь не только шикарное рабочее место
                        со всем необходимым оборудованием и льготный прайс на услуги фрезерного центра, но и
                        новых заказчиков. Портфолио резидентов коворкинга размещается на сайте компании
                        MiLLax и резиденты получают все 100 % от заказов, поступивших в нашу компанию.
                        Прекрасная возможность для расширения круга деловых партнеров и заказчиков.
                      </p>
                    </div>
                    <!-- /.handorgel__content__inner -->
                  </div>
                  <!-- /.handorgel__content -->
                </div>
                <!-- /.handorgel-->

                <div class="coworking__content">
                  <p class="coworking__descripition">
                    Став резидентом компании ты гарантировано получаешь не только шикарное рабочее место
                    со всем необходимым оборудованием и льготный прайс на услуги фрезерного центра, но и
                    новых заказчиков. Портфолио резидентов коворкинга размещается на сайте компании
                    MiLLax и резиденты получают все 100 % от заказов, поступивших в нашу компанию.
                    Прекрасная возможность для расширения круга деловых партнеров и заказчиков.
                  </p>
                </div>
                <!-- /.coworking__content -->
              </div>

              <!-- /.coworking__item -->
              <div class="coworking__item" data-aos="fade-right" data-aos-offset="150">
                <div class="handorgel">
                  <div class="handorgel__header">
                    <div class="handorgel__header__button">
                      <h3 class="handorgel__title">Личное развитие и позитивный взгляд на жизнь</h3>
                      <div class="handorgel__indicator">
                        <svg class="handorgel__icon" width="31" height="16" viewBox="0 0 31 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M30.7071 8.7071C31.0976 8.31658 31.0976 7.68341 30.7071 7.29289L24.3431 0.92893C23.9526 0.538406 23.3195 0.538406 22.9289 0.92893C22.5384 1.31945 22.5384 1.95262 22.9289 2.34314L28.5858 8L22.9289 13.6569C22.5384 14.0474 22.5384 14.6805 22.9289 15.0711C23.3195 15.4616 23.9526 15.4616 24.3431 15.0711L30.7071 8.7071ZM8.74228e-08 9L30 9L30 7L-8.74228e-08 7L8.74228e-08 9Z" fill="#515151" />
                        </svg>

                        <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                        </svg>
                      </div>
                      <!-- /.faq__header -->
                    </div>
                    <!-- /.handorgel__header__button -->
                  </div>
                  <!-- /.handorgel__header -->

                  <div class="handorgel__content">
                    <div class="handorgel__content__inner">
                      <p class="handorgel__content__text">
                        Тебе больше не надо бегать из одного конца города в другой, чтобы доставить заказ. Ты
                        просто можешь воспользоваться услугой нашего штатного курьера по льготной цене. Решил
                        создать собственный бизнес? Наш бухгалтер поможет грамотно оформить документацию.
                        Хочешь работать с юридическими лицами или открыть свое дело и работать как
                        самозанятый или ИП? Воспользуйся бесплатной консультацией нашего юриста. Мы создали
                        все условия для удобства наших резидентов. Кроме этого для членов команды мы
                        поставляем расходный материал о оптовым ценам, а это реальная экономия.
                      </p>
                    </div>
                    <!-- /.handorgel__content__inner -->
                  </div>
                  <!-- /.handorgel__content -->
                </div>
                <!-- /.handorgel-->

                <div class="coworking__content">
                  <p class="coworking__descripition">
                    Тебе больше не надо бегать из одного конца города в другой, чтобы доставить заказ. Ты
                    просто можешь воспользоваться услугой нашего штатного курьера по льготной цене. Решил
                    создать собственный бизнес? Наш бухгалтер поможет грамотно оформить документацию.
                    Хочешь работать с юридическими лицами или открыть свое дело и работать как
                    самозанятый или ИП? Воспользуйся бесплатной консультацией нашего юриста. Мы создали
                    все условия для удобства наших резидентов. Кроме этого для членов команды мы
                    поставляем расходный материал о оптовым ценам, а это реальная экономия.
                  </p>
                </div>
                <!-- /.coworking__content -->
              </div>
              <!-- /.coworking__item -->
            </div>
            <!-- /.col-7 -->
          </div>
          <!-- /.row -->

          <div class="coworking__slider">
            <div class="row">
              <div class="col-12 col-md-10 offset-md-1">
                <div class="swiper-container coworking-slider">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div class="coworking-slider__item">
                        <a data-fslightbox href="img/pictures/slider/coworking/1.jpg">
                          <img class="coworking-slider__image lazyload" data-src="img/pictures/slider/coworking/1.jpg" src="img/pictures/slider/coworking/1-preview.jpg" alt="">
                        </a>
                      </div>
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <div class="coworking-slider__item">
                        <a data-fslightbox href="img/pictures/slider/coworking/1.jpg">
                          <img class="coworking-slider__image lazyload" data-src="img/pictures/slider/coworking/1.jpg" src="img/pictures/slider/coworking/1-preview.jpg" alt="">
                        </a>
                      </div>
                    </div>
                    <!-- /.swiper-slide -->

                    <div class="swiper-slide">
                      <div class="coworking-slider__item">
                        <a data-fslightbox href="img/pictures/slider/coworking/1.jpg">
                          <img class="coworking-slider__image lazyload" data-src="img/pictures/slider/coworking/1.jpg" src="img/pictures/slider/coworking/1-preview.jpg" alt="">
                        </a>
                      </div>
                    </div>
                    <!-- /.swiper-slide -->
                  </div>
                  <!-- /.swiper-wrapper -->
                </div>
                <!-- /.swiper-container -->
              </div>
              <!-- /.col-10 -->
              <div class="swiper-button-prev coworking-slider__prev"></div>
              <div class="swiper-button-next coworking-slider__next"></div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.coworking__slider -->
        </div>
        <!-- /.coworking -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>