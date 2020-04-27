<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AUTOBRAZZERS</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
  <header>
    <div class="container">
      <div class="header-top-group">
        <div class="logo"><img src="/images/logo.png" alt="Logo autobrazers" /></div>
        <nav>
          <ul id="main-menu" class="main-menu">
            <li>
              <button class="menu-button main-menu__menu-button">
                <span class="menu-button__line"></span>
              </button>
              <span id="main-menu__menu">Mеню</span>
              <ul class="main-menu-nested">
                <li><a href="#calculator" class="main-menu-nested__link">калькулятор растаможки</a></li>
                <li><a href="#" class="main-menu-nested__link">примеры ценообразования</a></li>
                <li><a href="#" class="main-menu-nested__link">последовательность</a></li>
                <li><a href="#" class="main-menu-nested__link">услуги</a></li>
                <li><a href="#" class="main-menu-nested__link">подбор авто</a></li>
                <li><a href="#" class="main-menu-nested__link">отзывы</a></li>
                <li><a href="#" class="main-menu-nested__link">контакты</a></li>
                <?php include 'sections_include/main_menu_li.php'; ?>
              </ul>
            </li>
            <li><a href="#" class="main-menu__link main-menu_link-light">Новости</a></li>
            <li><a href="tel:+380970770975" class="main-menu__link main-menu_link-light">
                <img src="/icons/menu_icons/telephone.svg" alt="telephone icon" class="main-menu_tel-img" />
                <span class="main-menu__tel">+38 (097) 077 09 75</span>
              </a>
            </li>
            <li>
              <div class="dropdown">
                <div class="dropdown__btn">Рус</div>
                <div class="dropdown__content">
                  <a href="#" class="dropdown__link" data-value="Рус">Рус</a>
                  <a href="#" class="dropdown__link" data-value="Eng">Eng</a>
                </div>
              </div>
            </li>
            <li><a href="#" class="main-menu__link main-menu_link-follow">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 22.5" style="enable-background:new 0 0 20 22.5;" xml:space="preserve" fill="#f7c935" width="20" height="22.5">
                  <g>
                    <path d="M8,11.3c3,0,5.6-2.6,5.6-5.6C13.7,2.5,11.1,0,8,0C5,0,2.4,2.6,2.4,5.6C2.4,8.7,5,11.3,8,11.3z M3.9,5.6
		                    c0-2.2,1.9-4.1,4.1-4.1c2.3,0,4.1,1.9,4.1,4.1c0,2.3-1.9,4.1-4.1,4.1C5.8,9.8,3.9,7.9,3.9,5.6z" />
                    <path d="M8,14.2c-4.4,0-8,3.6-8,8v0.3h1.5v-0.3c0-3.6,2.9-6.6,6.6-6.6c0.8,0,1.5,0.1,2,0.4l0.3,0.2v-1.6l-0.2-0.1
		                    C9.6,14.3,8.8,14.2,8,14.2z" />
                    <polygon points="19.1,16.6 15.2,20.5 12.8,18.2 11.8,19.2 15.2,22.6 15.9,21.7 20.1,17.6 	" />
                  </g>
                </svg>

              </a>
            </li>
            <li><a class="button button__login-link main-menu__link main-menu_link-light" href="#">Войти
                <img src="/icons/menu_icons/locked.svg" alt="Login icon" class="button__login-img" />
              </a></li>
          </ul>
        </nav>
      </div>
      <div class="header-group">
        <div class="main-text">
          <h1>Сервис доставки авто из США</h1>
          <span class="main-text__subtitle">Покупайте автомобили выгодно вместе с нами</span>
          <p class="main-text__ad">
            Мы сделали доставку доступной и понятной каждому! Наш сервис
            Предоставляет прозрачную систему покупки автомобиля с аукционов США
            Copart, IAAI, Manheim
          </p>
        </div>
        <div class="ico-social-header">
          <?php include 'sections_include/svg_social_icons.php'; ?>
        </div>
      </div>
      <div class="order-block">
        <div class="order-block__group">
          <p class="order-block__consult-text">
            Укажите ваш номер телефона и получите полную, квалифицированную
            консультацию <strong>Бесплатно</strong></p>
          <form action="#" class="form consult__form">
            <input type="tel" class="input form__order-tel" name="tel_order" placeholder="+38 (0__) ___ __ __" />
            <input type="submit" class="button form__order-call" value="Заказать" />
          </form>
        </div>
      </div>
    </div>
    <div class="header-line"></div>
  </header>
  <main>
    <div class="calculator" id="calculator">
      <h2>КАЛЬКУЛЯТОР РАСТАМОЖКИ АВТО ИЗ США</h2>
      <div class="car-type">
        <img src="/images/moto.png" alt="Тип мото">
        <a href="">Мото</a>
      </div>
      <div class="car-type">
        <img src="/images/aston_martin_car_branding_mockup_free_psd.png" alt="Тип легковые">
        <a href="">Легковые</a>
      </div>
      <div class="car-type">
        <img src="/images/tesla_branding.jpg" alt="Тип електро">
        <a href="">Електро</a>
      </div>
      <div class="car-type">
        <img src="/images/pickup_mock_up_01.png" alt="Тип пикап">
        <a href="">Пикап</a>
      </div>
      <div class="calculation">
        <div id="scan-for-calc">
          <input type="text" placeholder="Вставте ссылку из Copart, IAAI, Manhelm" class="scan">
          <button type="button" class="scan">Сканировать</button>
        </div>
        <div id=calculate-form>
          <form>

            <input type="submit" name="generate_pdf" value="CГЕНЕРИРОВАТЬ В PDF">
          </form>
        </div>
      </div>
    </div>
    <div class="benefits">
      <h2>ПРИМЕРЫ ЦЕНООБРАЗОВАНИЯ И ВЫГОДЫ АВТО ИЗ ШТАТОВ</h2>
    </div>
    <div class="sequence-work">
      <h2>ПОСЛЕДОВАТЕЛЬНОСТЬ НАШЕЙ РАБОТЫ</h2>
      <div class="work">
        <img src="icons/our-work-proccess/auto.svg" alt="Подбор" />
        <span>Подбор авто</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/search.svg" alt="Проверка в базах" />
        <span>Проверка в $ базах</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/auk.svg" alt="Аукцион" />
        <span>Выкуп с аукциона</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/car.svg" alt="Страховка" />
        <span>Страховка</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/uploading.svg" alt="Погрузка" />
        <span>Погрузка</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/ship.svg" alt="Отправка" />
        <span>Отправка</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/bill.svg" alt="Растаможка" />
        <span>Растаможка</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/delivery.svg" alt="Доставка" />
        <span>Доставка</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/spare_parts.svg" alt="Запчасти" />
        <span>Запчасти</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/repair.svg" alt="Ремонт" />
        <span>Ремонт</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/certificate.svg" alt="Сертификация" />
        <span>Сертификация</span>
      </div>
      <div class="work">
        <img src="icons/our-work-proccess/car ready.svg" alt="Готово" />
        <span>Ваше авто готово</span>
      </div>
    </div>
    <div class="tariff-scale">
      <h2>ТАРИФНАЯ СЕТКА НА УСЛУГИ</h2>
      <div class="rate">
        <h3>Максимальный</h3>
        <div class="rate-body">
          <strong>$ 1000</strong>
          <p>Заказывая данный пакет услуг вы получаете такие возможности:</p>
          <ol>
            <li>Анализ внутреннего авторынка Украины и США.</li>
            <li>Индивидуальный подбор авто на аукционах США.</li>
            <li>
              Предварительную смету цены авто на номерах в Украине, детально
              прописанную по пунктах.
            </li>
            <li>Возможность следить за торгами на аукционах.</li>
            <li>Максимальная скидка на аукционный сбор.</li>
            <li>
              Опытные логистические компании и качественные услуги упаковки
              авто в контейнер.
            </li>
            <li>
              Доступ в личный кабинет покупателя с помощью, которого
              вам будет
              понятно и легко с нами взаимодействовать.
            </li>
            <li>Прозрачная система оплаты.</li>
            <li>Подбор автозапчастей.</li>
            <li>Услуги по ремонту авто.</li>
            <li>Прохождение сертификации.</li>
          </ol>
          <a href="#" class="rate-order">Заказать</a>
        </div>
      </div>
      <div class="rate">
        <h3>Двойной</h3>
        <div class="rate-body">
          <strong>$ 500</strong>
          <p>
            Заказав сразу несколько автомобилей вы получаете скидку 50% на
            пакет Максимальный.
          </p>
          <a href="#" class="rate-order">Заказать</a>
        </div>
      </div>
      <div class="rate">
        <h3>Партнерский</h3>
        <div class="rate-body">
          <a href="#" class="rate-order">Заказать</a>
        </div>
      </div>
    </div>
    <div class="selection-cars">
      <h2>ПОДБОР АВТО ИЗ США</h2>
    </div>
    <div class="reviews">
      <h2>ОТЗЫВЫ</h2>
      <h3>Ричард Ройтман</h3>
      <p>
        Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
        officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
        unde omnis iste natus error sitire voluptatem accusant doloremque
        laudantium, totamie rem aperiam, eaque ipsa quae.
      </p>
    </div>
    <div class="contacts">
      <h2>КОНТАКТЫ</h2>
    </div>
    <div class="order-block" id="bottom-order">
      <h3>Закажите обратный звонок</h3>
      <p>
        Начните работу с нами и уже через 30-40 дней получите ваше авто из США
      </p>
    </div>
  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer-group">
        <div class="logo"><img src="/images/logo.png" alt="Logo autobrazers" /></div>
        <nav>
          <ul class="main-menu menu__footer">
            <li><a href="#" class="main-menu__link main-menu_link-light">Главная</a></li>
            <li><a href="#" class="main-menu__link main-menu_link-light">Новости</a></li>
            <li><a href="tel:+380970770975" class="main-menu__link main-menu_link-light">
                <img src="/icons/menu_icons/telephone.svg" alt="telephone icon" class="main-menu_tel-img" />
                <span class="main-menu__tel">+38 (097) 077 09 75</span>
              </a>
            </li>
            <li>
              <div class="dropdown">
                <div class="dropdown__btn">Рус</div>
                <div class="dropdown__content">
                  <a href="#" class="dropdown__link" data-value="Рус">Рус</a>
                  <a href="#" class="dropdown__link" data-value="Eng">Eng</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="social-footer">
          <?php include 'sections_include/svg_social_icons.php'; ?>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>