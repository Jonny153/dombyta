@extends('layout')

@section('title', 'Главная страница')

@section('content')
    <div class="content">
        <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <a href="#">
                        <!--
                        If you need more browser support use https://scottjehl.github.io/picturefill/
                        If a picture looks blurry on a retina device you can add a high resolution like this
                        <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                        What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                         -->
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
                                <span class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Заказать звонок</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">

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
                                <span class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">

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
                                <span class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.carousel-item -->

                <div class="carousel-item">
                    <a href="#">

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
                                <span class="btn btn-lg btn-primary wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Выбрать услугу</span>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /.carousel-item -->

            </div>
            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="fas fa-chevron-left fa-2x text-primary"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="fas fa-chevron-right fa-2x text-primary"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- /.carousel -->

        <section class="professional_builder gray_bgr">
            <div class="container">
                <div class="row builder_all">
                    <div class="col-md-3 col-sm-6 builder">
                        <i class="fas fa-tasks fa-4x text-primary"></i>
                        <h4>Все услуги</h4>
                        <p>Наша компания предлагает полный спектр бытовых услуг.</p>
                    </div>
                    <div class="col-md-3 col-sm-6 builder">
                        <i class="fas fa-clock fa-4x text-primary"></i>
                        <h4>Быстро и удобно</h4>
                        <p>Наш мастер приедет в кратчайшие сроки и окажет все необходимые услуги</p>
                    </div>
                    <div class="col-md-3 col-sm-6 builder">
                        <i class="fas fa-check-square fa-4x text-primary"></i>
                        <h4>Надёжно</h4>
                        <p>Наши мастера выполнят любые услуги максимально качественно</p>
                    </div>
                    <div class="col-md-3 col-sm-6 builder">
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
                            <h2>О нас</h2>
                        </div>
                        <p class="lead text-center text-info">
                            Наша компания имеет большой спектр услуг и обслуживает как физических, так и юридических лиц. Сервисная компания, кроме домашнего мастера, предлагает и более объемные услуги такие как, полноценный ремонт и отделка помещений, дезинфекция с целью соблюдения санитарных норм, услуги по химчистке ковров мебели и салона автомобиля. Мы сделаем профессиональную уборку территорий разных площадей.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center">
                        <a href="/santehnik"><img src="/img/icons/santehnik-100.png" alt="Сантехник" class="m-3"></a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/electrik"><img src="/img/icons/electrik-100.png" alt="Электрик" class="m-3"></a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/remont"><img src="/img/icons/remont-100.png" alt="Ремонт и отделка" class="m-3"></a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/cleaning"><img src="/img/icons/cleaning-100.png" alt="Уборка" class="m-3"></a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/himchistka"><img src="/img/icons/himchistka-100.png" alt="Химчистка" class="m-3"></a>
                    </div>
                    <div class="col d-flex justify-content-center">
                        <a href="/dezinsekt"><img src="/img/icons/dezinsekt-100.png" alt="Дезинсекция" class="m-3"></a>
                    </div>

                </div>

            </div>
        </section>

        <section>
            <div class="title_black">
                <h2>Наши контакты</h2>
            </div>
            <div id="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af4884826fd86250605ef67a309c7c7569eae56e9c8a3341fb02408ea95f1b9f3&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </section>


    </div>
@endsection

@section('scripts')

@endsection