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
                <div class="stl-slider__slide stl-slider__slide--map">
                  <div class="row mb-5">
                    <div class="col-9 offset-4">
                      <h2>Карта зубов</h2>
                    </div>
                  </div>
                  <!-- /.row -->

                  <div class="row">
                    <div class="col-3">
                      <div class="stl-file__annotation">
                        <ol class="list list--unmarked">
                          <li class="list__item">
                            1. Выберите зуб
                            для редактирования
                          </li>

                          <li class="list__item">
                            2. Вы можете копировать
                            настройки зуба на другой зуб
                          </li>

                          <li class="list__item">
                            3. Для указания опор мостовидной конструкции поставьте галочку в одном из полей над зубами
                          </li>
                        </ol>
                      </div>
                      <!-- /.stl-file__annotation -->
                    </div>
                    <!-- /.col-3 -->

                    <div id="teethMap" class="col-8 offset-1 col-no-pl">
                      <div class="stl-file__teeth stl-teeth pl-1">
                        <div class="stl-teeth__row mb-5">
                          <img src="img/stl/bg-top.svg" alt="" class="stl-teeth__background stl-teeth__background--top">
                          <span class="stl-teeth__help stl-teeth__help--top">Мостовидная опора</span>
                          <div class="stl-teeth__support stl-teeth__support--top">
                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>
                          </div>
                          <!-- /.stl-teeth__support -->

                          <div class="stl-teeth__map">
                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id">
                                18
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.1662 0C25.6364 0 34.6336 1.69755 34.6336 13.9719C34.6336 17.8946 33.9131 24.5586 28.3424 23.8286C23.1894 24.8391 19.9145 22.8016 17.1662 22.8016C14.4179 22.8016 12.9499 25.1787 5.99003 23.8286C1.88766 24.3662 0 17.7407 0 13.9719C0 1.61721 8.87513 0 17.1662 0Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id">
                                17
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="36" height="23" viewBox="0 0 36 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.8 0.0022517C26.2702 0.0022517 35.2674 -0.380464 35.2674 11.8939C35.2674 15.8166 34.5469 22.4806 28.9762 21.7506C23.8232 22.7611 20.5483 20.7236 17.8 20.7236C15.0517 20.7236 13.5837 23.1007 6.62382 21.7506C2.52145 22.2882 0.633789 15.6627 0.633789 11.8939C0.633789 -0.460804 9.50892 0.0022517 17.8 0.0022517Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id">
                                16
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.50162 0.00578531C10.3113 1.73743 15.5063 0.179042 20.0087 0.179042C24.5111 0.179042 29.0134 2.77644 33.5192 0.0057791C39.4016 -0.1727 40.0962 6.95484 40.0962 10.7422C40.0962 14.7427 39.2677 21.5389 32.8613 20.7944C26.9354 21.8249 23.1693 19.747 20.0087 19.747C16.8481 19.747 15.16 22.1713 7.15611 20.7944C2.43839 21.3426 0.267578 14.5858 0.267578 10.7422C0.267578 6.89701 1.89432 -0.231648 6.50162 0.00578531Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id">
                                15
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0957031 11.2017C0.0957031 5.01517 5.11088 0 11.2974 0H17.6483C22.8738 0 27.1099 4.2361 27.1099 9.4616V15.5851C27.1099 23.0449 21.0626 29.0922 13.6028 29.0922C6.14303 29.0922 0.0957031 23.0449 0.0957031 15.5851V11.2017Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id">
                                14
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="26" height="32" viewBox="0 0 26 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.07341 9.6974C2.41072 4.70027 2.8562 1.33587 11.8622 0C17.6804 0 23.1006 4.22894 25.1448 9.6974C25.1448 9.6974 26.4822 14.6945 25.1448 20.7801C23.8073 26.8658 17.4105 31.1702 13.0303 31.1702C8.65003 31.1702 1.93367 25.4283 0.181573 19.1396C0.181573 19.1396 -0.263908 14.6945 1.07341 9.6974Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id">
                                13
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.739258 15.4592C0.739258 8.63409 4.22569 0 13.0555 0C19.1902 0 24.9054 4.60485 27.0608 10.5594V22.6273C27.0608 30.0704 18.9057 33.9409 14.2871 33.9409C9.66851 33.9409 2.58669 27.6886 0.739258 20.8409V15.4592Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id--medium">
                                12
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="39" height="50" viewBox="0 0 39 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0605469 14.7983C0.0605469 6.62544 6.68599 0 14.8589 0C28.1089 0 38.8501 10.7413 38.8501 23.9913V43.7405C38.8501 47.127 36.1048 49.8723 32.7183 49.8723H16.3454C7.35152 49.8723 0.0605469 42.5814 0.0605469 33.5875V14.7983Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id--large">
                                11
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="61" height="73" viewBox="0 0 61 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.850586 21.9663C0.850586 9.83467 10.6853 0 22.8169 0C43.5847 0 60.4203 16.8356 60.4203 37.6034V62.7226C60.4203 67.8673 56.2498 72.0378 51.1051 72.0378H23.0161C10.7744 72.0378 0.850586 62.114 0.850586 49.8723V21.9663Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <!-- ВТОРАЯ ЧАСТЬ ЗУБОВ ВЕРХНЕЙ ЧЕЛЮСТИ -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id--large">
                                21
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="60" height="73" viewBox="0 0 60 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M59.9893 21.9663C59.9893 9.83467 50.1546 0 38.0229 0C17.2551 0 0.419518 16.8356 0.419518 37.6034V62.7226C0.419518 67.8673 4.59009 72.0378 9.73475 72.0378H37.8238C50.0654 72.0378 59.9893 62.114 59.9893 49.8723V21.9663Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id--medium">
                                22
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="40" height="50" viewBox="0 0 40 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M39.7793 14.7983C39.7793 6.62544 33.1539 0 24.981 0C11.731 0 0.9897 10.7413 0.9897 23.9913V43.7405C0.9897 47.127 3.73502 49.8723 7.12154 49.8723H23.4945C32.4883 49.8723 39.7793 42.5814 39.7793 33.5875V14.7983Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                23
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.1006 15.4592C27.1006 8.63409 23.6142 0 14.7844 0C8.64962 0 2.93441 4.60485 0.779074 10.5594V22.6273C0.779074 30.0704 8.93417 33.9409 13.5527 33.9409C18.1713 33.9409 25.2532 27.6886 27.1006 20.8409V15.4592Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                24
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="28" height="30" viewBox="0 0 28 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.7441 11.2017C27.7441 5.01517 22.729 0 16.5424 0H10.1916C4.96605 0 0.729956 4.2361 0.729956 9.4616V15.5851C0.729956 23.0449 6.77729 29.0922 14.237 29.0922C21.6968 29.0922 27.7441 23.0449 27.7441 15.5851V11.2017Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                25
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="26" height="32" viewBox="0 0 26 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.7664 9.6974C23.4291 4.70027 22.9836 1.33587 13.9776 0C8.15947 0 2.7392 4.22894 0.695087 9.6974C0.695087 9.6974 -0.642399 14.6945 0.695087 20.7801C2.03257 26.8658 8.42933 31.1702 12.8096 31.1702C17.1898 31.1702 23.9062 25.4283 25.6583 19.1396C25.6583 19.1396 26.1038 14.6945 24.7664 9.6974Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                26
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.3382 0.00578531C30.5285 1.73743 25.3335 0.179042 20.8311 0.179042C16.3288 0.179042 11.8264 2.77644 7.32064 0.0057791C1.43829 -0.1727 0.74366 6.95484 0.74366 10.7422C0.74366 14.7427 1.57217 21.5389 7.97853 20.7944C13.9044 21.8249 17.6706 19.747 20.8311 19.747C23.9917 19.747 25.6798 22.1713 33.6837 20.7944C38.4015 21.3426 40.5723 14.5858 40.5723 10.7422C40.5723 6.89701 38.9455 -0.231648 34.3382 0.00578531Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                27
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="36" height="23" viewBox="0 0 36 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.0399 0.0022517C9.56967 0.0022517 0.572483 -0.380464 0.572483 11.8939C0.572483 15.8166 1.29293 22.4806 6.86368 21.7506C12.0166 22.7611 15.2915 20.7236 18.0399 20.7236C20.7882 20.7236 22.2561 23.1007 29.216 21.7506C33.3184 22.2882 35.2061 15.6627 35.2061 11.8939C35.2061 -0.460804 26.3309 0.0022517 18.0399 0.0022517Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                28
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="35" height="25" viewBox="0 0 35 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.6736 0C9.20346 0 0.206272 1.69755 0.206272 13.9719C0.206272 17.8946 0.92672 24.5586 6.49747 23.8286C11.6504 24.8391 14.9253 22.8016 17.6736 22.8016C20.422 22.8016 21.8899 25.1787 28.8498 23.8286C32.9522 24.3662 34.8398 17.7407 34.8398 13.9719C34.8398 1.61721 25.9647 0 17.6736 0Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->
                          </div>
                          <!-- /.stl-teeth__map -->
                        </div>
                        <!-- /.stl-teeth__row -->

                        <div class="stl-teeth__row">
                          <img src="img/stl/bg-bottom.svg" alt="" class="stl-teeth__background stl-teeth__background--bottom">
                          <span class="stl-teeth__help stl-teeth__help--bottom">Мостовидная опора</span>
                          <div class="stl-teeth__support stl-teeth__support--bottom">
                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>

                            <label class="stl-teeth__checkbox checkbox checkbox--purple checkbox--small">
                              <input type="checkbox">
                              <span class="checkbox__mark"></span>
                            </label>
                          </div>
                          <!-- /.stl-teeth__support -->

                          <div class="stl-teeth__map">
                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                48
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="37" height="20" viewBox="0 0 37 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.0568514 5.08715C0.0568915 9.57845e-06 11.182 -2.58467e-05 18.3836 1.16374e-07C25.5852 2.60794e-05 36.7116 0.900741 36.7116 5.08715C36.7116 9.27347 36.7116 15.8974 31.475 17.8051C26.2384 19.7127 11.5108 20.3486 5.29185 17.1692C-0.927094 13.9897 0.0568514 9.27347 0.0568514 5.08715Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                47
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="37" height="20" viewBox="0 0 37 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.5286 19.1038C9.88898 19.1038 0.711842 20.0557 0.711842 9.16919C0.711843 5.69007 2.12489 1.90212 7.12886 0.427038C12.4873 -1.15252 15.7253 2.1587 18.5286 2.1587C21.3318 2.1587 22.8773 -1.05163 29.9283 0.42704C34.2718 1.33793 36.0381 5.82656 36.0381 9.1692C36.0381 20.1269 26.9855 19.1038 18.5286 19.1038Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                46
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="39" height="24" viewBox="0 0 39 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2642 0.0318996C28.7508 0.0318996 38.8277 -1.16672 38.8277 12.5422C38.8277 16.9233 37.2761 21.6933 31.7815 23.5508C26.0271 23.5508 22.3424 22.4038 19.2642 22.4038C16.1861 22.4038 14.7781 23.5508 6.74692 23.5508C1.97757 22.4038 0.0380859 16.7514 0.0380859 12.5422C0.0380859 -1.25645 9.97823 0.0318996 19.2642 0.0318996Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                45
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="29" height="34" viewBox="0 0 29 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.77138 14.3045C0.77113 9.80215 2.84886 2.18275 17.2462 0.538801C27.5128 0.538826 29.1246 8.36615 27.5133 18.1517C25.9021 27.9371 19.7183 34.6418 11.844 33.3452C2.1799 31.7539 0.771936 24.3482 0.77138 14.3045Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                44
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.60017 9.65833C2.20638 5.97677 6.84338 0.555094 16.6589 0.165625C22.1349 1.06729 28.5373 7.99298 26.9261 17.7785C25.3148 27.5639 19.131 34.2686 11.2567 32.972C1.59262 31.3807 -0.184039 18.8705 1.60017 9.65833Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                43
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="36" height="46" viewBox="0 0 36 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.510564 16.1645C0.729045 7.41926 7.90736 0.839528 16.6219 0.0750982C29.1113 -1.02047 39.2241 10.0466 34.8317 21.7895C30.4141 33.5996 23.5913 45.3586 13.936 45.3586C2.08614 45.3586 0.191411 28.9394 0.510564 16.1645Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id stl-teeth__id--medium">
                                42
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="37" height="52" viewBox="0 0 37 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.88344 10.0335C0.69966 5.79463 3.93197 2.28183 8.15606 1.88334L27.7208 0.0376845C32.8193 -0.443288 37.0952 3.74583 36.44 8.82486C34.5002 23.8599 29.293 51.0707 17.011 51.0707C4.24372 51.0707 1.47282 23.6276 0.88344 10.0335Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id stl-teeth__id--medium">
                                41
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="41" height="59" viewBox="0 0 41 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.518399 8.28419C0.2728 3.70014 3.97155 0 8.56217 0H32.8057C37.3963 0 41.095 3.70015 40.8494 8.28419C39.9805 24.5028 36.2972 58.8771 20.6839 58.8771C5.07068 58.8771 1.38734 24.5027 0.518399 8.28419Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <!-- ВТОРАЯ ЧАСТЬ ЗУБОВ НИЖНЕЙ ЧЕЛЮСТИ -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id stl-teeth__id--medium">
                                31
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="42" height="59" viewBox="0 0 42 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.872891 8.28419C0.627292 3.70014 4.32604 0 8.91667 0H33.1602C37.7508 0 41.4495 3.70015 41.2039 8.28419C40.335 24.5028 36.6517 58.8771 21.0384 58.8771C5.42517 58.8771 1.74183 24.5027 0.872891 8.28419Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id stl-teeth__id--medium">
                                32
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="36" height="52" viewBox="0 0 36 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.8392 10.0335C36.023 5.79463 32.7907 2.28183 28.5666 1.88334L9.00189 0.0376845C3.90339 -0.443288 -0.372585 3.74583 0.282692 8.82486C2.22246 23.8599 7.42967 51.0707 19.7117 51.0707C32.4789 51.0707 35.2498 23.6276 35.8392 10.0335Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                33
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="37" height="46" viewBox="0 0 37 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.2121 16.1645C35.9936 7.41926 28.8153 0.839528 20.1008 0.0750982C7.61131 -1.02047 -2.50149 10.0466 1.89094 21.7895C6.30854 33.5996 13.1313 45.3586 22.7866 45.3586C34.6365 45.3586 36.5312 28.9394 36.2121 16.1645Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                34
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="27" height="34" viewBox="0 0 27 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M26.1225 9.65833C25.5163 5.97677 20.8793 0.555094 11.0637 0.165625C5.58779 1.06729 -0.814688 7.99298 0.796594 17.7785C2.40787 27.5639 8.59163 34.2686 16.4659 32.972C26.13 31.3807 27.9067 18.8705 26.1225 9.65833Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                35
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="28" height="34" viewBox="0 0 28 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M27.9503 14.3045C27.9505 9.80215 25.8728 2.18275 11.4755 0.538801C1.20889 0.538826 -0.402951 8.36615 1.20833 18.1517C2.8196 27.9371 9.00337 34.6418 16.8777 33.3452C26.5418 31.7539 27.9497 24.3482 27.9503 14.3045Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                36
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="40" height="24" viewBox="0 0 40 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.4584 0.0318996C10.9718 0.0318996 0.894974 -1.16672 0.894974 12.5422C0.894974 16.9233 2.44656 21.6933 7.94111 23.5508C13.6955 23.5508 17.3803 22.4038 20.4584 22.4038C23.5365 22.4038 24.9445 23.5508 32.9757 23.5508C37.7451 22.4038 39.6846 16.7514 39.6846 12.5422C39.6846 -1.25645 29.7444 0.0318996 20.4584 0.0318996Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                37
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="37" height="20" viewBox="0 0 37 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.1941 19.1038C26.8337 19.1038 36.0108 20.0557 36.0108 9.16919C36.0108 5.69007 34.5978 1.90212 29.5938 0.427038C24.2354 -1.15252 20.9974 2.1587 18.1941 2.1587C15.3908 2.1587 13.8453 -1.05163 6.7944 0.42704C2.45088 1.33793 0.684569 5.82656 0.684569 9.1692C0.68457 20.1269 9.7372 19.1038 18.1941 19.1038Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->

                            <div class="stl-teeth__item">
                              <div class="stl-teeth__id stl-teeth__id">
                                38
                              </div>
                              <!-- /.stl-teeth__id -->

                              <svg width="37" height="20" viewBox="0 0 37 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M36.6658 5.08715C36.6658 9.57845e-06 25.5407 -2.58467e-05 18.3391 1.16374e-07C11.1375 2.60794e-05 0.0110741 0.900741 0.0110741 5.08715C0.0110741 9.27347 0.0110741 15.8974 5.24764 17.8051C10.4842 19.7127 25.2119 20.3486 31.4308 17.1692C37.6498 13.9897 36.6658 9.27347 36.6658 5.08715Z" fill="white" />
                              </svg>
                            </div>
                            <!-- /.stl-teeth__item -->
                          </div>
                          <!-- /.stl-teeth__map -->
                        </div>
                        <!-- /.stl-teeth__row -->
                      </div>
                      <!-- /.stl-file__teeth -->
                    </div>
                    <!-- /.col-8 -->
                  </div>
                  <!-- /.row -->

                  <div class="col-12 mt-5 pt-5">
                    <button data-stl-action="send" class="stl-slider__button button button-secondary ml-auto">
                      Отправить данные
                    </button>
                  </div>
                  <!-- /.col-2 -->
                </div>
                <!-- /.stl-slider__slide -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="stl-slider__slide stl-slider__slide--form">
                  <div class="row justify-content-center">
                    <div class="col-11 col-no-px">
                      <div class="stl-file__summary stl-summary">
                        <div class="stl-summary__wrapper">
                          <table class="stl-summary__table stl-table">
                            <thead class="stl-table__header">
                              <tr>
                                <th>Номер <br> зуба</th>
                                <th>Конструкция</th>
                                <th>Система импланта <br> и размеры</th>
                                <th>Материал <br> изготовления</th>
                                <th>Цвет <br> коронки</th>
                                <th>Десневая <br> часть</th>
                                <th>Опак <br> и карвинг</th>
                              </tr>
                            </thead>

                            <tbody id="summary">

                            </tbody>
                          </table>
                        </div>
                        <!-- /.stl-table__wrapper -->
                        <button type="button" data-stl-action="back" class="stl-summary__button button button-secondary mt-5">Вернуться к редактированию</button>
                      </div>
                      <!-- /.stl-file__summary stl-summary -->
                    </div>
                    <!-- /.col-7 -->
                  </div>
                  <!-- /.row -->

                  <div class="row justify-content-center">
                    <div class="col-6">
                      <form id="stl-form" action="php/mail.php" enctype="multipart/form-data" class="form form-excursion">
                        <h2 class="form-excursion__title excursion-mobile--hide mb-5">
                          Укажите Ваши данные
                        </h2>
                        <input class="input input-field mb-3" type="text" require placeholder="Наименование заказчика" name="user_name">
                        <input class="input input-field mb-3" type="text" require placeholder="ФИО пациента" name="patient_name">
                        <input class="input input-field mb-3" type="tel" require placeholder="Контактный номер телефона" name="user_phone">
                        <textarea class="input input-field mb-4" name="user_message" cols="20" rows="5" placeholder="Введите дополнительную ифнормацию (если требуется)"></textarea>

                        <div class="form__policy">
                          <label class="checkbox checkbox--purple">
                            <input type="checkbox">
                            <span class="checkbox__mark"></span>
                            <span class="checkbox__label">Я принимаю <a href="" class="checkbox__policy checkbox__policy--black">политику конфиденциальности</a></span>
                          </label>
                        </div>

                        <div class="row mt-4">
                          <div class="col-12">
                            <div id="stlMailMessage" class="stl-form__message stl-form__message--send">Письмо было отправлено!</div>
                          </div>
                          <!-- /.col-12 -->

                          <div class="col-7">
                            <div class="stl-form__submit">
                              <button type="submit" data-stl-action="mail" class="button button-secondary mb-3">Подтвердить и отправить</button>
                              <div id="stlFormPreloader" class="stl-form__preloader">
                                <img src="img/stl/preloader.svg" alt="">
                              </div>
                            </div>
                            <!-- /.stl-form__submit -->
                          </div>
                          <!-- /.col-6 -->
                        </div>
                        <!-- /.row -->
                      </form>
                    </div>
                    <!-- /.col-5 -->
                  </div>
                  <!-- /.row -->
                </div>
                <!-- /.stl-slider__slide -->
              </div>
              <!-- /.swiper-slide -->

              <div class="swiper-slide">
                <div class="stl-slider__slide stl-slider__slide--stage">
                  <div class="stl-file__stage stl-stage">
                    <div class="stl-stage__selector">
                      <div class="stl-stage__tab stl-stage__tab--active" data-stl-stage="first">1 этап</div>
                      <!-- /.stl-stage__tab -->

                      <div class="stl-stage__tab" data-stl-stage="second">2 этап</div>
                      <!-- /.stl-stage__tab -->
                    </div>
                    <!-- /.stl-stage__selector -->

                    <div class="swiper-container stl-stage__slider">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <div class="stl-stage__item">
                            <div class="row">
                              <div class="col-3 mr-5">
                                <div class="stl-stage__info stl-info mb-5">
                                  <div data-stl-info="construction" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Конструкция</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="system" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Система имплантов и размеры</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="material" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Материал изготовления</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="color" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Цвет коронки</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="parameter" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Десневая часть</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="advanced" class="stl-info__item">
                                    <h3 class="stl-info__title">Опак и карвинг</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->
                                </div>
                                <!-- /.stl-stage__info -->

                                <div class="stl-slider__control">
                                  <button data-stl-action="save" class="stl-slider__prev stl-slider__button button button-secondary mb-3">
                                    Сохранить настройки
                                  </button>

                                  <button data-stl-action="reset" class="stl-slider__prev stl-slider__button button button-secondary mb-3">
                                    Сбросить параметры
                                  </button>

                                  <button class="stl-slider__prev stl-slider__button button button-secondary">
                                    Вернуться к карте зубов
                                  </button>
                                </div>
                                <!-- /.stl-slider__control -->
                              </div>
                              <!-- /.col-3 -->

                              <div class="col-8">
                                <div class="stl-stage__wrapper">
                                  <img class="stl-stage__background" src="img/stl/circle.svg" alt="">

                                  <div class="stl-stage__teeth">
                                    <div class="stl-teeth__item">
                                      <div class="stl-teeth__id stl-teeth__id stl-teeth__id--medium">
                                        41
                                      </div>
                                      <!-- /.stl-teeth__id -->

                                      <svg width="41" height="59" viewBox="0 0 41 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.518399 8.28419C0.2728 3.70014 3.97155 0 8.56217 0H32.8057C37.3963 0 41.095 3.70015 40.8494 8.28419C39.9805 24.5028 36.2972 58.8771 20.6839 58.8771C5.07068 58.8771 1.38734 24.5027 0.518399 8.28419Z" fill="white" />
                                      </svg>
                                    </div>
                                    <!-- /.stl-teeth__item -->
                                  </div>
                                  <!-- /.stl-stage__teeth -->

                                  <div class="stl-stage__control">
                                    <div data-status="construction" class="stl-stage__status" data-micromodal-trigger="modal-stl__construction">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="construction" class="stl-stage__button" data-micromodal-trigger="modal-stl__construction">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Тип конструкции
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="parameter" class="stl-stage__status" data-micromodal-trigger="modal-stl__parameter">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="parameter" class="stl-stage__button" data-micromodal-trigger="modal-stl__parameter">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Десневая часть
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="color" class="stl-stage__status" data-micromodal-trigger="modal-stl__color">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="color" class="stl-stage__button" data-micromodal-trigger="modal-stl__color">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Цвет коронки
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="system" class="stl-stage__status" data-micromodal-trigger="modal-stl__system">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="system" class="stl-stage__button" data-micromodal-trigger="modal-stl__system">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Система имплантов <br> и размеры
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="material" class="stl-stage__status" data-micromodal-trigger="modal-stl__material">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="material" class="stl-stage__button" data-micromodal-trigger="modal-stl__material">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Материал <br> изготовления
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="advanced" class="stl-stage__status" data-micromodal-trigger="modal-stl__advanced">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="advanced" class="stl-stage__button" data-micromodal-trigger="modal-stl__advanced">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Опак и карвинг
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->
                                  </div>
                                  <!-- /.stl-stage__control -->
                                </div>
                                <!-- /.stl-stage__wrapper -->
                              </div>
                              <!-- /.col-8 -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.stl-stage__item -->
                        </div>
                        <!-- /.swiper-slide -->

                        <div class="swiper-slide">
                          <div class="stl-stage__item">
                            <div class="row">
                              <div class="col-3 mr-5">
                                <div class="stl-stage__info stl-info mb-5">
                                  <div data-stl-info="construction" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Конструкция</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="system" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Система имплантов и размеры</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="material" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Материал изготовления</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="color" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Цвет коронки</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="parameter" class="stl-info__item mb-3">
                                    <h3 class="stl-info__title">Десневая часть</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->

                                  <div data-stl-info="advanced" class="stl-info__item">
                                    <h3 class="stl-info__title">Опак и карвинг</h3>
                                    <div class="stl-info__value">Не определено</div>
                                  </div>
                                  <!-- /.stl-info__item -->
                                </div>
                                <!-- /.stl-stage__info -->

                                <div class="stl-slider__control">
                                  <button data-stl-action="save" class="stl-slider__prev stl-slider__button button button-secondary mb-3">
                                    Сохранить настройки
                                  </button>

                                  <button data-stl-action="reset" class="stl-slider__prev stl-slider__button button button-secondary mb-3">
                                    Сбросить параметры
                                  </button>

                                  <button class="stl-slider__prev stl-slider__button button button-secondary">
                                    Вернуться к карте зубов
                                  </button>
                                </div>
                                <!-- /.stl-slider__control -->
                              </div>
                              <!-- /.col-3 -->

                              <div class="col-8">
                                <div class="stl-stage__wrapper">
                                  <img class="stl-stage__background" src="img/stl/circle.svg" alt="">

                                  <div class="stl-stage__teeth">
                                    <div class="stl-teeth__item">
                                      <div class="stl-teeth__id stl-teeth__id stl-teeth__id--medium">
                                        41
                                      </div>
                                      <!-- /.stl-teeth__id -->

                                      <svg width="41" height="59" viewBox="0 0 41 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0.518399 8.28419C0.2728 3.70014 3.97155 0 8.56217 0H32.8057C37.3963 0 41.095 3.70015 40.8494 8.28419C39.9805 24.5028 36.2972 58.8771 20.6839 58.8771C5.07068 58.8771 1.38734 24.5027 0.518399 8.28419Z" fill="white" />
                                      </svg>
                                    </div>
                                    <!-- /.stl-teeth__item -->
                                  </div>
                                  <!-- /.stl-stage__teeth -->

                                  <div class="stl-stage__control">
                                    <div data-status="construction" class="stl-stage__status">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="construction" class="stl-stage__button" data-micromodal-trigger="modal-stl__construction">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Тип конструкции
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="parameter" class="stl-stage__status">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="parameter" class="stl-stage__button" data-micromodal-trigger="modal-stl__parameter">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Десневая часть
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="color" class="stl-stage__status">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="color" class="stl-stage__button" data-micromodal-trigger="modal-stl__color">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Цвет коронки
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="system" class="stl-stage__status">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="system" class="stl-stage__button" data-micromodal-trigger="modal-stl__system">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Система имплантов <br> и размеры
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="material" class="stl-stage__status">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="material" class="stl-stage__button" data-micromodal-trigger="modal-stl__material">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Материал <br> изготовления
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->

                                    <div data-status="advanced" class="stl-stage__status">
                                      <img class="stl-stage__circle" src="img/stl/mini-circle.svg" alt="">
                                      <img class="stl-stage__checkmark" src="img/stl/checkmark.svg" alt="">

                                      <div data-status="advanced" class="stl-stage__button" data-micromodal-trigger="modal-stl__advanced">
                                        <span class="stl-stage__edit">Редактировать
                                          <svg width="19" height="8" viewBox="0 0 19 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.3536 4.35355C18.5488 4.15829 18.5488 3.84171 18.3536 3.64645L15.1716 0.464466C14.9763 0.269204 14.6597 0.269204 14.4645 0.464466C14.2692 0.659728 14.2692 0.976311 14.4645 1.17157L17.2929 4L14.4645 6.82843C14.2692 7.02369 14.2692 7.34027 14.4645 7.53553C14.6597 7.7308 14.9763 7.7308 15.1716 7.53553L18.3536 4.35355ZM0 4.5H18V3.5H0V4.5Z" fill="#A8A8A8" />
                                          </svg>
                                        </span>

                                        Опак и карвинг
                                      </div>
                                      <!-- /.stl-stage__button -->
                                    </div>
                                    <!-- /.stl-stage__status -->
                                  </div>
                                  <!-- /.stl-stage__control -->
                                </div>
                                <!-- /.stl-stage__wrapper -->
                              </div>
                              <!-- /.col-8 -->
                            </div>
                            <!-- /.row -->
                          </div>
                          <!-- /.stl-stage__item -->
                        </div>
                        <!-- /.swiper-slide -->
                      </div>
                      <!-- /.swiper-wrapper -->
                    </div>
                    <!-- /.swiper-container -->
                  </div>
                  <!-- /.stl-file__stage -->
                </div>
                <!-- /.stl-slider__slide -->
              </div>
              <!-- /.swiper-slide -->
            </div>
            <!-- /.swiper-wrapper -->
          </div>
          <!-- /.swiper-container -->
        </div>
        <!-- /.stl-file -->
      </div>
      <!-- /.container -->
    </section>
  </main>

  <div data-status="construction" class="modal modal-stl micromodal-slide" id="modal-stl__construction">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите тип конструкции
          </h2>
        </div>
        <!-- /.modal__header -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row mb-4">
              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/1.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Анатомическая <br> коронка</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/2.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Анатомическая коронка <br> винтовой фиксации</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/3.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Каркас</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/4.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Каркас винтовой <br> фиксации</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/5.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Абатмент</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/6.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Вкладка</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/7.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Рельсовая балка</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio d-flex flex-column">
                    <img class="radio__image mb-4" src="img/stl/construction/8.png" alt="">
                    <span class="radio__input align-items-start">
                      <input type="radio" name="construction">
                      <span class="radio__control"></span>
                      <span class="radio__label">Разборная вкладка</span>
                    </span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-6 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.modal-stl__wrapper -->

          <button data-micromodal-close data-stl-action="accept" class="modal-stl__button button button-outline mr-3">Подтвердить</button>
          <button data-micromodal-close data-stl-action="default" class="modal-stl__button button button-outline">Сбросить</button>
        </div>
        <!-- /.modal__content -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->

  <div data-status="material" class="modal modal-stl micromodal-slide" id="modal-stl__material">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите материал изготовления
          </h2>
        </div>
        <!-- /.modal__header -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row mb-5">
              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">ZrO2 (Циркон)</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Предокрашенный однослойный диоксид циркония (HT, STC) для каркасов, анатомических коронок, абатментов, вкладок
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Multilayer 3D</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Предокрашенный многослойный (6 слоев) диоксид циркония для анатомических коронок
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">PMMA</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Диск из полиметилакрилата (PMMA) для временных коронок
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Titan</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Медицинский титановый диск для рельсовых балок
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">WAX</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Диск из выгорающего воска для каркасов и анатомических коронок под прессовку
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Pre-mill (T)</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Титановая Pre-milled заготовка для индивидуальных абатментов
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">CoCr (Кобальт хром)</span>
                  </label>

                  <p class="mt-2 ml-4 pl-3">
                    Кобальт хромовый диск для каркасов под нанесение
                  </p>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4">
                <div class="modal-stl__section">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="material">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Другое</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.modal-stl__wrapper -->

          <button data-micromodal-close data-stl-action="accept" class="modal-stl__button button button-outline mr-3">Подтвердить</button>
          <button data-micromodal-close data-stl-action="default" class="modal-stl__button button button-outline">Сбросить</button>
        </div>
        <!-- /.modal__content -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->

  <div data-status="advanced" class="modal modal-stl micromodal-slide" id="modal-stl__advanced">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Опак и карвинг
          </h2>
        </div>
        <!-- /.modal__header -->

        <div class="modal__content">
          <div class="row mb-5 justify-content-center">
            <div class="col-9">
              <div class="modal-stl__section">
                <label class="checkbox checkbox--small mb-3">
                  <input type="checkbox" name="advanced">
                  <span class="checkbox__mark"></span>
                  <span class="checkbox__label">Опак</span>
                </label>
                <p class="ml-4 pl-1">(нанесение опаковой жидкости на внутреннюю часть коронки / <br> каркаса для перекрывания металлических вкладок)</p>
              </div>
              <!-- /.modal-stl__section -->

              <div class="modal-stl__section mb-5">
                <label class="checkbox checkbox--small mb-3">
                  <input type="checkbox" name="advanced">
                  <span class="checkbox__mark"></span>
                  <span class="checkbox__label">Карвинг</span>
                </label>
                <p class="ml-4 pl-1">(Доработка сырого циркона, индивидуализация <br> анатомических особенностей и фиссур на коронках)</p>
              </div>
              <!-- /.modal-stl__section -->

              <button data-micromodal-close data-stl-action="accept" class="modal-stl__button button button-outline mr-3">Подтвердить</button>
              <button data-micromodal-close data-stl-action="default" class="modal-stl__button button button-outline">Сбросить</button>
            </div>
            <!-- /.col-3 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.modal__content -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->

  <div data-status="color" class="modal modal-stl micromodal-slide" id="modal-stl__color">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите цвет коронки по шкале VITA
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row">
              <div class="col-3 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
                        <span class="radio__control"></span>
                      </span>
                      <span class="radio__label">A3.5</span>
                    </div>
                    <!-- /.radio__wrapper -->
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-3 -->

              <div class="col-3 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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

              <div class="col-3 mb-3"></div>

              <div class="col-3 mb-3">
                <div class="modal-stl__section">
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
                  <label class="radio">
                    <div class="radio__wrapper">
                      <span class="radio__input">
                        <input type="radio" name="color">
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
            </div>
            <!-- /.row -->
          </div>
          <!-- /.modal-stl__wrapper -->

          <button data-micromodal-close data-stl-action="accept" class="modal-stl__button button button-outline mr-3">Подтвердить</button>
          <button data-micromodal-close data-stl-action="default" class="modal-stl__button button button-outline">Сбросить</button>
        </div>
        <!-- /.modal__content -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->

  <div data-status="system" class="modal modal-stl micromodal-slide" id="modal-stl__system">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Укажите систему имплантов и размеры
          </h2>
        </div>
        <!-- /.modal__header -->

        <div class="modal__content">
          <div class="row justify-content-center">
            <div class="col-10">
              <div class="modal-stl__wrapper">
                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">ANKYLOS</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">C</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">X</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Anthogyr Axiom</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">C</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">ASTRA TECH</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.0</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.5 / 4.0</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.5 / 5.0</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">BEGO Semados</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.25 / 3.75</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Dentium / implantium</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">ICX</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Alfa Bio</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Alpha Dent</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (3.0)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (4.2)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">MegaGen AnyOne</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">BioHorizons</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.0</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">5.7</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (5.0/6.0)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">MegaGen AnyRidge</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">MIS SEVEN</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (3.3)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">SP (3.75)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">SP (4.2)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (5.0 / 6.0)</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">LIKO / NIKO</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.5</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">MIS</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (3.3)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">SP (3.75/4.2)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (5.0/6.0)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">MIS С1 </span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (3.3)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">SP (3.75/4.2)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (5.0)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">NobelActive</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.0</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (3.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">RP (4.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (5.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">NobelActive</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.3</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.8</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.1</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">NobelReplace</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (3.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">RP (4.3)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WP (5.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Osstem</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Mini (3.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Regular (4.0 / 4.5 / 5.0)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Straumann Bone Level</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NC (3.3)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">RC (4.1 / 4.8)</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Straumann SyncOcta</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NN (3.5)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">RN (4.8)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">WN (6.5)</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">XiVE</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.0</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.4</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.8</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">4.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">5.5</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">Multi-Unit</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">IRIS Liko-M</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">3.0</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Conmet</span>
                  </label>

                  <div class="modal-stl__group mt-3">
                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">NP (2.2)</span>
                    </label>

                    <label class="checkbox checkbox--small checkbox--gray ml-4">
                      <input type="radio" name="system-size">
                      <span class="checkbox__mark"></span>
                      <span class="checkbox__label">RP (2.7)</span>
                    </label>
                  </div>
                  <!-- /.modal-stl__group -->
                </div>
                <!-- /.modal-stl__section -->

                <div class="modal-stl__section mb-5">
                  <label class="radio">
                    <span class="radio__input">
                      <input type="radio" name="system">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Другое</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.modal-stl__wrapper -->

              <button data-micromodal-close data-stl-action="accept" class="modal-stl__button button button-outline mr-3">Подтвердить</button>
              <button data-micromodal-close data-stl-action="default" class="modal-stl__button button button-outline">Сбросить</button>
            </div>
            <!-- /.col-10 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.modal__content -->
      </div>
      <!-- /.modal__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->

  <div data-status="parameter" class="modal modal-stl micromodal-slide" id="modal-stl__parameter">
    <div class="modal__overlay modal-stl__overlay" data-micromodal-close>
      <div class="modal__container modal-stl__container">
        <button class="modal__close" data-micromodal-close></button>

        <div class="modal__header">
          <h2 class="modal__title modal-stl__title">
            Наличие десневой части
          </h2>
        </div>
        <!-- /.modal__title -->

        <div class="modal__content">
          <div class="modal-stl__wrapper">
            <div class="row justify-content-center">
              <div class="col-4">
                <div class="modal-stl__section">
                  <label class="radio radio--big">
                    <span class="radio__input">
                      <input type="radio" name="parameter">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Есть</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->

              <div class="col-4">
                <div class="modal-stl__section">
                  <label class="radio radio--big">
                    <span class="radio__input">
                      <input type="radio" name="parameter">
                      <span class="radio__control"></span>
                    </span>
                    <span class="radio__label">Отсутствует</span>
                  </label>
                </div>
                <!-- /.modal-stl__section -->
              </div>
              <!-- /.col-4 -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.modal-stl__wrapper -->

          <button data-micromodal-close data-stl-action="accept" class="modal-stl__button button button-outline mr-3">Подтвердить</button>
          <button data-micromodal-close data-stl-action="default" class="modal-stl__button button button-outline">Сбросить</button>
        </div>
        <!-- /.modal__content -->
      </div>
      <!-- /.modal-stl__container -->
    </div>
    <!-- /.modal__overlay -->
  </div>
  <!-- /.modal -->

  <div id="contextMenu" class="context-menu">
    <div class="context-menu__container">
      <div class="context-menu__wrapper context-menu__wrapper--arrow mr-2">
        <div data-context-action="copy" class="context-menu__item context-menu__item--disabled">Копировать</div>
        <div data-context-action="paste" class="context-menu__item context-menu__item--disabled">Вставить</div>
        <div data-context-action="clear" class="context-menu__item">Очистить</div>

        <div data-context-action="mark--heath" class="context-menu__item">
          Пометить как <span class="context-menu__span context-menu__span--blue">здоровый</span>
        </div>

        <div data-context-action="mark--empty" class="context-menu__item">
          Пометить как <span class="context-menu__span context-menu__span--red">отсутствующий</span>
        </div>
      </div>
      <!-- /.context-menu__wrapper -->

      <div class="context-menu__wrapper context-menu__wrapper--hidden">
        <div class="context-menu__teeth"></div>
        <!-- /.context-menu__teeth -->
      </div>
      <!-- /.context-menu__wrapper -->
    </div>
    <!-- /.context-menu__container -->
  </div>
  <!-- /.context-menu -->

  <!-- Подвал -->
  <?php include_once 'partials/footer.php' ?>

  <script src="scripts/stl/libraries/popper.js"></script>
  <script src="scripts/stl/libraries/tippy.js"></script>
  <script src="scripts/stl/libraries/html2canvas.js"></script>
  <script src="scripts/stl/stl.js"></script>
  <script src="scripts/stl/stl-utils.js"></script>

</body>

</html>