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
              <img class="milling__image" src="img/pictures/milling/1.jpg" alt="">
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
            <div class="col-3">
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

            <div class="col-3">
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

            <div class="col-3">
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

            <div class="col-3">
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

      </div>
      <!-- /.container -->
    </section>

    <section id="service">
      <div class="container">

      </div>
      <!-- /.container -->
    </section>

    <section id="analytics">
      <div class="container">

      </div>
      <!-- /.container -->
    </section>
  </main>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>