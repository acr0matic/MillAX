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

      <div id="mobile-menu" class="mobile-menu">
        <div class="mobile-menu__container">
          <ul class="mobile-menu__nav">
            <li class="mobile-menu__item">
              <a href="index.php" class="mobile-menu__link">Главная</a>
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
    </div>
    <!-- /.header-top -->

    <div class="header-bottom">
      <!-- Задний фон для выпадающего меню -->
    </div>
    <!-- /.header-bottom -->
  </header>