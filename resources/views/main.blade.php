@extends('layout')

@section('title', 'Бытовые услуги в Калининграде и области')

@section('content')
    <div class="content">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
                <li data-target="#carousel" data-slide-to="5"></li>
                <li data-target="#carousel" data-slide-to="6"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">

                    <picture>
                        <source srcset="/img/slider/1920x800/main.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/main.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/main.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/main.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Дом Быта 39</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Весь спектр бытовых услуг в Калининграде! Сантехник, электрик, отделка, уборка, химчистка, дезинсекция.</p>
                            <span  data-toggle="modal" data-target="#callModal" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Заказать звонок</span>
                        </div>
                    </div>

                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">

                    <picture>
                        <source srcset="/img/slider/1920x800/santehnik.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/santehnik.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/santehnik.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/santehnik.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Услуги сантехника</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Компания «Дом Быта 39» предоставляет весь спектр сантехнических услуг в Калининграде!</p>
                            <a href="/santehnik" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</a>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">

                    <picture>
                        <source srcset="/img/slider/1920x800/electrik.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/electrik.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/electrik.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/electrik.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Услуги электрика</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Полный перечень электромонтажных услуг в Калининграде!</p>
                            <a href="/electrik" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</a>
                        </div>
                    </div>

                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <picture>
                        <source srcset="/img/slider/1920x800/remont.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/remont.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/remont.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/remont.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Отделка и ремонт</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Профессионалы компании «Дом Быта 39» выполнят любые отделочные, строительные и ремонтные работы в Калининграде!</p>
                            <a href="/otdelka" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</a>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <picture>
                        <source srcset="/img/slider/1920x800/cleaning.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/cleaning.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/cleaning.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/cleaning.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Клининговые услуги</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Наша профессиональная команда выполнит уборку любой сложности в Калининграде!</p>
                            <a href="/cleaning" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</a>
                        </div>
                    </div>
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">

                    <picture>
                        <source srcset="/img/slider/1920x800/himchistka.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/himchistka.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/himchistka.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/himchistka.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Химчистка</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Химчистка мягкой мебели и ковровых покрытий в Калининграде!</p>
                            <a href="/himchistka" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</a>
                        </div>
                    </div>

                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">

                    <picture>
                        <source srcset="/img/slider/1920x800/dezinsekt.jpg" media="(min-width: 1400px)">
                        <source srcset="/img/slider/1400x700/dezinsekt.jpg" media="(min-width: 769px)">
                        <source srcset="/img/slider/800x500/dezinsekt.jpg" media="(min-width: 577px)">
                        <img srcset="/img/slider/600x500/dezinsekt.jpg" alt="responsive image" class="d-block img-fluid">
                    </picture>

                    <div class="carousel-caption">
                        <div class="mb-2">
                            <h2 class="display-4 wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Дезинсекция</h2>
                            <p class="lead wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">Уничтожение всех видов насекомых и грызунов в Калининграде!</p>
                            <a href="/dezinsekt" class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</a>
                        </div>
                    </div>

                </div>
                <!-- /.carousel-item -->

            </div>
            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carousel" data-noscroll role="button" data-slide="prev">
                <i class="fas fa-chevron-left fa-2x text-primary"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" data-noscroll role="button" data-slide="next">
                <i class="fas fa-chevron-right fa-2x text-primary"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->

        <section class="professional_builder gray_bgr">
            <div class="container">
                <div class="row builder_all">
                    <div class="col-6 col-md-3 builder">
                        <i class="fas fa-tasks fa-4x text-primary"></i>
                        <h4>Все услуги</h4>
                        <p>Наша компания предлагает полный спектр бытовых услуг.</p>
                    </div>
                    <div class="col-6 col-md-3 builder">
                        <i class="fas fa-clock fa-4x text-primary"></i>
                        <h4>Быстро и удобно</h4>
                        <p>Наш мастер приедет в кратчайшие сроки и окажет все необходимые услуги</p>
                    </div>
                    <div class="col-6 col-md-3 builder">
                        <i class="fas fa-check-square fa-4x text-primary"></i>
                        <h4>Надёжно</h4>
                        <p>Наши мастера выполнят любые услуги максимально качественно</p>
                    </div>
                    <div class="col-6 col-md-3 builder">
                        <i class="fas fa-thumbs-up fa-4x text-primary"></i>
                        <h4>Выгодно</h4>
                        <p>Вы получаете гарантированное качество по приемлимым ценам</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="black_texture_bgr pb-4">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="title_white">
                            <h2 id="about">О нас</h2>
                        </div>
                        <p class="lead text-center text-info">
                            Компания «Дом Быта 39» оказывает полный спектр бытовых услуг как физическим, так и юридическим лицам. Сервисная компания кроме домашнего мастера, предлагает и более объемные услуги такие как, полноценный ремонт и отделка помещений, дезинфекция с целью соблюдения санитарных норм, услуги по химчистке ковров мебели и салона автомобиля. Мы сделаем профессиональную уборку территорий разных площадей.
                        </p>
                    </div>
                </div>
                <div class="row" id="service">

                    <div class="col-12">
                        <div class="title_white">
                            <h2>Наши услуги</h2>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/santehnik">
                            <img src="/img/icons/santehnik-100.png" alt="Сантехник" class="m-3">
                            <h3 class="text-info text-uppercase">Сантехник</h3>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/electrik">
                            <img src="/img/icons/electrik-100.png" alt="Электрик" class="m-3">
                            <h3 class="text-info text-uppercase">Электрик</h3>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/otdelka">
                            <img src="/img/icons/remont-100.png" alt="Ремонт и отделка" class="m-3">
                            <h3 class="text-info text-uppercase">Ремонт</h3>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/cleaning">
                            <img src="/img/icons/cleaning-100.png" alt="Уборка" class="m-3">
                            <h3 class="text-info text-uppercase">Уборка</h3>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/himchistka">
                            <img src="/img/icons/himchistka-100.png" alt="Химчистка" class="m-3">
                            <h3 class="text-info text-uppercase">Химчистка</h3>
                        </a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/dezinsekt">
                            <img src="/img/icons/dezinsekt-100.png" alt="Дезинсекция" class="m-3">
                            <h3 class="text-info text-uppercase">Дезинсекция</h3>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section class="pb-4">
            <div class="title_black">
                <h2>Как вызвать мастера?</h2>
            </div>
            <div class="yellow_texture_bgr py-4">
                <div class="container">
                    <div class="row">
                        <div class="col">

                            <p class="lead text-center">
                                Мы предлагаем очень простую схему работы:
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="card bg-transparent border-0 text-center">
                                <img class="card-img-top" src="/img/icons/phone-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Звоните нам</h5>
                                    <p class="card-text">Просто позвоните нам или закажите звонок.</p>

                                    <a href="#" data-noscroll data-toggle="modal" data-target="#callModal" class="btn btn-dark noZensmooth" >Заказать звонок</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-transparent border-0 text-center">
                                <img class="card-img-top" src="/img/icons/detail-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Уточняем детали</h5>
                                    <p class="card-text">Наш менеджер уточнит все детали и озвучит предварительную стоимость.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-transparent border-0 text-center">
                                <img class="card-img-top" src="/img/icons/car-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Выезд мастера</h5>
                                    <p class="card-text">Мастер приедет в удобное для вас время и рассчитает окончательную стоимость и сроки работы.</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="card bg-transparent border-0 text-center">
                                <img class="card-img-top" src="/img/icons/ok-300.png" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Результат</h5>
                                    <p class="card-text">После согласования мастер приступит к работе и выполнит ваш заказ.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="black_texture_bgr pb-5 mt-5">
            <div class="container">
                <div class="title_white">
                    <h2 id="emergency">Экстренный вызов мастера</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-3 icon-font" >
                        <a href="#" class="simple-link" data-noscroll data-toggle="modal" data-target="#callModal">
                            <i class="fas fa-exclamation-triangle text-primary"></i>
                            <small class="text-info">круглосуточно</small>
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <p class="text-info text-center lead">
                            Если у вас произошла аварийная ситуация, прорвало трубу, засорилась канализация, сломался котел отопления, сгорела проводка или возникла любая другая проблема, требующая немедленного
                            устранения, звоните <a class="tel-context-dark" href="tel:+74012337434">33-74-34</a> или
                            <a class="tel-context-dark" href="tel:+79637387434">+7-963-738-7434</a> и наши специалисты
                            немедленно приедут и устранят проблему. Также вы можете заполнить форму ниже и мы
                            свяжемся с вами в ближайшее время.
                        </p>
                        <form class="outline-primary" id="staticCallForm" action=""  data-handler="/call" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="Экстренный вызов на главной странице">
                            <div class="form-row">
                                <div class="col-md-5 mb-1 form-group">
                                    <input type="text" name="person"  class="form-control" placeholder="Ваше имя">
                                </div>
                                <div class="col-md-5 mb-1 form-group">
                                    <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                                </div>
                                <div class="col-md-2 mb-1 form-group">
                                    <button type="submit" class="btn btn-primary btn-block">Отправить</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
        </section>

        <section>
            <div class="title_black">
                <h2 id="feedback">Отзывы клиентов</h2>
            </div>
            <div class="container">
                <div id="carouselFeedback" class="carousel slide bg-transparent" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Переехали с женой в новую квартиру, решили заменить всю старую сантехнику на новую!
                                    Набрали в поиске сантехник на дом и позвонили в компанию «Дом Быта 39». Ребята приехали
                                    быстро, работа была выполнена качественно и аккуратно. Благодарим за профессионализм,
                                    мы остались очень довольны!</p>
                                <footer class="blockquote-footer">Сергей и Ольга. <small>21.03.2018</small></footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Я в восторге, мастер очень интеллигентный и аккуратный.
                                    Всю работу выполнил качественно и спокойно. Дал подробную консультацию по
                                    материалам, просил сразу обращаться при возникновении вопросов.
                                    Я не ожидала, что такого рода профессионалы существуют. Все отлично.</p>
                                <footer class="blockquote-footer">Виктория. <small>11.02.2018</small></footer>
                            </blockquote>
                        </div>
                        <div class="carousel-item">
                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Здравствуйте! Вызвал электрика из этой компании, т.к. была проблема
                                    с проводкой. Прибыл мастер Александр, очень внимательно провел диагностику.
                                    Нашел причину, по которой не было электричества в комнате и устранил проблему.</p>
                                <footer class="blockquote-footer">Геннадий. <small>04.11.2017</small></footer>
                            </blockquote>
                        </div>
                    </div>
                    <a class="carousel-control-prev noAction noZensmooth d-none d-lg-flex" href="#carouselFeedback" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left fa-2x text-primary"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next noAction noZensmooth d-none d-lg-flex" href="#carouselFeedback" role="button" data-slide="next">
                        <i class="fas fa-chevron-right fa-2x text-primary"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div class="text-center">
                    <a href="#" data-noscroll data-toggle="modal" data-target="#feedbackModal" class="btn btn-primary" >Оставить отзыв</a>
                </div>
            </div>

        </section>
        @include('feedback-modal')

        <section>
            <div class="title_black">
                <h2 id="contacts">Наши контакты</h2>
            </div>
            <div id="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af4884826fd86250605ef67a309c7c7569eae56e9c8a3341fb02408ea95f1b9f3&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </section>


    </div>
@endsection

@section('scripts')

@endsection