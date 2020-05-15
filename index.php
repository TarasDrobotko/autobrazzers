<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AUTOBRAZZERS</title>
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <link rel="stylesheet" href="css/slick.css" type="text/css" />
  <link rel="stylesheet" href="css/slick-theme.css" type="text/css" />
  <link rel="stylesheet" href="css/ion.rangeSlider.css" type="text/css" />
  <link rel="stylesheet" href="css/select2.min.css" type="text/css" />
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
            <li><a class="button__login-link main-menu__link main-menu_link-light" href="#">Войти
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
    <section class="calculator" id="calculator">
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
    </section>
    <section class="benefits">
      <div class="container">
        <h2>ПРИМЕРЫ ЦЕНООБРАЗОВАНИЯ И ВЫГОДЫ АВТО ИЗ ШТАТОВ</h2>
        <div class="benefits-items">
          <div class="benefits-item-wrap">
            <div class="benefits-top-item">
              <div class="benefits-top-item__img">
                <img src="images/mazda_3.png" alt="Mazda 3">
              </div>
              <div class="benefits-top-item__floor"></div>
            </div>
            <div class="benefits-item">
              <div class="benefits-item__header">
                <h3>Mazda 3 <span>2013</span></h3>
              </div>
              <div class="benefits-item__body">
                <div class="benefits-item__price-top">
                  <span class="benefits-item__price-descr">Цена в США</span>
                  <span class="benefits-item__price"><sub>$</sub>1 500</span>
                </div>
                <div class=" benefits-item__table">
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Сбор аукцион</span>
                    <span class="benefits-item__price"><sub>$</sub>437</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Доставка</span>
                    <span class="benefits-item__price"><sub>$</sub>1 400</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Растаможка</span>
                    <span class="benefits-item__price"><sub>$</sub>1 718</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Порт Одесса</span>
                    <span class="benefits-item__price"><sub>$</sub>950</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Ремонт</span>
                    <span class="benefits-item__price"><sub>$</sub>1 000</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Сертификат</span>
                    <span class="benefits-item__price"><sub>$</sub>300</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">МРЭО</span>
                    <span class="benefits-item__price"><sub>$</sub>100</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Услуги</span>
                    <span class="benefits-item__price"><sub>$</sub>1 000</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Под ключ в Украине</span>
                    <span class="benefits-item__price"><sub>$</sub>9 005</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Средняя цена auto.ria</span>
                    <span class="benefits-item__price"><sub>$</sub>11 500</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="benefits-item-wrap">
            <div class="benefits-top-item">
              <div class="benefits-top-item__img">
                <img src="images/tesla_model_s.png" alt="BMW 535I">
              </div>
              <div class="benefits-top-item__floor"></div>
            </div>
            <div class="benefits-item">
              <div class="benefits-item__header">
                <h3>BMW 5351 <span>2014</span></h3>
              </div>
              <div class="benefits-item__body">
                <div class="benefits-item__price-top">
                  <span class="benefits-item__price-descr">Цена в США</span>
                  <span class="benefits-item__price"><sub>$</sub>9 000</span>
                </div>
                <div class="benefits-item__table">
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Сбор аукцион</span>
                    <span class="benefits-item__price"><sub>$</sub>725</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Доставка</span>
                    <span class="benefits-item__price"><sub>$</sub>1 400</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Растаможка</span>
                    <span class="benefits-item__price"><sub>$</sub>4 487</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Порт Одесса</span>
                    <span class="benefits-item__price"><sub>$</sub>950</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Ремонт</span>
                    <span class="benefits-item__price"><sub>$</sub>3 000</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Сертификат</span>
                    <span class="benefits-item__price"><sub>$</sub>300</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">МРЭО</span>
                    <span class="benefits-item__price"><sub>$</sub>445</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Услуги</span>
                    <span class="benefits-item__price"><sub>$</sub>1 000</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Под ключ в Украине</span>
                    <span class="benefits-item__price"><sub>$</sub>20 862</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Средняя цена auto.ria</span>
                    <span class="benefits-item__price"><sub>$</sub>28 000</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="benefits-item-wrap">
            <div class="benefits-top-item">
              <div class="benefits-top-item__img">
                <img src="images/tiguan_2014.png" alt="VW Tiguan">
              </div>
              <div class="benefits-top-item__floor"></div>
            </div>
            <div class="benefits-item">
              <div class="benefits-item__header">
                <h3>VW Tiguan <span>2016</span>
                </h3>
              </div>
              <div class="benefits-item__body">
                <div class="benefits-item__price-top">
                  <span class="benefits-item__price-descr">Цена в США</span>
                  <span class="benefits-item__price"><sub>$</sub>4 800</span>
                </div>
                <div class="benefits-item__table">
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Сбор аукцион</span>
                    <span class="benefits-item__price"><sub>$</sub>635</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Доставка</span>
                    <span class="benefits-item__price"><sub>$</sub>1 400</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Растаможка</span>
                    <span class="benefits-item__price"><sub>$</sub>2 421</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Порт Одесса</span>
                    <span class="benefits-item__price"><sub>$</sub>950</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Ремонт</span>
                    <span class="benefits-item__price"><sub>$</sub>2 800</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Сертификат</span>
                    <span class="benefits-item__price"><sub>$</sub>300</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">МРЭО</span>
                    <span class="benefits-item__price"><sub>$</sub>100</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Услуги</span>
                    <span class="benefits-item__price"><sub>$</sub>1 000</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Под ключ в Украине</span>
                    <span class="benefits-item__price"><sub>$</sub>14 406</span></div>
                  <div class="benefits-item__table-item benefits-item_table">
                    <span class="benefits-item__price-descr">Средняя цена auto.ria</span>
                    <span class="benefits-item__price"><sub>$</sub>18 000</span></div>
                </div>
              </div>
            </div>
          </div>
          <?php include 'sections_include/benefits_items.php'; ?>
        </div>
      </div>
      </div>
    </section>
    <section class="sequence-work">
      <div class="container">
        <h2>ПОСЛЕДОВАТЕЛЬНОСТЬ НАШЕЙ РАБОТЫ</h2>
        <div class="sequence-work-wrap">
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/auto.svg" alt="Подбор" />
            <span class="sequence-work__item-title">Подбор авто</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/search.svg" alt="Проверка в базах" />
            <span class="sequence-work__item-title">Проверка в $ базах</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/auk.svg" alt="Аукцион" />
            <span class="sequence-work__item-title">Выкуп с аукциона</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/car.svg" alt="Страховка" />
            <span class="sequence-work__item-title">Страховка</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/uploading.svg" alt="Погрузка" />
            <span class="sequence-work__item-title">Погрузка</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/ship.svg" alt="Отправка" />
            <span class="sequence-work__item-title">Отправка</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/bill.svg" alt="Растаможка" />
            <span class="sequence-work__item-title">Растаможка</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/delivery.svg" alt="Доставка" />
            <span class="sequence-work__item-title">Доставка</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/spare_parts.svg" alt="Запчасти" />
            <span class="sequence-work__item-title">Запчасти</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/repair.svg" alt="Ремонт" />
            <span class="sequence-work__item-title">Ремонт</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/certificate.svg" alt="Сертификация" />
            <span class="sequence-work__item-title">Сертификация</span>
          </div>
          <div class="sequence-work__item">
            <img src="icons/our-work-proccess/car ready.svg" alt="Готово" />
            <span class="sequence-work__item-title">Ваше авто готово</span>
          </div>
        </div>
      </div>
    </section>
    <section class="rate">
      <div class="container">
        <h2>ТАРИФНАЯ СЕТКА НА УСЛУГИ</h2>
        <div class="rate-wrapper">
          <div class="rate-item">
            <h3>Максимальный</h3>
            <div class="rate-item__body">
              <div class="rate-item__price">
                <strong class="rate-item__dollars"><sup>$</sup> 1000</strong>
              </div>
              <div class="rate-item__slide-show">
                <div class="rate-item__check-block"></div>
                <div class="rate-item__semicircle"></div>
              </div>
              <div class="rate-item__panel">
                <p class="rate-item__capabilities-intro">Заказывая данный пакет услуг<br> вы получаете такие возможности:</p>
                <ol class="rate-item__capabilities">
                  <li><span>Анализ внутреннего авторынка Украины и США.</span></li>
                  <li><span>Индивидуальный подбор авто на аукционах США.</span></li>
                  <li>
                    <span>Предварительную смету цены авто на номерах в Украине, детально
                      прописанную по пунктах.</span>
                  </li>
                  <li><span>Возможность следить за торгами на аукционах.</span></li>
                  <li><span>Максимальная скидка на аукционный сбор.</span></li>
                  <li>
                    <span>Опытные логистические компании и качественные услуги упаковки
                      авто в контейнер.</span>
                  </li>
                  <li>
                    <span>Доступ в личный кабинет покупателя с помощью, которого
                      вам будет
                      понятно и легко с нами взаимодействовать.</span>
                  </li>
                  <li><span>Прозрачная система оплаты.</span></li>
                  <li><span>Подбор автозапчастей.</span></li>
                  <li><span>Услуги по ремонту авто.</span></li>
                  <li><span>Прохождение сертификации.</span></li>
                </ol>
              </div>
              <div class="rate-item__btn-wrap">
                <a href="#" class="button rate-item__btn">Заказать</a>
              </div>
            </div>
          </div>
          <div class="rate-item">
            <h3>Двойной</h3>
            <div class="rate-item__body">
              <div class="rate-item__price">
                <strong class="rate-item__dollars"><sup>$</sup> 500</strong>
              </div>
              <div class="rate-item__slide-show" id="slide-show">
                <div class="rate-item__check-block"></div>
                <div class="rate-item__semicircle"></div>
              </div>
              <div class="rate-item__panel">
                <p class="rate-item__panel-offer">
                  Заказав сразу несколько<br> автомобилей вы получаете скидку 50%<br> на
                  пакет Максимальный.</p>
              </div>
              <div class="rate-item__btn-wrap">
                <a href="#" class="button rate-item__btn">Заказать</a>
              </div>
            </div>
          </div>
          <div class="rate-item">
            <h3>Партнерский</h3>
            <div class="rate-item__body">
              <div class="rate-item__price">
                <strong>Цена индивидуально</strong>
              </div>
              <div class="rate-item__slide-show">
                <div class="rate-item__check-block"></div>
                <div class="rate-item__semicircle"></div>
              </div>
              <div class="rate-item__btn-wrap">
                <a href="#" class=" button rate-item__btn">Заказать</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="selection-cars">
      <div class="container">
        <h2>ПОДБОР АВТО ИЗ США</h2>
        <div class="cars">
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/moto.png" alt="Мотоцикл" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Мото
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/snowflake.png" alt="Седан" class="cars-item__img">
            <div class="cars-item__floor" id="car-id"></div>
            <div class="cars-item__descr">
              <strong>
                Седан
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/luxury_white_pearl.png" alt="Купе" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Купе
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/tesla_branding_123.png" alt="Электрокар" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Электрокар
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/suv.png" alt="Внедорожник" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Внедорожник
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/picap.png" alt="Пикап" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Пикап
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/miniven.png" alt="Минивэн" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Минивэн
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__switch"><img src="/images/switch.png" alt="Значок переключателя"></div>
            <img src="/images/sprinter_worker.png" alt="Mercedes-Benz Sprinter Worker" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Бус
              </strong>
            </div>
          </div>
        </div>
        <div class="order-by-year">
          <form action="" class="order-by-year__form">
            <input type="hidden" name="car_type" value="" class="order-by-year__hidden-input" />
            <input type="tel" class="input order-by-year__order-tel" name="tel_order" placeholder="+38 (0__) ___ __ __" id="order-by-year__order-tel" />
            <select class="price-select" id="price-select-id" name="selected_price">
              <option value="8000-10000">(8000$-10000$)</option>
              <option value="10000-13000">(10000$-13000$)</option>
              <option value="13000-17000">(13000$-17000$)</option>
            </select>
            <div class="order-by-year__range-group">
              <div class="order-by-year__range-title">
                <span>Год:</span> (2000-2019)
              </div>
              <input type="range" min="2000" max="2019" step="1" value="2005" class="order-by-year__range">
            </div>
            <div class="order-by-year_break"></div>
            <input type="submit" class="button order-by-year__order-call" value="Заказать" />
        </div>
      </div>
    </section>
    <section class="reviews">
      <h2>ОТЗЫВЫ</h2>
      <div class="container">
        <div class="reviews-items">
          <div class="reviews-item">
            <div class="reviews-item__circle-dark">
              <div class="reviews-item__circle">
                <img src="/images/roitman.png" alt="Ричард Ройтман" class="reviews-item__profile-img">
              </div>
            </div>
            <h3>Ричард Ройтман</h3>
            <p class="reviews-item__text">
              Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
              officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
              unde omnis iste natus error sitire voluptatem accusant doloremque
              laudantium, totamie rem aperiam.
            </p>
            <img src='/images/‘‘.png' alt="Лапки цитаты" class="reviews-item__img">
          </div>
          <div class="reviews-item">
            <div class="reviews-item__circle-dark">
              <div class="reviews-item__circle">
                <img src="/images/roitman.png" alt="Ричард Ройтман" class="reviews-item__profile-img">
              </div>
            </div>
            <h3>Ричард Ройтман</h3>
            <p class="reviews-item__text">
              Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
              officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
              unde omnis iste natus error sitire voluptatem accusant doloremque
              laudantium, totamie rem aperiam.
            </p>
            <img src='/images/‘‘.png' alt="Лапки цитаты" class="reviews-item__img">
          </div>
          <div class="reviews-item">
            <div class="reviews-item__circle-dark">
              <div class="reviews-item__circle">
                <img src="/images/roitman.png" alt="Ричард Ройтман" class="reviews-item__profile-img">
              </div>
            </div>
            <h3>Ричард Ройтман</h3>
            <p class="reviews-item__text">
              Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
              officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
              unde omnis iste natus error sitire voluptatem accusant doloremque
              laudantium, totamie rem aperiam.
            </p>
            <img src='/images/‘‘.png' alt="Лапки цитаты" class="reviews-item__img">
          </div>
          <div class="reviews-item">
            <div class="reviews-item__circle-dark">
              <div class="reviews-item__circle">
                <img src="/images/roitman.png" alt="Ричард Ройтман" class="reviews-item__profile-img">
              </div>
            </div>
            <h3>Ричард Ройтман</h3>
            <p class="reviews-item__text">
              Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
              officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
              unde omnis iste natus error sitire voluptatem accusant doloremque
              laudantium, totamie rem aperiam.
            </p>
            <img src='/images/‘‘.png' alt="Лапки цитаты" class="reviews-item__img">
          </div>
          <div class="reviews-item">
            <div class="reviews-item__circle-dark">
              <div class="reviews-item__circle">
                <img src="/images/roitman.png" alt="Ричард Ройтман" class="reviews-item__profile-img">
              </div>
            </div>
            <h3>Ричард Ройтман</h3>
            <p class="reviews-item__text">
              Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
              officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
              unde omnis iste natus error sitire voluptatem accusant doloremque
              laudantium, totamie rem aperiam.
            </p>
            <img src='/images/‘‘.png' alt="Лапки цитаты" class="reviews-item__img">
          </div>
          <div class="reviews-item">
            <div class="reviews-item__circle-dark">
              <div class="reviews-item__circle">
                <img src="/images/roitman.png" alt="Ричард Ройтман" class="reviews-item__profile-img">
              </div>
            </div>
            <h3>Ричард Ройтман</h3>
            <p class="reviews-item__text">
              Excepteur sint occaecat cupidatat non proident, sunt insides culpa qui
              officia deserunt mollit anim id eston laborum. Sed ut perspiciatis
              unde omnis iste natus error sitire voluptatem accusant doloremque
              laudantium, totamie rem aperiam.
            </p>
            <img src='/images/‘‘.png' alt="Лапки цитаты" class="reviews-item__img">
          </div>
        </div>
      </div>
    </section>
    <section class="contacts">
      <h2>КОНТАКТЫ</h2>
      <!--The div element for the map -->
      <div id="map">
      </div>
      <div class="container contacts__container">
        <div class="contacts-block">
          <h3>Наши контакты</h3>
          <div class="contacts-items">
            <div class="contacts-tel">
              <a href="tel:+380970770975" class="contacts__link contacts_link-light">
                <img src="/icons/menu_icons/telephone.svg" alt="telephone icon" class="contacts_tel-img" />
                <span class="contacts__tel">+38 (097) 077 09 75</span>
            </div>
            <div class="contacts-address">
              <a href="https://goo.gl/maps/5pjgVMF2cArS1PiRA" class="contacts__link contacts_link-light">
                <img src="../images/marker.png" alt="marker icon"><span class="contacts__address">м. Київ, вул. Сверстюка 19,
                  10 поверх, офіс 13</span></a></div>
          </div>
          <div class="contacts-social">
            <?php include 'sections_include/svg_social_icons.php'; ?>
          </div>
        </div>
      </div>
      <div class="contacts-bottom">
        <div class="container">
          <div class="order-block" id="bottom-order">
            <div class="order-block__group">
              <h3>Закажите обратный звонок</h3>
              <p class="order-block__consult-text">
                Начните работу с нами и уже через 30-40 дней получите ваше авто из США</p>
              <form action="#" class="form consult__form">
                <input type="tel" class="input form__order-tel" name="tel_order" placeholder="+38 (0__) ___ __ __" />
                <input type="submit" class="button form__order-call" value="Заказать" />
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
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

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/ion.rangeSlider.min.js"></script>
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/select2.min.js"></script>
  <script src="js/google_map.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLRztqwLiL4BxTlvoHO8PBcIx_1Yo7YaA&callback=initMap">
  </script>
</body>

</html>