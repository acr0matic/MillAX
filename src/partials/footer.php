<footer id="footer">
  <div class="container">
    <div class="footer">
      <div class="footer__media">
        <img src="img/logo-white.svg" alt="" class="footer__logo">
        <div class="footer__social">
          Мы в соц. сетях
          <ul class="footer__list">
            <li>
              <a href="" class="footer__link"><img src="img/icons/social/instagram.svg" alt="" class="footer__icon"></a>
            </li>

            <li>
              <a href="" class="footer__link"><img src="img/icons/social/facebook.svg" alt="" class="footer__icon"></a>
            </li>

            <li>
              <a href="" class="footer__link"><img src="img/icons/social/vk.svg" alt="" class="footer__icon"></a>
            </li>
          </ul>
        </div>
        <!-- /.footer__social -->
      </div>
      <!-- /.footer__media -->

      <div class="footer__menu">
        <a href="" class="footer__link">Коворкинг</a>

        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            <a href="" class="footer__link">Рабочее место в коворкинге</a>
          </li>

          <li class="footer__menu-item">
            <a href="" class="footer__link">
              Как стать
              <br>
              резидентом
            </a>
          </li>

          <li class="footer__menu-item">
            <a href="" class="footer__link">
              Прайс
              <br>
              для резидентов</a>
          </li>
        </ul>
        <!-- /.footer__title -->
      </div>
      <!-- /.footer__menu -->

      <div class="footer__menu">
        <a href="" class="footer__link">Фрезерный центр</a>

        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            <a href="" class="footer__link">Оборудование ФЦ</a>
          </li>

          <li class="footer__menu-item">
            <a href="" class="footer__link">Резиденты-операторы CAD / CAM
            </a>
          </li>

          <li class="footer__menu-item">
            <a href="" class="footer__link">Прайс ФЦ</a>
          </li>
        </ul>
        <!-- /.footer__title -->
      </div>
      <!-- /.footer__menu -->

      <div class="footer__menu">
        <a href="" class="footer__link">Контакты</a>

        <ul class="footer__menu-list">
          <li class="footer__menu-item">
            Прямая линия
            <br>
            <a href="tel:" class="footer__link">+7 (111) 111 111</a>
          </li>

          <li class="footer__menu-item">
            Адрес: ул. Неизвестная, д. 20, этаж 10
          </li>

          <li class="footer__menu-item">
            Режим работы:
            <br>
            24/7
          </li>
        </ul>
        <!-- /.footer__title -->
      </div>
      <!-- /.footer__menu -->

      <div class="footer__action">
        <a href="" class="footer__interactive">Забронировать место в коворкинге</a>
        <a href="" class="footer__interactive">Вызвать курьера</a>
        <a href="" class="footer__interactive">Отправить STL файл</a>
      </div>
      <!-- /.footer__action -->
    </div>
    <!-- /.footer -->

    <div class="footer-bottom">
      <a href="" class="footer-bottom__policy">Политика конфиденциальности</a>
    </div>
    <!-- /.footer-bottom -->
  </div>
  <!-- /.container -->
</footer>

<div class="modal micromodal-slide" id="modal-courier">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container">
      <div class="modal__header">
        <h2 class="modal__title">
          Экскурсия по коворкингу
        </h2>
        <button class="modal__close" data-micromodal-close></button>
      </div>

      <div class="modal__content">
        <form action="" class="form form-excursion">
          <input class="input input-field mb-3" type="text" placeholder="Ваше имя">
          <input class="input input-field mb-3" type="tel" placeholder="Номер телефона">
          <input class="input input-field mb-3" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" min="2020-12-02" placeholder="Желаемая дата посещения">
          <input class="input input-field mb-3" type="text" onfocus="(this.type='time')" onblur="(this.type='text')" placeholder="Желаемое время посещения">
          <div class="form__policy">
            <label class="checkbox">
              <input type="checkbox">
              <span class="checkbox__mark border-small-br-tl"></span>
              <span class="checkbox__label">Я принимаю условия <a href="">пользовательского соглашения </a> и <a href="">политику конфиденциальности</a></span>
            </label>
          </div>
          <button class="form-excursion__button button button-outline">Записаться</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal micromodal-slide" id="modal-reservation">
  <div class="modal__overlay" data-micromodal-close>
    <div class="modal__container">
      <div class="modal__header">
        <h2 class="modal__title">
          Бронь рабочего места
          в коворкинге
        </h2>
        <button class="modal__close" data-micromodal-close></button>
      </div>

      <div class="modal__content">
        <form action="" class="form form-excursion">
          <input class="input input-field mb-3" type="text" placeholder="Ваше имя">
          <input class="input input-field mb-3" type="tel" placeholder="Номер телефона">
          <input class="input input-field mb-3" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" min="2020-12-02" placeholder="Дата брони">
          <div class="form__policy">
            <label class="checkbox">
              <input type="checkbox">
              <span class="checkbox__mark border-small-br-tl"></span>
              <span class="checkbox__label">Я принимаю условия пользовательского соглашения и политику конфиденциальности</span>
            </label>
          </div>
          <!-- /.policy-wrapper -->
          <button class="form-excursion__button button button-outline">Записаться</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Скрипты -->
<!-- build:js -->
<script src="scripts/libraries/swiper.js"></script>
<script src="scripts/libraries/lazyload.js"></script>
<script src="scripts/libraries/jarallax.js"></script>
<script src="scripts/libraries/fslightbox.js"></script>
<script src="scripts/libraries/aos.js"></script>
<script src="scripts/libraries/micromodal.js"></script>
<script src="scripts/libraries/handorgel.js"></script>

<script src="scripts/slider.js"></script>
<script src="scripts/script.js"></script>
<script src="scripts/common.js"></script>
<!-- endbuild -->