<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AUTOBRAZZERS</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet" />
</head>

<body>
  <header>
    <div class="logo"></div>
    <nav>
      <ul id="main-menu">
        <li>
          Mеню
          <ul id="main-menu-nested">
            <li>КАЛЬКУЛЯТОР РАСТАМОЖКИ</li>
            <li>ПРИМЕРЫ ЦЕНООБРАЗОВАНИЯ</li>
            <li>ПОСЛЕДОВАТЕЛЬНОСТЬ</li>

            <li>УСЛУГИ</li>
            <li>ПОДБОР АВТО</li>
            <li>ОТЗЫВЫ</li>
            <li>КОНТАКТЫ</li>
          </ul>
        </li>
        <li>Новости</li>
        <li>+38 (097) 077 09 75</li>
        <li>
          <select>
            <option>РУС</option>
            <option>ENG</option>
          </select>
        </li>
        <li>user follow line</li>
        <li>Войты</li>
      </ul>
    </nav>
    <h1>Сервис доставки авто из США</h1>
    <p>ПОКУПАЙТЕ АВТОМОБИЛИ ВЫГОДНО ВМЕСТЕ С НАМИ</p>
    <p>
      Мы сделали доставку доступной и понятной каждому! Наш сервис
      Предоставляет прозрачную систему покупки автомобиля с аукционов США
      Copart, IAAI, Manheim
    </p>
    <div id="ico-social-header">
      <?php include 'sections_include/svg_social_icons.php'; ?>
    </div>
    <div class="order-block">
      <p>
        Укажите ваш номер телефона и получите полную, квалифицированную
        консультацию <strong>БЕСПЛАТНО</strong>
        <input type="tel" name="tel_order" />
      </p>
    </div>
  </header>
  <main>
    <div class="calculator">
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
  <footer>
    <div class="logo"></div>
    <div id="menu-footer">
      <ul>
        <li>Главная</li>
        <li>Новости</li>
        <li>+38 (097) 077 09 75</li>
        <li>
          <select>
            <option>РУС</option>
            <option>ENG</option>
          </select>
        </li>
      </ul>
    </div>
    <div id="social-footer">
      <?php include 'sections_include/svg_social_icons.php'; ?>
    </div>
  </footer>
</body>

</html>