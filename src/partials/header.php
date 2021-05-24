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
    <header id="header" class="fixed-top">
      <div class="header-top">
        <div class="header__container container-fluid container-lg">
          <div class="header">
            <div class="header__primary d-md-flex">
              <div class="header__logo mr-4">
                <a href="index.php">
                  <img class="header__image" src="img/logo-dark.svg" alt="">
                </a>
              </div>
              <!-- /.header__logo -->

              <nav class="header__nav">
                <ul class="navbar">
                  <li class="navbar__item">
                    <a href="index.php" class="navbar__link navbar__item--active">Главная</a>
                  </li>

                  <li class="navbar__item navbar__item--dropdown">
                    <a href="coworking.php" class="navbar__link">Коворкинг</a>
                    <div class="navbar__dropdown navbar-dropdown">
                      <ul class="navbar-dropdown__list">
                        <li class="navbar-dropdown__item">
                          <a href="coworking.php#statement" class="navbar-dropdown__link">Как стать резидентом</a>
                        </li>
                        <li class="navbar-dropdown__item">
                          <a href="coworking.php#excursion" class="navbar-dropdown__link">Рабочее место в коворкинге</a>
                        </li>
                        <li class="navbar-dropdown__item">
                          <a href="coworking.php#prices" class="navbar-dropdown__link">Прайс для резидентов</a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.navbar__dropdown -->
                  </li>

                  <li class="navbar__item">
                    <a href="statement.php" class="navbar__link">Условия</a>
                  </li>

                  <li class="navbar__item navbar__item--dropdown">
                    <a href="milling.php" class="navbar__link">Фрезерный центр</a>
                    <div class="navbar__dropdown navbar-dropdown">
                      <ul class="navbar-dropdown__list">
                        <li class="navbar-dropdown__item">
                          <a href="milling.php#equipment" class="navbar-dropdown__link">Оборудование ФЦ</a>
                        </li>
                        <li class="navbar-dropdown__item">
                          <a href="milling.php#resident" class="navbar-dropdown__link">Резиденты-операторы CAD / CAM</a>
                        </li>
                        <li class="navbar-dropdown__item">
                          <a href="milling.php#service" class="navbar-dropdown__link">Прайс ФЦ</a>
                        </li>
                      </ul>
                    </div>
                    <!-- /.navbar__dropdown -->
                  </li>
                </ul>
              </nav>
            </div>
            <!-- /.header__primary -->

            <div class="header__secondary d-lg-flex">
              <div class="header__action mr-3">
                <button data-micromodal-trigger="modal-reservation" class="header__button button button-small">Забронировать место</button>
                <button onclick="location.href = 'stl.php'" data-micromodal-trigger="modal-stl" class="header__button button button-small">Отправить STL файл</button>
              </div>
              <!-- /.header__action -->

              <ul class="navbar">
                <li class="navbar__item">
                  <a href="contacts.php" class="navbar__link">Контакты</a>
                </li>
              </ul>
            </div>
            <!-- /.header__secondary -->

            <button id="mobile-menu-btn" class="header__mobile hamburger hamburger--collapse" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>
          </div>
          <!-- /.header -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.header-top -->

      <div class="header-bottom">
        <!-- Задний фон для выпадающего меню -->
      </div>
      <!-- /.header-bottom -->
    </header>

    <div id="mobile-menu" class="mobile-menu">
      <div class="mobile-menu__container">
        <ul class="mobile-menu__nav">
          <li class="mobile-menu__item">
            <a href="index.php" class="mobile-menu__link">Главная</a>
          </li>

          <li class="mobile-menu__item">
            <a href="statemnet.php" class="mobile-menu__link">Условия</a>
          </li>

          <li class="mobile-menu__item">
            <div class="handorgel handorgel--menu">
              <div class="handorgel__header">
                <div class="handorgel__header__button">
                  <h3 class="handorgel__title">Коворкинг</h3>
                  <div class="handorgel__indicator">
                    <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                    </svg>
                  </div>
                  <!-- /.handorgel__indicator -->
                </div>
                <!-- /.handorgel__header__button -->
              </div>
              <!-- /.handorgel__header -->

              <div class="handorgel__content">
                <div class="handorgel__content__inner">
                  <p class="handorgel__content__text">
                  <ul class="mobile-menu__dropdown">
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="coworking.php" class="mobile-menu__link">Главная</a></li>
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="coworking.php#statement" class="mobile-menu__link">Как стать резидентом</a></li>
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="coworking.php#excursion" class="mobile-menu__link">Рабочее место в коворкинге</a></li>
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="coworking.php#prices" class="mobile-menu__link">Прайс для резидентов</a></li>
                  </ul>
                  </p>
                </div>
                <!-- /.handorgel__content__inner -->
              </div>
              <!-- /.handorgel__content -->
            </div>
            <!-- /.handorgel-->
          </li>

          <li class="mobile-menu__item">
            <div class="handorgel handorgel--menu">
              <div class="handorgel__header">
                <div class="handorgel__header__button">
                  <h3 class="handorgel__title">Фрезерный центр</h3>
                  <div class="handorgel__indicator">
                    <svg class="handorgel__icon handorgel__icon--mobile" width="8" height="10" viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M8 5L0.5 9.33013L0.5 0.669873L8 5Z" fill="#515151" />
                    </svg>
                  </div>
                  <!-- /.handorgel__indicator -->
                </div>
                <!-- /.handorgel__header__button -->
              </div>
              <!-- /.handorgel__header -->

              <div class="handorgel__content">
                <div class="handorgel__content__inner">
                  <p class="handorgel__content__text">
                  <ul class="mobile-menu__dropdown">
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="milling.php" class="mobile-menu__link">Главная</a></li>
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="milling.php#equipment" class="mobile-menu__link">Оборудование фрезерного центра</a></li>
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="milling.php#resident" class="mobile-menu__link">Резиденты-операторы CAD / CAM</a></li>
                    <li class="mobile-menu__item mobile-menu__item--small"><a href="milling.php#service" class="mobile-menu__link">Прайс фрезерного центра</a></li>
                  </ul>
                  </p>
                </div>
                <!-- /.handorgel__content__inner -->
              </div>
              <!-- /.handorgel__content -->
            </div>
            <!-- /.handorgel-->
          </li>

          <li class="mobile-menu__item">Контакты</li>
        </ul>

        <button data-micromodal-trigger="modal-reservation" class="header__button button button-small mb-3">Забронировать место</button>
        <button onclick="location.href = 'stl.php'" data-micromodal-trigger="modal-stl" class="header__button button button-small mb-4">Отправить STL файл</button>

        <div class="mobile-menu__phone">
          Прямая линия
          <a class="mobile-menu__tel mt-2" href="tel:">+7 (111) 111 111</a>
        </div>
        <!-- /.mobile-menu__heading -->
      </div>
      <!-- /.mobile-menu__container -->
    </div>
    <!-- /.mobile-menu -->