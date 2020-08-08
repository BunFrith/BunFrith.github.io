<?php /* Template Name: Windows Demo */ ?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/demos/windows/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/demos/windows/css/main.min.css">
    <title>Столичные Окна</title>
  </head>
  <body>
    <div class="burger ml-auto">
        <span class="burger-line"></span>
        <span class="burger-line"></span>
        <span class="burger-line"></span>
    </div>
    <nav id="nav">
      <ul class="menu">
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/about.html" class="menu__link-main">О Компании</a></li>
        <ul class="menu__sub">
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/articles.html" class="menu__link-sub">Новости</a></li>
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/vacancy.html" class="menu__link-sub">Вакансии</a></li>
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/pay.html#guarantee" class="menu__link-sub">Гарантии</a></li>
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/about.html#awards" class="menu__link-sub">Награды</a></li>
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/about.html#works" class="menu__link-sub">Наши работы</a></li>
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/vacancy.html#workers" class="menu__link-sub">Сотрудники</a></li>
          <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/pay.html" class="menu__link-sub">Оплата</a></li>
        </ul>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/services.html" class="menu__link-main">Услуги</a></li>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/reviews.html" class="menu__link-main">Отзывы</a></li>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/stocks.html" class="menu__link-main">Акции</a></li>
        <hr>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/index.html" class="menu__link-main">Окна</a></li>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/balcony.html" class="menu__link-main">Балконы</a></li>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/cottages.html" class="menu__link-main">Коттеджи</a></li>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/contacts.html" class="menu__link-main">Контакты</a></li>
        <li class="menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/articles.html" class="menu__link-main">Статьи</a></li>      
        <hr> 
        <div class="cash">
          <p class="cash__take">Принимаем к оплате</p>
          <div class="cash__types ">
            <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cash-1.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cash-2.png" alt="">
            <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cash-3.png" alt="">
          </div>
        </div>
        <hr>
        <p class="info__city">Нижний Новгород</p>
        <i class="fa fa-phone-alt info__icon"></i><span class="info__phone"> +7(831)216-19-69 </span>
      </ul>
      
    </nav>
    <header>
      <div class="container d-flex">
        <div class="col-lg-3 col-md-2">
          <a href="<?php echo get_template_directory_uri();?>/demos/windows/index.html" class="logo">          
            <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/logo.png" alt="" class="logo__img">
          </a>
        </div>
        <div class="col-lg-9 col-md-11 col-sm-9">
          <div class="info">
            <div class="row d-flex">
              <div class="col-lg-5 col-md-5 col-sm-11" >
                <p class="info__city">Нижний Новгород</p>
              </div>
              <div class="col-lg-5 col-md-5 col-sm-11 ml-lg-auto">
                  <i class="fa fa-phone-alt info__icon"></i><span class="info__phone"> +7(831)216-19-69 </span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <nav>
                <ul class="nav nav-pills main-menu d-flex">
                  <li class="main-menu__item dropdown">
                    <a class="main-menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" href="about.html" aria-expanded="false">О компании</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/articles.html">Новости</a>
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/vacancy.html">Вакансии</a>
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/pay.html#guarantee">Гарантия</a>
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/about.html#awards">Награды</a>
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/about.html#works">Наши работы</a>
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/vacancy.html#workers">Сотрудники</a>
                      <a class="dropdown-item" href="<?php echo get_template_directory_uri();?>/demos/windows/pay.html">Оплата</a>
                    </div>
                  </li>
                  <li class="main-menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/services.html" class="main-menu__link">Услуги</a></li>
                  <li class="main-menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/reviews.html" class="main-menu__link">Отзывы</a></li>
                  <li class="main-menu__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/stocks.html" class="main-menu__link">Акции</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-5 ml-auto cp" data-toggle="modal" data-target="#zamer"><p class="request-info">Приём заявок круглосуточно</p></div>
          </div>
          <div class="row">
            <div class="col-lg-8">
              <nav>
                <ul class="nav nav-pills cat d-flex">
                  <li class="cat__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/okna.html" class="cat__link">Окна</a></li>
                  <li class="cat__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/balcony.html" class="cat__link">Балконы</a></li>
                  <li class="cat__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/cottages.html" class="cat__link">Коттеджи</a></li>
                  <li class="cat__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/contacts.html" class="cat__link">Контакты</a></li>
                  <li class="cat__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/articles.html" class="cat__link">Статьи</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 email-info">info@stolokna.ru</div>
          </div>
          
        </div>
      </div>
    </header>
    <section id="main">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="main">
            <div class="row d-flex flex-column">
              <p class="main__tagline">С нами тепло и уютно</p>
              <h1 class="main__title">Столичные окна</h1>
              <span class="main__descr">Пластиковые и алюминевые окна</br> от производителя</span>
            </div>
            <div class="row d-flex flex-column flex-md-row">
              <button type="button" class="btn btn-primary main__btn" data-toggle="modal" data-target="#zamer">Заказать замер</button>
              <div class="main__info">
                <p>Немецкое качество<img class="main__img" src="<?php echo get_template_directory_uri();?>/demos/windows/img/rehau_logo.png" alt="Rehau"></p>
                <p>Надёжно. Навсегда.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="action">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="row">
            <div class="action d-flex flex-column flex-sm-row">
              <div class="action__item">
                  <i class="fa fa-phone-alt"></i> <span data-toggle="modal" data-target="#call">Обратный звонок</span>
              </div>
              <a href="#price">
                <div class="action__item">
                  <i class="fa fa-calculator"></i> <span>Рассчет стоимости</span>
                </div>
              </a>
              <div class="action__item">
                <i class="fa fa-pencil-ruler"></i> <span data-toggle="modal" data-target="#zamer">Запись на замер</a></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="windows">
      <div class="container">
        <div class="windows">
          <div class="col-lg-10 m-auto">
            <div class="row d-flex flex-column">
              <h2 class="section__title">Пластиковые окна</h2>
              <p class="section__tagline">Готовые комплексные решения для Вашего дома. Выберите свой вариант остекления.</p>
            </div>
            <div class="windows__item d-flex flex-column flex-md-row">
              <div class="windows__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-lite.png" alt="Lite"></div>
              <div class="windows__info">
                <h2 class="windows__name">Лайт</h2>
                <p class="windows__descr">Ничего лишнего: окно для тех, кто ищет бюджетный легкий вариант для квартиры или дачи. Стандартные требования к тепло- и шумоизоляции, привычное открывание, классический сдержанный дизайн.</p>
                <div class="windows__price d-flex">
                  <span class="windows__old">от <s>9 900</s></span>
                  <p class="windows__new">4 821 руб/м<sup>2</sup></p>
                </div>
                <div class="windows__buttons">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer">Заказать замер</button>
                  <button class="btn btn-primary-inverse" data-toggle="modal" data-target="#char-lite">Характеристики</button>                                      
                </div> 
              </div>
            </div>
            <hr>
            <div class="windows__item d-flex flex-column flex-md-row">
              <div class="windows__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-standart.png" alt="Lite"></div>
              <div class="windows__info">
                <h2 class="windows__name">Стандарт</h2>
                <p class="windows__descr">Ничего лишнего: окно для тех, кто ищет бюджетный легкий вариант для квартиры или дачи. Стандартные требования к тепло- и шумоизоляции, привычное открывание, классический сдержанный дизайн.</p>
                <div class="windows__price d-flex">
                  <span class="windows__old">от <s>11 400</s></span>
                  <p class="windows__new">6 253 руб/м<sup>2</sup></p>
                </div>
                <div class="windows__buttons">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer">Заказать замер</button>
                  <button class="btn btn-primary-inverse" data-toggle="modal" data-target="#char-standart">Характеристики</button>                                      
                </div> 
              </div>
            </div>
            <hr>
            <div class="windows__item d-flex flex-column flex-md-row">
              <div class="windows__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-premium.png" alt="Lite"></div>
              <div class="windows__info">
                <h2 class="windows__name">Премиум</h2>
                <p class="windows__descr">Ничего лишнего: окно для тех, кто ищет бюджетный легкий вариант для квартиры или дачи. Стандартные требования к тепло- и шумоизоляции, привычное открывание, классический сдержанный дизайн.</p>
                <div class="windows__price d-flex">
                  <span class="windows__old">от <s>14 700</s></span>
                  <p class="windows__new">7 795 руб/м<sup>2</sup></p>
                </div>
                <div class="windows__buttons">
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer">Заказать замер</button>
                  <button class="btn btn-primary-inverse" data-toggle="modal" data-target="#char-premium">Характеристики</button>                                      
                </div> 
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
    </section>
    <section id="price">
      <div class="container">
        <div class="col-lg-10 col-md-12 col-sm-12 m-auto">
          <div class="row">
            <a name="price"> </a>
            <h2 class="section__title">Цены на наши пластиковые окна</h2>
          </div>
          <div class="row d-flex flex-column">
            <h3 class="section__subtitle">Рассчитать стоимость остекления</h3>
            <p class="section__tagline">Выберите тип конструкции</p>
          </div>
          <div class="row pb-5 m-auto">
            <div class="choose__type d-flex nav nav-tabs" id="myTab" role="tablist">
              <div class="choose__item col-lg-4 col-md-4 col-sm-4 m-sm-auto cp active" id="plastic-tab" data-toggle="tab" href="#plastic" role="tab" aria-controls="plastic" aria-selected="true">
                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/choose-1.png" alt="" class="choose__img">
                <h4 class="choose__title">Пластиковые<br> окна</h4>
              </div>
              <div class="choose__item col-lg-4 col-md-4 col-sm-4 m-sm-auto cp" id="profile-tab" data-toggle="tab" href="#alumini" role="tab" aria-controls="alumini" aria-selected="false">
                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/choose-2.png" alt="" class="choose__img">
                <h4 class="choose__title">Алюминиевые<br> окна</h4>
              </div>
              <div class="choose__item col-lg-4 col-md-4 col-sm-4 m-sm-auto cp" id="contact-tab" data-toggle="tab" href="#balcony" role="tab" aria-controls="balcony" aria-selected="false">
                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/choose-3.png" alt="" class="choose__img">
                <h4 class="choose__title">Остекление<br> балкона</h4>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-lg-12">
              <div class="choose__tab-panel tab-content" id="myTabContent">
                <div class="choose__plastic tab-pane fade show active" id="plastic" role="tabpanel" aria-labelledby="plastic-tab">
                  <div class="row d-flex flex-column">
                    <h3 class="section__subtitle">Наши цены</h3>
                    <p class="section__tagline">Выберите подходящий вариант остекления вашего дома</p>
                  </div>
                  <div class="row">
                    <div class="tab-content" id="myTabContent">
                      <div class="cost d-flex nav nav-tabs" id="myTab" role="tablist">
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp active" id="plastic-lite-tab" data-toggle="tab" href="#plastic-lite" role="tab" aria-controls="plastic-lite" aria-selected="true">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-1.jpg" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Лайт</p>
                            <span class="cost__faq ml-auto cp" data-toggle="modal" data-target="#call"><img src="img/faq.png" alt="faq" class="cost__faq-img"></span>
                          </div>
                        </div>
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp" id="plastic-standart-tab" data-toggle="tab" href="#plastic-standart" role="tab" aria-controls="plastic-standart" aria-selected="false">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-2.png" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Стандарт</p>
                            <span class="cost__faq ml-auto cp" data-toggle="modal" data-target="#call"><img src="img/faq.png" alt="faq" class="cost__faq-img"></span>
                          </div>
                        </div>
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp" id="plastic-premium-tab" data-toggle="tab" href="#plastic-premium" role="tab" aria-controls="plastic-premium" aria-selected="false">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-3.jpg" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Премиум</p>
                            <span class="cost__faq ml-auto cp" data-toggle="modal" data-target="#call"><img src="img/faq.png" alt="faq" class="cost__faq-img"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="tab-content" id="MyTabContent">
                      <div class="choose__plastic tab-pane fade show active" id="plastic-lite" role="tabpanel" aria-labelledby="plastic-lite-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Лайт</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="cplone-tab" data-toggle="tab" href="#cplone" role="tab" aria-controls="cplone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cpltwo-tab" data-toggle="tab" href="#cpltwo" role="tab" aria-controls="cpltwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cplthree-tab" data-toggle="tab" href="#cplthree" role="tab" aria-controls="cplthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cplfour-tab" data-toggle="tab" href="#cplfour" role="tab" aria-controls="cplfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="cplone" role="tabpanel" aria-labelledby="cplone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cpltwo" role="tabpanel" aria-labelledby="cpltwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cplthree" role="tabpanel" aria-labelledby="cplthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cplfour" role="tabpanel" aria-labelledby="cplfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="choose__plastic tab-pane fade" id="plastic-standart" role="tabpanel" aria-labelledby="plastic-standart-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Стандарт</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="cpsone-tab" data-toggle="tab" href="#cpsone" role="tab" aria-controls="cpsone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cpstwo-tab" data-toggle="tab" href="#cpstwo" role="tab" aria-controls="cpstwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cpsthree-tab" data-toggle="tab" href="#cpsthree" role="tab" aria-controls="cpsthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cpsfour-tab" data-toggle="tab" href="#cpsfour" role="tab" aria-controls="cpsfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="cpsone" role="tabpanel" aria-labelledby="cpsone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cpstwo" role="tabpanel" aria-labelledby="cpstwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cpsthree" role="tabpanel" aria-labelledby="choose-num_3-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cpsfour" role="tabpanel" aria-labelledby="cpsfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="choose__plastic tab-pane fade" id="plastic-premium" role="tabpanel" aria-labelledby="plastic-premium-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Премиум</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="cppone-tab" data-toggle="tab" href="#cppone" role="tab" aria-controls="cppone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cpptwo-tab" data-toggle="tab" href="#cpptwo" role="tab" aria-controls="cpptwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cppthree-tab" data-toggle="tab" href="#cppthree" role="tab" aria-controls="cppthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cppfour-tab" data-toggle="tab" href="#cppfour" role="tab" aria-controls="cppfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="cppone" role="tabpanel" aria-labelledby="cppone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cpptwo" role="tabpanel" aria-labelledby="cpptwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cppthree" role="tabpanel" aria-labelledby="cppthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cppfour" role="tabpanel" aria-labelledby="cppfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="choose__alumini tab-pane fade" id="alumini" role="tabpanel" aria-labelledby="alumini-tab">
                  <div class="row d-flex flex-column">
                    <h3 class="section__subtitle">Наши цены</h3>
                    <p class="section__tagline">Выберите подходящий вариант остекления вашего дома</p>
                  </div>
                  <div class="row">
                    <div class="tab-content" id="myTabContent">
                      <div class="cost d-flex nav nav-tabs" id="myTab" role="tablist">
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp active" id="alumini-lite-tab" data-toggle="tab" href="#alumini-lite" role="tab" aria-controls="alumini-lite" aria-selected="true">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-1.jpg" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Лайт</p>
                            <span class="cost__faq ml-auto">?</span>
                          </div>
                        </div>
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp" id="alumini-standart-tab" data-toggle="tab" href="#alumini-standart" role="tab" aria-controls="alumini-standart" aria-selected="false">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-2.png" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Стандарт</p>
                            <span class="cost__faq ml-auto">?</span>
                          </div>
                        </div>
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp" id="alumini-premium-tab" data-toggle="tab" href="#alumini-premium" role="tab" aria-controls="alumini-premium" aria-selected="false">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-3.jpg" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Премиум</p>
                            <span class="cost__faq ml-auto">?</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="tab-content" id="MyTabContent">
                      <div class="choose__alumini tab-pane fade show active" id="alumini-lite" role="tabpanel" aria-labelledby="alumini-lite-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Лайт</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="calone-tab" data-toggle="tab" href="#calone" role="tab" aria-controls="calone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="caltwo-tab" data-toggle="tab" href="#caltwo" role="tab" aria-controls="caltwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="calthree-tab" data-toggle="tab" href="#calthree" role="tab" aria-controls="calthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="calfour-tab" data-toggle="tab" href="#calfour" role="tab" aria-controls="calfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="calone" role="tabpanel" aria-labelledby="calone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="caltwo" role="tabpanel" aria-labelledby="caltwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="calthree" role="tabpanel" aria-labelledby="calthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="calfour" role="tabpanel" aria-labelledby="calfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="choose__alumini tab-pane fade" id="alumini-standart" role="tabpanel" aria-labelledby="alumini-standart-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Стандарт</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="casone-tab" data-toggle="tab" href="#casone" role="tab" aria-controls="casone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="castwo-tab" data-toggle="tab" href="#castwo" role="tab" aria-controls="castwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="casthree-tab" data-toggle="tab" href="#casthree" role="tab" aria-controls="casthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="casfour-tab" data-toggle="tab" href="#casfour" role="tab" aria-controls="casfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="casone" role="tabpanel" aria-labelledby="casone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="castwo" role="tabpanel" aria-labelledby="castwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="casthree" role="tabpanel" aria-labelledby="casthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="casfour" role="tabpanel" aria-labelledby="casfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="choose__alumini tab-pane fade" id="alumini-premium" role="tabpanel" aria-labelledby="alumini-premium-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Премиум</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="capone-tab" data-toggle="tab" href="#capone" role="tab" aria-controls="capone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="captwo-tab" data-toggle="tab" href="#captwo" role="tab" aria-controls="captwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="capthree-tab" data-toggle="tab" href="#capthree" role="tab" aria-controls="capthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="capfour-tab" data-toggle="tab" href="#capfour" role="tab" aria-controls="capfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="capone" role="tabpanel" aria-labelledby="capone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="captwo" role="tabpanel" aria-labelledby="captwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="capthree" role="tabpanel" aria-labelledby="capthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="capfour" role="tabpanel" aria-labelledby="capfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-10 col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-sm-row flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="choose__balcony tab-pane fade" id="balcony" role="tabpanel" aria-labelledby="balcony-tab">
                  <div class="row d-flex flex-column">
                    <h3 class="section__subtitle">Наши цены</h3>
                    <p class="section__tagline">Выберите подходящий вариант остекления вашего дома</p>
                  </div>
                  <div class="row">
                    <div class="tab-content" id="myTabContent">
                      <div class="cost d-flex nav nav-tabs" id="myTab" role="tablist">
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp active" id="balcony-lite-tab" data-toggle="tab" href="#balcony-lite" role="tab" aria-controls="balcony-lite" aria-selected="true">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-1.jpg" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Лайт</p>
                            <span class="cost__faq ml-auto">?</span>
                          </div>
                        </div>
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp" id="balcony-standart-tab" data-toggle="tab" href="#balcony-standart" role="tab" aria-controls="balcony-standart" aria-selected="false">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-2.png" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Стандарт</p>
                            <span class="cost__faq ml-auto">?</span>
                          </div>
                        </div>
                        <div class="cost__item col-lg-4 col-md-4 col-sm-4 cp" id="balcony-premium-tab" data-toggle="tab" href="#balcony-premium" role="tab" aria-controls="balcony-premium" aria-selected="false">
                          <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cost-3.jpg" alt="" class="cost__img">
                          <div class="cost__type d-flex">
                            <p class="cost__title">Премиум</p>
                            <span class="cost__faq ml-auto">?</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="tab-content" id="MyTabContent">
                      <div class="choose__balcony tab-pane fade show active" id="balcony-lite" role="tabpanel" aria-labelledby="balcony-lite-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Лайт</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num nav-tabs d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="cblone-tab" data-toggle="tab" href="#cblone" role="tab" aria-controls="cblone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbltwo-tab" data-toggle="tab" href="#cbltwo" role="tab" aria-controls="cbltwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cblthree-tab" data-toggle="tab" href="#cblthree" role="tab" aria-controls="cblthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cblfour-tab" data-toggle="tab" href="#cblfour" role="tab" aria-controls="cblfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="cblone" role="tabpanel" aria-labelledby="cblone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbltwo" role="tabpanel" aria-labelledby="cbltwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cblthree" role="tabpanel" aria-labelledby="cblthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cblfour" role="tabpanel" aria-labelledby="cblfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="choose__balcony tab-pane fade" id="balcony-standart" role="tabpanel" aria-labelledby="balcony-standart-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Стандарт</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="cbsone-tab" data-toggle="tab" href="#cbsone" role="tab" aria-controls="cbsone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbstwo-tab" data-toggle="tab" href="#cbstwo" role="tab" aria-controls="cbstwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbsthree-tab" data-toggle="tab" href="#cbsthree" role="tab" aria-controls="cbsthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbsfour-tab" data-toggle="tab" href="#cbsfour" role="tab" aria-controls="cbsfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="cbsone" role="tabpanel" aria-labelledby="cbsone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbstwo" role="tabpanel" aria-labelledby="cbstwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbsthree" role="tabpanel" aria-labelledby="cbsthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbsfour" role="tabpanel" aria-labelledby="cbsfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="choose__balcony tab-pane fade" id="balcony-premium" role="tabpanel" aria-labelledby="balcony-premium-tab">
                        <div class="row d-flex flex-column">
                          <h3 class="section__subtitle">Тип оконной конструкции Премиум</h3>
                          <p class="section__tagline">Подберите количество створок и тип открывания окна</p>
                        </div>
                        <div class="row d-flex">
                          <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="choose__num d-flex flex-column nav nav-tabs" id="myTab" role="tablist">
                              <div class="choose__num-item d-flex cp active" id="cbpone-tab" data-toggle="tab" href="#cbpone" role="tab" aria-controls="cbpone" aria-selected="true">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-1.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbptwo-tab" data-toggle="tab" href="#cbptwo" role="tab" aria-controls="cbptwo" aria-selected="false">
                                <div class="window__type">
                                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-2.png" alt="">
                                  </div>
                                  <div class="dots">
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                    <span class="dots-dot"></span>
                                  </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbpthree-tab" data-toggle="tab" href="#cbpthree" role="tab" aria-controls="cbpthree" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-3.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                              <div class="choose__num-item d-flex cp" id="cbpfour-tab" data-toggle="tab" href="#cbpfour" role="tab" aria-controls="cbpfour" aria-selected="false">
                                <div class="window__type">
                                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-4.png" alt="">
                                </div>
                                <div class="dots">
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                  <span class="dots-dot"></span>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-5 col-md-4 col-sm-6">
                            <div class="choose__preview tab-content" id="myTabContent">
                              <div class="tab-pane window__prev fade show active" id="cbpone" role="tabpanel" aria-labelledby="cbpone-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbptwo" role="tabpanel" aria-labelledby="cbptwo-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbpthree" role="tabpanel" aria-labelledby="cbpthree-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                              <div class="tab-pane window__prev fade" id="cbpfour" role="tabpanel" aria-labelledby="cbpfour-tab">
                                <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/window-prev.png" alt="">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-3 col-md-3 col-sm-10 m-sm-auto">
                            <div class="choose__metrics">
                              <form class="d-flex flex-md-column">
                                <div class="form-group">
                                  <label for="exampleInput1" class="choose__anum-text">Ширина  (мм)</label>
                                  <input type="text" class="form-control choose__anum" id="exampleInput1" aria-describedby="emailHelp" placeholder="Ширина">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInput2" class="choose__bnum-text">Длинна  (мм)</label>
                                  <input type="text" class="form-control choose__bnum" id="exampleInput2" placeholder="Длинна">
                                </div>
                                <div class="form-group form-check">
                                  <label class="choose__check">Ламинация
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                  </label>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="price-request">
      <div class="container">
        <hr>
        <div class="price-request col-lg-10 m-auto">
          <div class="row d-flex flex-column">
            <div class="col-lg-12">
              <h2 class="section__title dblue">Расчет вашего заказа</h2>
              <p class="section__tagline">Оставьте свой номер и мы перезвоним в течение нескольких минут</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <form>
                <div class="form-row">
                  <div class="col-lg-4">
                    <input type="text" class="form-control price-request__input" placeholder="Имя">
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control price-request__input" placeholder="Телефон">
                  </div>
                  <div class="col-lg-4">
                      <button type="button" class="btn price-request__btn">Отправить</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="request">
      <div class="container">
        <div class="request col-lg-10 m-auto">
          <div class="row d-flex flex-column">
            <div class="col-lg-12">
              <h2 class="section__title white">оформите заявку на нашем сайте</h2>
              <p class="section__tagline white">Мы качественно выполним Ваш заказ.</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <form>
                <div class="form-row">
                  <div class="col-lg-4">
                    <input type="text" class="form-control request__input" placeholder="Имя">
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control request__input" placeholder="Телефон">
                  </div>
                  <div class="col-lg-4">
                      <button type="button" class="btn request__btn">Оставить заявку</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="acc">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="col-lg-12">
            <div class="row d-flex flex-column">
              <h3 class="section__subtitle">Выберите аксессуары</h3>
              <p class="section__tagline">Завершите оконную конструкцию</p>
            </div>
          </div>
          <div class="acc">
            <div class="row d-flex m-auto">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="acc__item cp" data-toggle="modal" data-target="#podok">
                  <div class="acc__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/acc-1.png" alt=""></div>
                  <h4 class="acc__title">Подоконники</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="acc__item cp" data-toggle="modal" data-target="#setki">
                  <div class="acc__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/acc-2.png" alt=""></div>
                  <h4 class="acc__title">Москитные сетки</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="acc__item cp" data-toggle="modal" data-target="#ruchki">
                  <div class="acc__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/acc-3.png" alt=""></div>
                  <h4 class="acc__title">Ручки</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="acc__item cp" data-toggle="modal" data-target="#ogran">
                  <div class="acc__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/acc-4.png" alt=""></div>
                  <h4 class="acc__title">Ограничители открывания</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="acc__item cp" data-toggle="modal" data-target="#air">
                  <div class="acc__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/acc-5.png" alt=""></div>
                  <h4 class="acc__title">Воздушные клапаны</h4>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="acc__item cp" data-toggle="modal" data-target="#otkos">
                  <div class="acc__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/acc-6.png" alt=""></div>
                  <h4 class="acc__title">Откосы и отливы</h4>
              </div>
            </div>
          </div>
          <hr>
        </div>
        
        <div class="col-lg-12 m-auto">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="decor">
                <h3 class="section__subtitle">Декор</h3>
                <p class="decor__short">Ваша идея в оформлении новых окон будет воплощена в жизнь. Мы можем преобразить профиль, стекло и всю оконную конструкцию.</p>
                <ul class="decor__list">
                  <li class="decor__item">Ламинация профиля</li>
                  <li class="decor__item">Покраска окон в любой цвет RAL</li>
                  <li class="decor__item">Витражные техники</li>
                  <li class="decor__item">Стразирование</li>
                  <li class="decor__item">Алмазная гравировка</li>
                  <li class="decor__item">Фотопечать на окнах</li>
                </ul>
              </div>
              <button type="button" class="btn btn-outline-primary acc__btn" data-toggle="modal" data-target="#consult">Получить консультацию</button>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="shape">
                <h3 class="section__subtitle">Форма</h3>
                <div class="shape__item d-flex flex-column flex-sm-row">
                  <div class="shape__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/shape-1.png" alt=""></div>
                  <div class="shape__info">
                    <h4 class="shape__title">Маленькие окна</h4>
                    <p class="shape__short">Украшение и свет для мансардных и служебных помещений</p>
                  </div>
                </div>
                <div class="shape__item d-flex flex-column flex-sm-row">
                  <div class="shape__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/shape-2.png" alt=""></div>
                  <div class="shape__info">
                    <h4 class="shape__title">Фигурные и арочные окна</h4>
                    <p class="shape__short">Для любого архитектурного и дизайнерского решения</p>
                  </div>
                </div>
                <div class="shape__item d-flex flex-column flex-sm-row">
                  <div class="shape__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/shape-3.png" alt=""></div>
                  <div class="shape__info">
                    <h4 class="shape__title">Окна больших размеров</h4>
                    <p class="shape__short">Больше света для любителей простора и комфорта</p>
                  </div>
                </div>
              </div>
              <button type="button" class="btn btn-outline-primary acc__btn" data-toggle="modal" data-target="#consult">Получить консультацию</button>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="quality">
      <div class="container">
        <div class="quality">
          <div class="col-lg-10 m-auto">
            <div class="row d-flex flex-column">
              <div class="col-lg-12">
                <h2 class="section__title">Высокое качество нашей продукции</h2>
                <p class="section__tagline">Для создания теплых, комфортных решений наши специалисты берут лучшие комплектующие от ведущих мировых производителей.</p>
              </div>
            </div>
            <div class="row">
              <div class="quality__item d-flex flex-column flex-md-row">
                <div class="col-lg-6">
                  <div class="quality__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/quality-1.png" alt=""></div>
                </div>
                <div class="col-lg-6">
                  <div class="quality__info">
                    <h4 class="quality__title">Профильная система Rehau</h4>
                    <p class="quality__short">Долговечность, хорошие защитные свойства, оптимальное соотношение цены и качества немецкой профильной системы REHAU наилучшим образом подходят для производства надежных теплых окон.</p>
                    <button class="btn quality__btn" data-toggle="modal" data-target="#consult">Получить консультацию</button>  
                  </div>
                </div>
              </div>

              <div class="quality__item d-flex flex-column flex-md-row-reverse">
                <div class="col-lg-6">
                  <div class="quality__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/quality-2.png" alt=""></div>
                </div>
                <div class="col-lg-6">
                  <div class="quality__info">
                    <h4 class="quality__title">Стеклопакет Guardian Glass</h4>
                    <p class="quality__short">Большой ассортимент стеклопакетов дает возможность подобрать продукт под индивидуальные нужды и желания. Обеспечивает усиленную защиту от шума, холода и летнего зноя.</p>
                    <button class="btn quality__btn" data-toggle="modal" data-target="#consult">Получить консультацию</button>  
                  </div>
                </div>
              </div>

              <div class="quality__item d-flex flex-column flex-md-row">
                <div class="col-lg-6">
                  <div class="quality__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/quality-3.png" alt=""></div>
                </div>
                <div class="col-lg-6">
                  <div class="quality__info">
                    <h4 class="quality__title">Фурнитура ROTO</h4>
                    <p class="quality__short">Функциональность, удобство и простота эксплуатации пластиковых окон зависят от качества фурнитуры. Мы используем надежную фурнитуру немецкой компании ROTO, каждый элемент которой обладает повышенной износостойкостью.</p>
                    <button class="btn quality__btn" data-toggle="modal" data-target="#consult">Получить консультацию</button>  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="trust">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="col-lg-8 p-0">
            <div class="trust">
              <h2 class="trust__title">окна по карману:<br> от 150 руб. в день</h2>
              <p class="trust__tagline">Закажите окно сейчас, а заплатите потом!</p>
              <form>
                <div class="form-row flex-column">
                    <input type="text" class="form-control trust__input" placeholder="Телефон">
                    <button type="button" class="btn btn-primary">Заказать замер</button>
                </div>
              </form>
              <span class="trust__info">Предоставляется банками: Сбербанк и Альфа банк.</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="offer">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="offer">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="section__title">Как заказать пластиковые окна?</h2>
                <p class="section__tagline">Пошаговый алгоритм  заказа новых окон.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="offer__item">
                  <h4 class="offer__title">1. Бесплатный замер</h4>
                  <p class="offer__desc">Укажите Ваш номер телефона.</p>
                  <form>
                    <div class="form-row">
                      <input type="text" class="form-control offer__input mr-auto" placeholder="Телефон">
                      <button type="button" class="btn btn-primary offer__btn">Заказать замер</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="offer__item">
                  <h4 class="offer__title">2. Выезд специалиста</h4>
                  <p class="offer__desc">Он снимет точные замеры, проведет подбор окон по Вашиму желанию  всего за 20 минут.</p>
                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/offer-1.png" alt="" class="offer__img">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-4">
                <div class="offer__item">
                  <h4 class="offer__title">3. Расчёт стоимости</h4>
                  <p class="offer__desc">Мастер по замерам рассчитает итоговую стоимость Ваших новых окон.</p>
                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/offer-2.png" alt="" class="offer__img">
                </div>
              </div>
              <div class="col-lg-5 col-md-5">
                <div class="offer__item">
                  <h4 class="offer__title">4. Подписание договора</h4>
                  <p class="offer__desc">Оформите договор не выходя из дома, согласуйте время доставки окон и монтажа.</p>
                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/offer-3.png" alt="" class="offer__img">
                </div>
              </div>
              <div class="col-lg-3 col-md-3">
                <div class="offer__item">
                  <h4 class="offer__title">5. Установка</h4>
                  <p class="offer__desc">Насладитесь качеством и функциональностью Ваших окон.</p>
                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/offer-4.png" alt="" class="offer__img">
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="stats">
            <div class="row">
              <div class="col-lg-12">
                <h2 class="section__title blue">Оконная компания №1</h2>
                <p class="section__tagline">Почему именно «Столичные Окна»?</p>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="stats__info d-flex flex-column flex-md-row">
                  <div class="col-lg-4">
                    <h2 class="stats__num">104 742</h2>
                    <p class="stats__client">счастливых клиентов</p>
                  </div>
                  <div class="col-lg-4">
                    <h2 class="stats__num">950 700</h2>
                    <p class="stats__client">установленных окон</p>
                  </div>
                  <div class="col-lg-4">
                    <h2 class="stats__num">5</h2>
                    <p class="stats__client">лет успешной работы</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="stats__plus">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="stats__item d-flex flex-column flex-sm-row">
                        <div class="stats__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/stats-1.png" alt=""></div>
                        <div class="stats__item-info">
                          <h4 class="stats__title">Лидирующее положение</h4>
                          <p class="stats__desc">среди российских производителей светопрозрачных конструкций</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="stats__item d-flex flex-column flex-sm-row">
                        <div class="stats__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/stats-4.png" alt=""></div>
                        <div class="stats__item-info">
                          <h4 class="stats__title">Гарантированное качество</h4>
                          <p class="stats__desc">комплектующих, полного цикла изготовления и установки</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="stats__item d-flex flex-column flex-sm-row">
                        <div class="stats__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/stats-2.png" alt=""></div>
                        <div class="stats__item-info">
                          <h4 class="stats__title">Собственное производство</h4>
                          <p class="stats__desc">с передовым оборудованием от ведущих европейских брендов</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="stats__item d-flex flex-column flex-sm-row">
                        <div class="stats__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/stats-5.png" alt=""></div>
                        <div class="stats__item-info">
                          <h4 class="stats__title">Индивидуальный подход</h4>
                          <p class="stats__desc">для оптимального выбора и быстрого решения любого вопроса</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="stats__item d-flex flex-column flex-sm-row">
                        <div class="stats__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/stats-3.png" alt=""></div>
                        <div class="stats__item-info">
                          <h4 class="stats__title">Широкий ассортимент</h4>
                          <p class="stats__desc">окон и дверей из ПВХ, алюминия</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="stats__item d-flex flex-column flex-sm-row">
                        <div class="stats__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/stats-6.png" alt=""></div>
                        <div class="stats__item-info">
                          <h4 class="stats__title">Выгодные условия оплаты</h4>
                          <p class="stats__desc">в том числе кредит, рассрочка, без выезда в офис наличными и банковской картой</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <div class="awards">
                <h2 class="section__title">Награды</h2>
                <div class="awards__item d-flex">
                  <div class="awards__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/awards-1.png" alt=""></div>
                  <div class="awards__info">
                    <div class="awards__title">«Народная марка»</div>
                    <div class="awards__desc">в номинации «Пластиковые окна»</div>
                  </div>
                </div>
                <div class="awards__item d-flex">
                  <div class="awards__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/awards-2.png" alt=""></div>
                  <div class="awards__info">
                    <div class="awards__title">«Компания года»</div>
                    <div class="awards__desc">«за индивидуальный подход к клиенту и профессионализм сотрудников»</div>
                  </div>
                </div>
                <div class="awards__item d-flex">
                  <div class="awards__img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/awards-3.png" alt=""></div>
                  <div class="awards__info">
                    <div class="awards__title">Медаль выставки</div>
                    <div class="awards__desc">“Экологически безопасная продукция”</div>
                  </div>
                </div>
              </div>
              <a href="about.html#awards"><button class="btn awards__btn">Все награды</button></a>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="reviews">
                <h2 class="section__title">Отзывы</h2>
                <div class="reviews__item">
                  <p class="reviews__text">Приятно удивили короткие сроки ожидания установки. Изготовление окон и их установка занимает меньше времени, чем у других компаний. Приятно, когда работу выполняют квалифицированные специалисты, профессионалы своего дела и просто приятные в общении люди. Советы и небольшие скидки являются приятным дополнением. Удачи сотрудникам.</p>
                  <span class="reviews__author"><i><b>Смирновы А.А.</b>, М.И. г. Нижний Новгород</i></span>
                </div>
                <div class="reviews__item">
                  <p class="reviews__text">Очень доволен работой компании, крайне редко встретишь компанию с таким грамотным подходом, и консультанты дали грамотную консультацию и монтажники сделали всё отлично! Поменял все окна в квартире, стало тише, "Медведицы" не слышно вообще. Рекомендую!</p>
                  <span class="reviews__author"><i><b>Игорь</b> г. Нижний Новгород</i></span>
                </div>
              </div>
              <a href="reviews.html#reviews"><button class="btn reviews__btn">Все отзывы</button></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="stock">
      <div class="container">
        <div class="stock col-lg-10 m-auto">
          <div class="row d-flex flex-column">
            <div class="col-lg-12">
              <a name="stock"></a>
              <h2 class="section__title white">Получите скидку 40 %</h2>
              <p class="section__tagline white">Оформите заявку на нашем сайте</p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <form>
                <div class="form-row">
                  <div class="col-lg-4">
                    <input type="text" class="form-control stock__input" placeholder="Имя">
                  </div>
                  <div class="col-lg-4">
                    <input type="text" class="form-control stock__input" placeholder="Телефон">
                  </div>
                  <div class="col-lg-4">
                      <button type="button" class="btn stock__btn">Заказать замер</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="advantages">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="advantages">
            <div class="row">
              <h2 class="advantages__title">Преимущества</h2>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">1</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Бесплатный замер и консультация</h4>
                    <p class="advantages__desc">Наш мастер приедет к вам в назначенный час для замера и просчета стоимости пластиковых конструкций. Для оформления договора на дому вы можете воспользоваться услугой «Мобильный офис».</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">2</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Помощь в выборе</h4>
                    <p class="advantages__desc">Наши специалисты знают все про окна ПВХ и готовы помочь вам определиться с выбором. Мы учитываем освещенность, уровень шума, расположение, климатические условия.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">3</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Рассрочка</h4>
                    <p class="advantages__desc">Если сейчас вы ограничены в средствах оформите заявку на кредит и наш менеджер свяжется с вами, чтобы обсудить условия. Максимальная сумма займа — 500 000 рублей.<br><br><b>Окна пластиковые</b> в рассрочку без процентов.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">4</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Быстрое изготовление</h4>
                    <p class="advantages__desc">Наши поставщики — компании с мировыми именами: REHAU, ROTO, Guardian Glass,  и другие. Мы производители, поэтому предлагаем окна пластиковые  и алюминиевые на заказ по доступным ценам, в сжатые сроки и с гарантированным качеством.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">5</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Доставка точно в срок</h4>
                    <p class="advantages__desc"><b>Доставка пластиковых окон</b><br> осуществляется по четко спланированному графику на автомобилях, оснащенных специальными пирамидами и надежными креплениями. Стоимость доставки окон ПВХ рассчитывается индивидуально при оформлении заказа.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">6</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Разгрузка и подъем на этаж</h4>
                    <p class="advantages__desc">Мы доставим заказ и аккуратно поднимем его на любой этаж. Стоимость услуги определяется исходя из количества окон и условий разгрузки и подъема.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">7</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Качественный монтаж</h4>
                    <p class="advantages__desc">Бригада профессиональных мастеров поставит новое пластиковое окно максимально быстро и строго в соответствии с требованиями ГОСТ. Наши монтажные бригады проходят регулярное обучение и имеют опыт работы в сложных условиях, поэтому мы гарантируем качество их работы.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="advantages__item d-flex">
                  <div class="advantages__icon"><div class="advantages__icon-circle">8</div></div>
                  <div class="advantages__info">
                    <h4 class="advantages__tagline">Гарантия и монтаж</h4>
                    <p class="advantages__desc">Мы осуществляем гарантийное и постгарантийное обслуживание пластиковых окон. Гарантия на монтажные работы — 5 лет. Срок эксплуатации профилей REHAU более 50 лет!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="choise">
            <h2 class="section__title">Большой выбор пластиковых окон от производителя!</h2>
            <p class="choise__desc">Уже 5 лет мы изготавливаем на заказ и устанавливаем пластиковые окна. За это время компания усовершенствовала производство окон, многократно расширила ассортимент и сделала сервис максимально комфортным. Мы предлагаем окна от производителя по оптимальной стоимости, а также проектирование и изготовление нестандартных изделий из ПВХ и алюминия. Вы можете заказать у нас арочные окна, в форме трапеции, конструкции маленьких и больших размеров.</p>
            <p class="choise__desc">Современное оборудование позволяет нам решать задачи любой сложности. Благодаря применению инновационных технологий изготовления светопрозрачных конструкций мы создаем пластиковые окна, обладающие высоким уровнем тепло- и звукоизоляции. Наша компания — одна из немногих, кто занимается изготовлением стеклопакетов для окон пвх, от качества которых зависит энергоэффективность всей конструкции.</p>
            <p class="choise__desc">Вы можете заказать пластиковые окна по телефону, отправить заявку на обратный звонок, воспользоваться калькулятором стоимости окон пвх и записаться на замер. Покупка окна будет максимально комфортной, а наша продукция сохранит домашнее тепло и поможет создать настоящий уют!</p>
          </div>
          <hr>
        </div>
      </div>
    </section>
    <section id="office">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="office">
            <div class="col-lg-12">
              <div class="row d-flex flex-column">
                <h2 class="office__title">Мобильный офис</h2>
                <p class="section__tagline">От новых окон вас отделяет три простых шага.</p>
              </div>
              <div class="row">
                <div class="col-lg-4 col-md-4 cp" data-toggle="modal" data-target="#zamer">
                  <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/office-1.png" alt="" class="office__icons">
                  <p class="office__desc">Оставьте заявку на сайте или звоните: +7(831)216-19-69</p>
                </div>
                <div class="col-lg-4 col-md-4">
                  <a href="okna.html">
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/office-2.png" alt="" class="office__icons">
                      <p class="office__desc">Наш специалист произведёт замер и заключит договор.</p>
                    </div>
                  </a>
                </div>
                <div class="col-lg-4 col-md-4">
                  <a href="pay.html#guarantee">
                    <div>
                      <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/office-3.png" alt="" class="office__icons">
                      <p class="office__desc">Мы произведем установку окон и вручим вам гарантийный сертификат.</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <hr>
        </div>
      </div>
    </section>
    <section id="actions">
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="actions">
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="<?php echo get_template_directory_uri();?>/demos/windows/stocks.html">
                  <div class="actions__item">
                    <i class="fa fa-gift"></i> <span>Подарок</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="actions__item" data-toggle="modal" data-target="#call">
                  <i class="fa fa-phone-alt"></i> <span>Обратный звонок</span>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <a href="#price">
                  <div class="actions__item">
                    <i class="fa fa-calculator"></i> <span>Рассчет стоимости</span>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="actions__item" data-toggle="modal" data-target="#zamer">
                  <i class="fa fa-pencil-ruler"></i> <span>Запись на замер</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer>
      <div class="container">
        <div class="col-lg-10 m-auto">
          <div class="footer">
            <div class="row">
              <div class="col-lg-3 col-md-3">
                <h4 class="footer__title">Продукция</h4>
              </div>
              <div class="col-lg-3 col-md-3">
                <h4 class="footer__title">О Компании</h4>
              </div>
              <div class="col-lg-3 col-md-3">
                <h4 class="footer__title">Услуги</h4>
              </div>
              <div class="col-lg-3 col-md-3">
                <h4 class="footer__title">Контакты</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3">
                <ul class="nav flex-column">
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/okna.html" class="footer__link">Окна</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/cottages.html#doors" class="footer__link">Двери</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/balcony.html" class="footer__link">Балконы</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/okna.html" class="footer__link">Окна в дом</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <ul class="nav flex-column">
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/articles.html" class="footer__link">Новости</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/vacancy.html" class="footer__link">Вакансии</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/pay.html#guarantee" class="footer__link">Гарантия</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/about.html#awards" class="footer__link">Награды</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/about.html#works" class="footer__link">Наши работы</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/vacancy.html#workers" class="footer__link">Сотрудники</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/pay.html" class="footer__link">Оплата</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/reviews.html" class="footer__link">Отзывы</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/stocks.html" class="footer__link">Акции</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <ul class="nav flex-column">
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/services.html#delivery" class="footer__link">Доставка</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/index.html#price" class="footer__link">Калькулятор</a></li>
                  <li class="footer__item"><a href="<?php echo get_template_directory_uri();?>/demos/windows/services.html#credit" class="footer__link">Кредит и рассрочка</a></li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <p class="footer__phone">+7(831)216-19-69</p>
                <p class="footer__worktime">Круглосуточно</p>
                <p class="footer__email">info@stolokna.ru</p>
                <div class="cash">
                  <p class="cash__take">Принимаем к оплате</p>
                  <div class="cash__types ">
                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cash-1.png" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cash-2.png" alt="">
                    <img src="<?php echo get_template_directory_uri();?>/demos/windows/img/cash-3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="row d-flex flex-column">
              <h4 class="footer__name">“Столичные Окна”</h4>
              <p class="footer__copy">&copy;&nbsp;Все права защищены 2019</p>
              <span class="footer__info">Сайт не является публичной офертой и носит информационный характер.</span>
            </div>
          </div>
        </div>
      </div>
    </footer> 

    <!-- Modal Windows -->
    <div class="modal fade bd-example-modal-lg" id="podok" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-acc">
              <h4 class="section__title">Подоконники</h4>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/podokonnik-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Werzalit</h4>
                  <p class="modal-acc__desc">Создан из отборной древесной стружки с добавлением полимерных смол. Многослойное покрытие устойчиво к воздействию влаги и перепадам температур. Представлен в широкой цветовой гамме.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/podokonnik-2.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Глянец</h4>
                  <p class="modal-acc__desc">Идеально ровная поверхность с благородным глянцем устойчива к царапинам и бытовой химии. Большой выбор оттенков, в том числе имитация древесины и камня.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/podokonnik-3.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Матовый</h4>
                  <p class="modal-acc__desc">Сдержанный матовый — универсальный вариант для любого интерьера. Не отслаивается, не выгорает, устойчив к воздействию влаги.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/podokonnik-4.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Сатин</h4>
                  <p class="modal-acc__desc">Необычная поверхность с сатиновым покрытием: удовольствие от прикосновения, комфорт эксплуатации и лаконичная эстетика.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="setki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-acc">
              <h4 class="section__title">Москитные сетки</h4>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/setki-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Оконные сетки CleanAir</h4>
                  <p class="modal-acc__desc">Фильтрующая нано-мембрана, входящая в состав сетки, задерживает микроскопическую пыль, аллергены, пыльцу. Дышите чистым воздухом!</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/setki-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">«Антикошка»</h4>
                  <p class="modal-acc__desc">Москитная сетка повышенной прочности выдержит когти самого настойчивого домашнего питомца и убережет его от травм.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/setki-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">«Антипыльца»</h4>
                  <p class="modal-acc__desc">Мельчайшие ячейки сетки удерживают не только комаров и мошек, но и частицы пыли и пыльцы, помогая защититься от сезонной аллергии и сохраняя чистоту дома.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/setki-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Алюминиевое полотно</h4>
                  <p class="modal-acc__desc">Сетка с алюминиевым усиленным полотном станет идеальным вариантом для семей с маленькими детьми и домашними питомцами.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="ruchki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-acc">
              <h4 class="section__title">Ручки</h4>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/ruchki-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">ROTO LINE</h4>
                  <p class="modal-acc__desc">Строгие линии, эргономичность формы, 12 стильных цветов на выбор. Анодированное покрытие обладает повышенными защитными свойствами.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/ruchki-2.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">ROTO SWING</h4>
                  <p class="modal-acc__desc">Дизайнерская ручка для роскошной эстетики. Большой выбор цветов, внешнее покрытие устойчиво к механическим и химическим воздействиям.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="ogran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-acc">
              <h4 class="section__title">Ограничители открывания</h4>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/ogran-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Flexi Lock</h4>
                  <p class="modal-acc__desc">В основе устройства — многожильный трос, покрытый полимерной оплеткой. Выдерживает усилие на разрыв до 550 кг, закрывается на ключ.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/ogran-2.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Turn & Fix</h4>
                  <p class="modal-acc__desc">Ограничитель выполнен в виде фиксатора, монтируемого в нижних частях окон. В положении «Заперто» доступно откидывание створки для проветривания.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/ogran-3.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Ограничитель-гребенка</h4>
                  <p class="modal-acc__desc">Предназначена для комфортного проветривания в конструкциях без откидного проветривания. Проста в эксплуатации, предупреждает распахивание открытой створки.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="air" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-acc">
              <h4 class="section__title">Воздушные Клапаны</h4>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/klapan-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">AirBox Comfort</h4>
                  <p class="modal-acc__desc">Позволяет проветривать помещение при закрытом окне, поддерживая оптимальную влажность и чистоту воздуха. Монтируется на оконную раму. Совместим с любыми окнами.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/klapan-2.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">AERECO</h4>
                  <p class="modal-acc__desc">Клапаны с гигрорегуляцией устанавливаются на верхние части окон. AERECO ЕНА2 имеет лаконичный дизайн и возможность контроля интенсивности вентиляции. AERECO ЕММ — клапан с регуляцией направления воздушного потока.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/klapan-3.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Sinax Air</h4>
                  <p class="modal-acc__desc">Эргономичный вариант для комфортного проветривания. Клапан имеет подвижную заслонку для ручной регуляции проветривания. Эффективно устраняет проблему конденсата на окнах.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="otkos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-acc">
              <h4 class="section__title">Откосы и отливы</h4>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/otkos-1.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Откосы пластиковые</h4>
                  <p class="modal-acc__desc">Классические откосы из ПВХ просты в установке, долговечны и не требуют особого ухода. Имеются варианты с имитацией разных пород дерева.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/otkos-2.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Отливы из полиэстра</h4>
                  <p class="modal-acc__desc">Дополняют систему гидроизоляции окон, обеспечивая отвод атмосферной влаги. Устойчивы к механическим повреждениям и перепадам температуры.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
              <div class="modal-acc__item d-flex flex-column flex-lg-row">
                <div class="modal-acc-img"><img src="<?php echo get_template_directory_uri();?>/demos/windows/img/otkos-3.png" alt=""></div>
                <div class="modal-acc__info">
                  <h4 class="modal-acc__title">Отливы алюминиевые</h4>
                  <p class="modal-acc__desc">Прочные отливы из алюминия долговечны и эффективно выполняют водоотводную функцию, надежно защищая нижнюю часть окон от протекания.</p>
                  <button class="btn btn-primary" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать</button>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="char-lite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body char">
            <h4 class="char__title">Лайт</h4>
            <h3 class="char__sub">Профиль REHAU</h3>
            <hr>
            <p class="char__text">Хаорактеристики</p>
            <ul class="char__list">
              <li class="char__list-item">3-x камерный профиль 58 мм</li>
              <li class="char__list-item">Стеклопакет толщиной до 32 мм</li>
              <li class="char__list-item">Энергосберегающее стекло</li>
              <li class="char__list-item">Фурнитура ROTO</li>
              <li class="char__list-item">Глянцевая поверхность</li>
            </ul>
            <hr>
            <button type="button" class="char__btn" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать замер</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="char-standart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body char">
            <h4 class="char__title">Стандарт</h4>
            <h3 class="char__sub">Профиль REHAU</h3>
            <hr>
            <p class="char__text">Хаорактеристики</p>
            <ul class="char__list">
              <li class="char__list-item">5-и камерный профиль 70 мм</li>
              <li class="char__list-item">Стеклопакет толщиной до 40 мм</li>
              <li class="char__list-item">Энергосберегающее стекло</li>
              <li class="char__list-item">Фурнитура ROTO</li>
              <li class="char__list-item">Глянцевая поверхность</li>
            </ul>
            <hr>
            <button type="button" class="char__btn" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать замер</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="char-premium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body char">
            <h4 class="char__title">Премиум</h4>
            <h3 class="char__sub">Профиль REHAU</h3>
            <hr>
            <p class="char__text">Хаорактеристики</p>
            <ul class="char__list">
              <li class="char__list-item">7-и камерный профиль 82 мм</li>
              <li class="char__list-item">Стеклопакет толщиной до 44 мм</li>
              <li class="char__list-item">Энергосберегающее стекло</li>
              <li class="char__list-item">Фурнитура ROTO</li>
              <li class="char__list-item">Глянцевая поверхность</li>
            </ul>
            <hr>
            <button type="button" class="char__btn" data-toggle="modal" data-target="#zamer" data-dismiss="modal">Заказать замер</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="zamer" tabindex="0" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 class="modal__title">Запись на бесплатный замер</h4>
            <p class="modal__text">Оператор ответит на все вопросы по взаимодействию и процессу работ, поможет вызвать инженера-сметчика на сегодня или выходные.</p>
            <input type="text" placeholder="Телефон" class="modal__input">
            <button type="button" class="modal__btn">Отправить</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="consult" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 class="modal__title">Получить консультацию</h4>
            <p class="modal__text">Оставьте свои контакты и мы перезвоним вам через 5 минут. Оператор ответит на все вопросы по взаимодействию и процессу работ, поможет вызвать инженера-сметчика на сегодня или выходные.</p>
            <input type="text" placeholder="Телефон" class="modal__input">
            <button type="button" class="modal__btn">Отправить</button>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4 class="modal__title">Закажите бесплатный звонок</h4>
            <p class="modal__text">Оставьте свои контакты и мы перезвоним вам через 5 минут. Оператор ответит на все вопросы по взаимодействию и процессу работ, поможет вызвать инженера-сметчика на сегодня или выходные.</p>
            <input type="text" placeholder="Телефон" class="modal__input">
            <button type="button" class="modal__btn">Отправить</button>
          </div>
        </div>
      </div>
    </div>

    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri();?>/demos/windows/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/demos/windows/js/burger.js"></script> 
    <script src="https://kit.fontawesome.com/b60b688cfa.js"></script>

  </body>
</html>