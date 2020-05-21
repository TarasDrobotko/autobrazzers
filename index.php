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
                <div class="dropdown__content" id="dropd">
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
          <form action="#" class="form consult__form" method="post">
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
      <div class="container">
        <h2>КАЛЬКУЛЯТОР РАСТАМОЖКИ АВТО ИЗ США</h2>
        <form action="#" class="calculator-form" method="post">
          <div class="car-type-wrap">
            <div class="car-type-item">
              <input type="radio" value="Мото" class="car-type-item_radio" id="car-type-item_1">
              <img src="/images/moto-ab.png" alt="Тип мото">
              <label for="car-type-item_1" class="car-type-item__label">Мото</label>
            </div>
            <div class=" car-type-item">
              <input type="radio" value="Легковые" class="car-type-item_radio" id="car-type-item_2">
              <img src="/images/aston_martin_car_branding_mockup_free_psd.png" alt="Тип легковые">
              <label for="car-type-item_2" class="car-type-item__label">Легковые</label>
            </div>
            <div class="car-type-item">
              <input type="radio" value="Електро" class="car-type-item_radio" id="car-type-item_3">
              <div class="car-type-item__battery">
                <img src="/icons/selection_cars/battery.png" alt="Переключатель">
              </div>
              <img src="/images/tesla_branding.png" alt="Тип електро">
              <label for="car-type-item_3" class="car-type-item__label">Електро</label>
            </div>
            <div class="car-type-item">
              <input type="radio" value="Пикап" class="car-type-item_radio" id="car-type-item_4">
              <img src="/images/pickup_mock_up_01.png" alt="Тип пикап">
              <label for="car-type-item_4" class="car-type-item__label">Пикап</label>
            </div>
          </div>
          <div class="calculator-form__main-block">
            <div class="calculator-form__scan">
              <input type="text" placeholder="Вставте ссылку из Copart, IAAI, Manhelm" class="input input_calc">
              <button type="button" class="button button_scan">Сканировать</button>
            </div>
            <div class="calculator-form__columns">
              <div class="calculator-form__columns-left">
                <div class="columns-left-item">
                  <input type="text" placeholder="Цена авто" class="input input_calc">
                  <div class="columns-left-item__icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 33.2 60.7" style="enable-background:new 0 0 33.2 60.7;fill:#727272" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M4.6,8.6C7.1,5.8,10.6,4.5,15,4.4V0h3.2v4.4C22.6,4.7,26,6,28.4,8.3c2.4,2.3,3.6,5.3,3.7,9.1h-5.8
			c-0.2-1.7-0.6-3.1-1.4-4.4c-1.4-2.2-3.6-3.4-6.7-3.5v16.2c5.1,1.4,8.6,2.8,10.5,4.1c3,2.1,4.5,5.2,4.5,9.2
			c0,5.9-1.9,10.1-5.8,12.6c-2.1,1.4-5.2,2.3-9.2,2.7v6.5H15v-6.5c-6.5-0.4-10.8-2.7-13.1-6.9C0.6,45.2,0,42.1,0,38.3h5.9
			c0.2,3,0.7,5.3,1.4,6.7c1.4,2.5,4,3.9,7.7,4.2V31.1c-4.8-0.9-8.4-2.4-10.7-4.6c-2.3-2.1-3.4-5.1-3.4-8.9
			C0.9,14.3,2.2,11.3,4.6,8.6z M9.1,22.4c1.5,1.2,3.4,2.1,5.9,2.6V9.4c-2.9,0.1-5,1-6.3,2.7c-1.2,1.7-1.9,3.4-1.9,5.2
			C6.9,19.5,7.7,21.2,9.1,22.4z M26.1,45.2c0.8-1.3,1.1-2.9,1.1-4.6c0-2.8-1-4.9-3.1-6.3c-1.2-0.8-3.2-1.6-5.9-2.4v17.5
			C22,49.2,24.6,47.8,26.1,45.2z" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="columns-left-item"><input type="text" placeholder="Объем двигателя" class="input input_calc">
                  <div class="columns-left-item__icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 452.3 318.9" style="enable-background:new 0 0 452.3 318.9;fill:#727272" xml:space="preserve">
                      <path d="M405,94.9c-5,0-9,4-9,9v53.4h-18.3v-45.1c0-5-4-9-9-9H327l-7.8-25.9c-1.1-3.8-4.6-6.4-8.6-6.4H247V48h40c5,0,9-4,9-9V9
	c0-5-4-9-9-9h-129c-5,0-9,4-9,9v30c0,5,4,9,9,9h40v22.8h-92.7c-3.3,0-6.3,1.8-7.9,4.7l-15,27.6H47.2c-5,0-9,4-9,9v45.1H18V92.9
	c0-5-4-9-9-9s-9,4-9,9v186c0,5,4,9,9,9s9-4,9-9v-64.3h20.2v47.6c0,5,4,9,9,9h74.9l34.3,44.2c1.7,2.2,4.3,3.5,7.1,3.5h205.2
	c5,0,9-4,9-9v-95.3H396V268c0,5,4,9,9,9c26,0,47.2-21.2,47.2-47.2v-87.7C452.3,116.1,431.1,94.9,405,94.9z M18,196.6v-21.3h20.2
	v21.3H18z M167.1,18h111v12h-111V18z M216.1,48H229v22.8h-12.9V48z M56.2,121.2h6.4v132.1h-6.4V121.2z M133.7,256.7
	c-1.7-2.2-4.3-3.5-7.1-3.5h-46V121.2h7.2c3.3,0,6.3-1.8,7.9-4.7l15-27.6h193.1l7.8,25.9c1.1,3.8,4.6,6.4,8.6,6.4h16.2v179.8H167.9
	L133.7,256.7z M359.7,300.9h-5.3V121.2h5.3V300.9z M377.7,196.6v-21.3H396v21.3H377.7z M434.3,229.8c0,13-8.5,24-20.2,27.8V114.3
	c11.7,3.8,20.2,14.8,20.2,27.8V229.8z" />
                    </svg>
                  </div>
                </div>
                <div class="columns-left-item"><input type="text" placeholder="Год выпуска" class="input input_calc">
                  <div class="columns-left-item__icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512; fill:#727272" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M452,40h-24V0h-40v40H124V0H84v40H60C26.9,40,0,66.9,0,100v352c0,33.1,26.9,60,60,60h392c33.1,0,60-26.9,60-60V100
			C512,66.9,485.1,40,452,40z M472,452c0,11-9,20-20,20H60c-11,0-20-9-20-20V188h432V452z M472,148H40v-48c0-11,9-20,20-20h24v40h40
			V80h264v40h40V80h24c11,0,20,9,20,20V148z" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="76" y="230" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="156" y="230" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="236" y="230" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="316" y="230" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="396" y="230" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="76" y="310" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="156" y="310" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="236" y="310" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="316" y="310" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="76" y="390" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="156" y="390" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="236" y="390" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="316" y="390" width="40" height="40" />
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="396" y="310" width="40" height="40" />
                        </g>
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="columns-left-item">
                  <select id="columns-left-select-1" name="select_auction" class="columns-left-item__select">
                    <option value="Аукцион">Аукцион</option>
                    <option value="Другое">Другое</option>
                  </select>
                  <div class="columns-left-item__icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;fill:#727272;" xml:space="preserve">
                      <g>
                        <path d="M322.6,365c5.9,5.9,15.4,5.9,21.2,0l127.3-127.3c5.9-5.9,5.9-15.4,0-21.2l-42.4-42.4c-2.2-2.2-5.2-3.8-8.4-4.2
		c-58-8.7-105.4-53.8-114.6-114.6c-0.4-3-1.9-6.1-4.2-8.4L259,4.4c-5.9-5.9-15.4-5.9-21.2,0L110.5,131.7c-5.9,5.9-5.9,15.4,0,21.2
		l42.4,42.4c2.3,2.3,5.4,3.8,8.4,4.2c0.3,0,17.9,2.8,38.6,12.4L4.4,407.4c-5.9,5.9-5.9,15.4,0,21.2l42.4,42.4
		c5.9,5.9,15.4,5.9,21.2,0l195.5-195.5c9.6,20.7,12.4,38.3,12.4,38.6c0.5,3.3,2.1,6.4,4.2,8.4L322.6,365z M333.2,333.2L312,312
		l106.1-106.1l21.2,21.2L333.2,333.2z M388.9,192.6l-90.2,90.2c-18-53.3-52.6-88-106.1-106.1l90.2-90.2
		C300.9,139.9,335.5,174.6,388.9,192.6z M248.3,36.2l21.2,21.2L163.5,163.5l-21.2-21.2L248.3,36.2z M57.4,439.3l-21.2-21.2
		l190.2-190.2c8,6.1,14.8,12.8,21.2,21.2L57.4,439.3z" />
                        <path d="M467,422H347c-24.8,0-45,20.2-45,45v30c0,8.3,6.7,15,15,15h180c8.3,0,15-6.7,15-15v-30C512,442.2,491.8,422,467,422z
		 M482,482H332v-15c0-8.3,6.7-15,15-15h120c8.3,0,15,6.7,15,15V482z" />
                      </g>
                    </svg>
                  </div>
                </div>
                <div class="columns-left-item">
                  <select id="columns-left-select-2" name="select_insurance" class="columns-left-item__select">
                    <option value="Страховка">Страховка</option>
                    <option value="Нет">Нет</option>
                  </select>
                  <div class="columns-left-item__icon">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 389.7 320.2" style="enable-background:new 0 0 389.7 320.2;fill:#727272;" xml:space="preserve">
                      <path d="M82.2,182.1c-0.5,0.1-1,0.1-1.6,0.1s-1.1,0-1.6-0.1c-21.8-3.9-41.9-15.4-56.3-32.5C8.1,132.3,0,110.4,0,87.8V32.4
	C0,25,4.7,14.7,27.2,7.3C41.6,2.6,60.6,0,80.7,0s39.1,2.6,53.5,7.3c22.5,7.3,27.2,17.7,27.2,25.1c0,0.1,0,0.1,0,0.2v55.2
	c0,22.6-8.1,44.5-22.7,61.8C124.1,166.7,104.1,178.3,82.2,182.1z M143.3,87.8V32.6C141.6,28.4,120.7,18,80.7,18
	C40.6,18,19.8,28.4,18,32.6v55.2c0,37.2,26.3,69.1,62.7,76.3C117.1,156.9,143.3,125,143.3,87.8z M267,277.7c0,5-4,9-9,9h-52
	c-4.1,19.1-21.2,33.5-41.5,33.5c-20.8,0-38.2-15.1-41.8-34.9c-7.2-2.3-13.2-7.1-16.4-13.5c-1.6-3.2-2.4-6.6-2.4-10.2v-60
	c0-5,4-9,9-9s9,4,9,9v60c0,0.7,0.2,1.4,0.5,2.1c0.3,0.6,0.8,1.2,1.4,1.8c5.2-17.5,21.5-30.3,40.7-30.3c20.3,0,37.4,14.4,41.5,33.5
	h52C263,268.7,267,272.7,267,277.7z M189,277.7c0-13.5-11-24.5-24.5-24.5c-13.4,0-24.3,10.9-24.5,24.3c0,0.1,0,0.2,0,0.3
	c0.1,13.4,11,24.3,24.5,24.3C178,302.2,189,291.2,189,277.7z M389.7,242.4v5.8c0,3.8,0,8.1,0,13.4c0,10.8-7.7,20.1-18.7,23.6
	c-3.5,19.9-20.9,35-41.8,35c-23.4,0-42.5-19-42.5-42.5s19-42.5,42.5-42.5c19.1,0,35.4,12.7,40.7,30.2c1.1-1.1,1.8-2.5,1.8-3.9
	c0-5.3,0-9.7,0-13.4v-5.8c0-7.2,0.1-17,0-21.6c-0.1-3.3-0.2-6-0.4-8.3H232.8c-3.2,0-10.8,0-33.9-22.9c-7.1-7-21.1-21.8-23.7-28
	c-1.9-4.6,0.3-9.9,4.9-11.8c4.5-1.9,9.7,0.2,11.7,4.7c1.2,2.2,8.5,11.2,19.2,21.7c13.4,13.3,20.5,17.6,22.4,18.3h127.8
	c-2.9-2.8-6.6-6.1-11.4-10.3c-2.5-2.2-5.2-4.6-8.2-7.3c-2.2-2-4.4-4-6.5-6c-3.1-2.9-6.2-5.9-9.5-8.7c-2.9-2.4-5.7-4.8-8.3-7
	C284,127,275,119.4,246.8,119.4h-62.1c-5,0-9-4-9-9s4-9,9-9h62.1c34.7,0,48.6,11.7,82.1,39.9c2.6,2.2,5.3,4.5,8.2,6.9
	c3.7,3.1,7.1,6.4,10.4,9.5c2.1,2,4.1,3.9,6,5.7c3,2.7,5.6,5,8.1,7.2c21.6,19.1,27.4,24.2,27.9,49.7
	C389.8,225.1,389.7,234.7,389.7,242.4z M353.6,277.6c-0.1-13.4-11-24.4-24.5-24.4s-24.5,11-24.5,24.5s11,24.5,24.5,24.5
	s24.4-11,24.5-24.4C353.6,277.7,353.6,277.7,353.6,277.6z M329.2,268.7L329.2,268.7c-5,0-9,4-9,9s4,9,9,9s9-4,9-9
	S334.2,268.7,329.2,268.7z M149.3,203.4c0,5,4,9,9,9h10.1c5,0,9-4,9-9s-4-9-9-9h-10.1C153.3,194.4,149.3,198.4,149.3,203.4z
	 M164.6,268.7L164.6,268.7c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S169.5,268.7,164.6,268.7z" />
                    </svg>
                  </div>
                </div>
              </div>
              <div class="calculator-form__columns-info">
                <div class="column-info">
                  <input type="hidden" value="100">
                  <div class="column-info__field"><span class="column-info__field-text">Агентские услуги</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>100</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="300">
                  <div class="column-info__field"><span class="column-info__field-text">Акциз</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>300</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="100">
                  <div class="column-info__field"><span class="column-info__field-text"> Доставка по суше </span></div>
                  <div class="column-info__sum"><span><sub>$</sub>100</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="300">
                  <div class="column-info__field"><span class="column-info__field-text">Пошлина</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>300</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="100">
                  <div class="column-info__field"><span class="column-info__field-text">Доставка по морю</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>100</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="300">
                  <div class="column-info__field"><span class="column-info__field-text">НДС</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>300</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="200">
                  <div class="column-info__field"><span class="column-info__field-text">Логистические расходы</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>200</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="500">
                  <div class="column-info__field"><span class="column-info__field-text">Стоянка в евротерминале</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>500</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="200">
                  <div class="column-info__field"><span class="column-info__field-text">Экспедитор Одесса</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>200</span></div>
                </div>
                <div class="column-info">
                  <input type="hidden" value="500">
                  <div class="column-info__field"><span class="column-info__field-text">Страховка авто</span></div>
                  <div class="column-info__sum"><span><sub>$</sub>500</span></div>
                </div>
              </div>
            </div>
            <div class="calculator-form__sum">
              <label for="calculator-form__sum">Общая сумма:</label>
              <input type="text" id="calculator-form__sum" value="" class="input" disabled="disabled">
              <div class="calculator-form__sum-icon"><img src="/icons/icon_calculator/dollar_active.svg" alt="Иконка доллара"></div>
            </div>
            <input type="submit" name="generate_pdf" value="Cгенерировать в pdf" class="button calculator-form_submit">
          </div>
        </form>
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
            <img src="/images/moto.png" alt="Мотоцикл" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Мото
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <img src="/images/snowflake.png" alt="Седан" class="cars-item__img">
            <div class="cars-item__floor" id="car-id"></div>
            <div class="cars-item__descr">
              <strong>
                Седан
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <img src="/images/luxury_white_pearl.png" alt="Купе" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Купе
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <div class="cars-item__battery"><img src="/icons/selection_cars/battery.png" alt="Значок переключателя"></div>
            <img src="/images/tesla_branding_123.png" alt="Электрокар" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Электрокар
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <img src="/images/suv.png" alt="Внедорожник" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Внедорожник
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <img src="/images/picap.png" alt="Пикап" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Пикап
              </strong>
            </div>
          </div>
          <div class="cars-item">
            <img src="/images/miniven.png" alt="Минивэн" class="cars-item__img">
            <div class="cars-item__floor"></div>
            <div class="cars-item__descr">
              <strong>
                Минивэн
              </strong>
            </div>
          </div>
          <div class="cars-item">
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
          </form>
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
                <img src="../icons/map/marker.png" alt="marker icon"><span class="contacts__address">м. Київ, вул. Сверстюка 19,
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
                Начните работу с нами и уже через 30-40 дней получите ваше авто из США
              </p>
              <form action="#" class="form consult__form" method="post">
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
            <li id="dropdown-li">
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