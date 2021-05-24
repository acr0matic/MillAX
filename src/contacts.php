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