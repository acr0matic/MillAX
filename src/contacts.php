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
    <section id="contacts">
      <div class="contacts">
        <div class="contacts__map">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2ee8c0203e8011213a31527b420f11402ed2094b98b1d44e5451baad578b10f3&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
        <!-- /.contacts__map -->

        <div class="contacts__container container">
          <form class="contacts__form form form-contribute">
            <h1 class="form-contribute__title">
              Свяжитесь с нами
              для сотрудничества
            </h1>

            <input class="input input-field mb-3" type="text" name="user_name" placeholder="Ваше имя">
            <input class="input input-field mb-3" type="text" name="user_phone" placeholder="Номер телефона">
            <textarea class="input input-field mb-4" name="user_message" cols="20" rows="5" placeholder="Ваш комментарий"></textarea>
            <div class="form__policy">
              <label class="checkbox">
                <input type="checkbox">
                <span class="checkbox__mark"></span>
                <span class="checkbox__label">Я принимаю условия <a href="" class="checkbox__policy">пользовательского соглашения </a> и <a href="" class="checkbox__policy">политику конфиденциальности</a></span>
              </label>
            </div>
            <!-- /.policy-wrapper -->
            <button class="form-excursion__button button button-outline">Забронировать</button>
          </form>
          <!-- /.contacts__form -->

          <div class="contacts__info contact-info">
            <div class="contact-info__item">
              <h3 class="contact-info__title">Адрес</h3>
              <p class="contact-info__description">Москва, ул. <br> Название улицы</p>
            </div>
            <!-- /.contact-info__item -->

            <div class="contact-info__item">
              <h3 class="contact-info__title">Режим работы</h3>
              <p class="contact-info__description">пн - сб 24/7</p>
            </div>
            <!-- /.contact-info__item -->

            <div class="contact-info__item">
              <h3 class="contact-info__title">Контактный номер</h3>
              <p class="contact-info__description"><a href="tel:">+7 (111) 111 11 11</a></p>
            </div>
            <!-- /.contact-info__item -->

            <div class="contact-info__item">
              <h3 class="contact-info__title">E-mail</h3>
              <p class="contact-info__description"><a href="mailto:millax@ax.ru">millax@ax.ru</a></p>
            </div>
            <!-- /.contact-info__item -->
          </div>
          <!-- /.contacts__info -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.contacts -->
    </section>
  </main>

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

</body>

</html>