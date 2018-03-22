<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#fed017">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="theme-color" content="#000000">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

        <title>@yield('title')</title>


        <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader"></div>


        <header>

            <div class="navbar fixed-top navbar-dark bg-dark box-shadow">
                <div class="container d-sm-flex justify-content-between">
                    <a href="#" class="navbar-brand d-flex align-items-center">
                        <img src="/img/logo-50y.png" class="img-responsive main-logo" />
                    </a>
                    <p class="small text-light mb-0 mt-2 mr-auto d-none d-xl-block text-center">Полный спектр бытовых услуг<br> в Калининграде и области</p>

                    <div class="d-sm-flex align-items-center">
                        <div class="tel-block">
                            <i class="fas fa-phone fa-xs text-primary mr-3"></i>
                            <a class="tel mr-3" href="tel:+74012337434">33-74-34</a>
                            <a class="tel mr-5" href="tel:+79637387434">+7-963-738-7434</a>
                        </div>

                        <a href="#" class="btn btn-primary mr-5 d-none d-lg-block">Заказать звонок</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse bg-dark w-100" id="navbarHeader">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4 col-lg-2 py-2">

                                <ul class="nav">
                                    <li class="nav-item main">
                                        <a class="nav-link" href="#">Сантехник</a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column left-border d-none d-md-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Водоснабжение</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Отопление</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Канализация</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Монтаж санфаянса</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link d-flex" href="#">
                                            <div class="align-self-end float-left mr-2 pb-1"><i class="fas fa-2x fa-exclamation-triangle text-info"></i></div> Аварийный вызов
                                        </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-2 py-2">

                                <ul class="nav">
                                    <li class="nav-item main">
                                        <a class="nav-link" href="#">Электрик</a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column left-border d-none d-md-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Монтаж проводки</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Установка электроприборов</a>
                                    </li>
                                    <li class="nav-item">

                                        <a class="nav-link d-flex" href="#">
                                            <div class="align-self-end float-left mr-2 pb-1"><i class="fas fa-2x fa-exclamation-triangle text-info"></i></div> Аварийный вызов
                                        </a>
                                    </li>

                                </ul>

                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-2 py-2">

                                <ul class="nav">
                                    <li class="nav-item main">
                                        <a class="nav-link" href="#">Отделка</a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column left-border d-none d-md-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Серый ключ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Внутренние работы</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Внешние работы</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="w-100 d-none d-md-block d-lg-none"></div>
                            <div class="col-xs-12 col-sm-4 col-lg-2 py-2">


                                <ul class="nav">
                                    <li class="nav-item main">
                                        <a class="nav-link" href="#">Уборка</a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column left-border d-none d-md-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Мытьё окон, лоджий</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Генеральная уборка</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">После ремонта, стройки</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">После пожара, затопления</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Уборка дворов, гаражей</a>
                                    </li>

                                </ul>


                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-2 py-2">

                                <ul class="nav">
                                    <li class="nav-item main">
                                        <a class="nav-link" href="#">Химчистка</a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column left-border d-none d-md-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Мягкой мебели</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Ковровых покрытий</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Одежды</a>
                                    </li>

                                </ul>

                            </div>
                            <div class="col-xs-12 col-sm-4 col-lg-2 py-2">

                                <ul class="nav">
                                    <li class="nav-item main">
                                        <a class="nav-link" href="#">Дезинсекция</a>
                                    </li>
                                </ul>

                                <ul class="nav flex-column left-border d-none d-md-flex">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Жилые помещения</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Промышленные помещения</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Кафе, рестораны</a>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        @yield('content')

        <footer>
            @section('footer')
                <section class="social bg-primary py-4">
                    <div class="container d-flex justify-content-end">
                        <a href="#" class="ml-5"><i class="fab fa-vk fa-2x"></i></a>
                        <a href="#" class="ml-5"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </section>
                <section class="bottom-menu bg-dark py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <nav class="nav flex-column text-uppercase text-center">
                                    <a class="nav-link" href="/">Сантехник</a>
                                    <a class="nav-link" href="#">Электрик</a>
                                    <a class="nav-link" href="#">Отделка и ремонт</a>
                                    <a class="nav-link" href="/">Уборка</a>
                                    <a class="nav-link" href="#">Химчистка</a>
                                    <a class="nav-link" href="#">Дезинсекция</a>
                                </nav>
                            </div>

                            <div class="col d-flex">

                                <div class="align-self-end w-100">
                                    <img src="/img/logo-v200y.png" class="bottom-logo img-fluid d-block mx-auto" alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-light p-3">
                    <div class="container">
                        <p class="mb-0">©2018 Компания «Дом быта 39» <a href="maito:info@dombyta39.ru">info@dombyta39.ru</a></p>
                    </div>
                </section>
            @show
        </footer>


        <!-- Scripts -->

        <script src="{{ mix('/js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
