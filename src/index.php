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
                  <h1 class="hero__title">Вы зубной техник-оператор CAD/CAM?</h1>
                  <span class="hero__info">Начните работать на себя <br> Мы поможем и всем обеспечим</span>
                  <h2 class="hero__subtitle">
                    MiLLax - коворкинг для зубных техников-операторов CAD/CAM
                  </h2>

                  <div class="hero__picture hero__picture--mobile">
                    <img class="hero__image lazyload" src="img/pictures/hero/1-preview.jpg" data-src="img/pictures/hero/1.jpg" alt="">
                  </div>
                  <!-- /.hero__picture -->

                  <div class="hero__action">
                    <span>Как начать работать?</span>
                    <button data-micromodal-trigger="modal-reservation" class="button button-primary mb-4 mb-xl-0">Забронировать рабочее место</button>
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
                      <h2 class="hero-promo__title">Что вы получите?</h2>
                      <span class="hero-promo__info">
                        Возможность работать самостоятельно
                        <br>
                        Развиваться и зарабатывать больше
                      </span>
                      <ul class="hero-promo__list list">
                        <li class="mb-2">
                          <strong>Мы обеспечим:</strong>
                        </li>

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
          Зачем мне это?
        </h2>

        <div class="advantage">
          <div class="advantage__wrapper">
            <div class="advantage__item">
              <img class="advantage__icon" src="img/icons/advantages/1.svg" alt="">
              <span class="advantage__title">Чтобы зарабатывать <br> больше</span>
            </div>
            <!-- /.advantage__item -->

            <div class="advantage__item">
              <img class="advantage__icon" src="img/icons/advantages/2.svg" alt="">
              <span class="advantage__title">Не зависеть от прихотей <br> начальства</span>
            </div>
            <!-- /.advantage__item -->

            <div class="advantage__item">
              <img class="advantage__icon" src="img/icons/advantages/3.svg" alt="">
              <span class="advantage__title">Самому решать, когда <br> и с кем работать </span>
            </div>
            <!-- /.advantage__item -->
          </div>
          <!-- /.advantage__wrapper -->

          <button class="button button-secondary">Попробовать работать в коворкинге</button>
        </div>
        <!-- /.advantage -->
      </div>
      <!-- /.container -->
    </section>

    <section id="action">
      <div class="container">
        <div class="action">
          <h2 class="section__title section__title--small-mb">
            Остались сомнения и вопросы?
          </h2>

          <p class="action__text">
            Задайте ваши вопросы.
            <br>
            Приезжайте в гости, поговорите с нашими резидентами.
            <br>
            Будем рады все показать и рассказать.
          </p>

          <a href="tel:" class="action__link">Звоните сейчас! <br> +7 (111) 111 111</a>
        </div>
        <!-- /.action -->
      </div>
      <!-- /.container -->
    </section>

    <section id="coworking">
      <div class="container">
        <div class="coworking">
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

    <section id="information" class="section">
      <div class="container">
        <div class="information">
          <div class="information__item">
            <div class="row">
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="information__picture">
                  <img src="img/pictures/information/image.jpg" alt="" class="information__image">
                </div>
                <!-- /.information__picture -->
              </div>
              <!-- /.col-6 -->

              <div class="col-12 col-md-6">
                <div class="information__content">
                  <h3 class="information__title">Аренда рабочего места зубного техника в лаборатории MILLax</h3>
                  <p class="information__description">
                    Зубным техникам cad / cam для работы необходимы программное обеспечение и высокоточное оборудование. Спецтехника стоит дорого, а значит, приобрести ее в личное пользование могут далеко не все. Поэтому для ведущих индивидуальную деятельность специалистов аренда рабочего места зубного техника в MILLax становится лучшим способом получить доступ к необходимой материальной базе.
                  </p>
                </div>
                <!-- /.information__content -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.information__item -->

          <div class="information__item">
            <div class="row">
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="information__picture">
                  <img src="img/pictures/information/image.jpg" alt="" class="information__image">
                </div>
                <!-- /.information__picture -->
              </div>
              <!-- /.col-6 -->

              <div class="col-12 col-md-6">
                <div class="information__content">
                  <h3 class="information__title">Аренда рабочего места зубного техника в лаборатории MILLax</h3>
                  <p class="information__description">
                    Зубным техникам cad / cam для работы необходимы программное обеспечение и высокоточное оборудование. Спецтехника стоит дорого, а значит, приобрести ее в личное пользование могут далеко не все. Поэтому для ведущих индивидуальную деятельность специалистов аренда рабочего места зубного техника в MILLax становится лучшим способом получить доступ к необходимой материальной базе.
                  </p>
                </div>
                <!-- /.information__content -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.information__item -->

          <div class="information__item">
            <div class="row">
              <div class="col-12 col-md-6 mb-4 mb-md-0">
                <div class="information__picture">
                  <img src="img/pictures/information/image.jpg" alt="" class="information__image">
                </div>
                <!-- /.information__picture -->
              </div>
              <!-- /.col-6 -->

              <div class="col-12 col-md-6">
                <div class="information__content">
                  <h3 class="information__title">Аренда рабочего места зубного техника в лаборатории MILLax</h3>
                  <p class="information__description">
                    Зубным техникам cad / cam для работы необходимы программное обеспечение и высокоточное оборудование. Спецтехника стоит дорого, а значит, приобрести ее в личное пользование могут далеко не все. Поэтому для ведущих индивидуальную деятельность специалистов аренда рабочего места зубного техника в MILLax становится лучшим способом получить доступ к необходимой материальной базе.
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

    <section class="section"></section>
  </main>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>