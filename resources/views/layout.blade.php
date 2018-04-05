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
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <img src="/img/logo-50y.png" class="img-responsive main-logo" />
                    </a>
                    <p class="small text-light mb-0 mt-2 mr-auto d-none d-xl-block text-center">Полный спектр бытовых услуг<br> в Калининграде и области</p>

                    <div class="d-sm-flex align-items-center">
                        <div class="tel-block">
                            <i class="fas fa-phone fa-xs text-primary mr-3"></i>
                            <a class="tel mr-3" href="tel:+74012337434">33-74-34</a>
                            <a class="tel mr-5" href="tel:+79637387434">+7-963-738-7434</a>
                        </div>

                        <a href="#" data-noscroll data-toggle="modal" data-target="#callModal" class="btn btn-primary mr-5 d-none d-lg-block">Заказать звонок</a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="collapse bg-dark w-100" id="navbarHeader">
                    <div class="container">
                        <div class="row d-flex">

                            <div class="col-xs-12 col-sm-6 col-lg-3 py-2 order-sm-2">
                                <nav class="nav main flex-column text-center">
                                    <a class="nav-link" href="/santehnik">Сантехник</a>
                                    <a class="nav-link" href="/electrik">Электрик</a>
                                    <a class="nav-link" href="/otdelka_i_remont">Отделка</a>
                                    <a class="nav-link" href="/cleaning">Уборка</a>
                                    <a class="nav-link" href="/himchistka">Химчистка</a>
                                    <a class="nav-link" href="/dezinsekt">Дезинсекция</a>
                                </nav>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3 py-2">
                                <nav class="nav flex-sm-column justify-content-around text-center">
                                    <a class="nav-link text-uppercase" href="#emergency">
                                        <i class="fas fa-lg fa-exclamation-triangle"></i> Аварийный вызов
                                    </a>
                                    <a class="nav-link" href="/">Главная</a>
                                    <a class="nav-link" href="#about">О нас</a>
                                    <a class="nav-link" href="#service">Услуги</a>

                                    <a class="nav-link" href="#feedback">Отзывы</a>
                                    <a class="nav-link" href="#contacts">Контакты</a>
                                </nav>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </header>


        @yield('content')

        @include('call-modal')

        <footer>
            @section('footer')
                <section class="social bg-primary py-4">
                    <div class="container d-flex justify-content-end">
                        <a class="mx-4 text-dark lead font-weight-bold d-none d-lg-block" href="maito:info@dombyta39.ru">info@dombyta39.ru</a>
                        <a href="#" class="mx-4 text-dark"><i class="fab fa-vk fa-2x"></i></a>
                        <a href="#" class="mx-4 text-dark"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </section>
                <section class="bottom-menu bg-dark py-4">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <nav class="nav flex-column text-uppercase text-center">
                                    <a class="nav-link" href="/santehnik">Сантехник</a>
                                    <a class="nav-link" href="/electrik">Электрик</a>
                                    <a class="nav-link" href="/otdelka_i_remont">Отделка и ремонт</a>
                                    <a class="nav-link" href="/cleaning">Уборка</a>
                                    <a class="nav-link" href="/himchistka">Химчистка</a>
                                    <a class="nav-link" href="/dezinsekt">Дезинсекция</a>
                                </nav>
                            </div>
                            <div class="col-6 col-md-4">
                                <nav class="nav flex-column text-center">
                                    <a class="nav-link" href="@if ($page != 'main')/@else#@endif">Главная</a>
                                    <a class="nav-link" href="/#about">О нас</a>
                                    <a class="nav-link" href="/#service">Услуги</a>
                                    <a class="nav-link" href="/#emergency">Аварийный вызов</a>
                                    <a class="nav-link" href="/#feedback">Отзывы</a>
                                    <a class="nav-link" href="/#contacts">Контакты</a>
                                </nav>
                            </div>

                            <div class="col-12 col-md-4 d-flex">

                                <div class="align-self-end w-100">
                                    <img src="/img/logo-v200y.png" class="bottom-logo img-fluid d-block mx-auto" alt="logo">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="bg-light p-3">
                    <div class="container">
                        <p class="mb-0">&copy;@php echo date('Y'); @endphp Компания «Дом быта 39» <a href="maito:info@dombyta39.ru">info@dombyta39.ru</a></p>
                    </div>
                </section>
            @show
        </footer>




        <!-- Scripts -->

        <script src="{{ mix('/js/app.js') }}"></script>
        @yield('scripts')
    </body>
</html>
