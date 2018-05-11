@extends('layout')

@section('title', 'Уборка квартиры, дома, офиса в Калининграде')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/cleaning.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/cleaning.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/cleaning.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/cleaning.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex justify-content-end h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Клининговые услуги</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">Надоело проводить отпуск, выходные и праздники за уборкой? Раздражают пыльные полы, грязные занавески
                    и пятна на мебели? Есть способ уйти от домашней рутины. Обратитесь к нам.
                    Профессионалы компании «Дом Быта 39» приведут вашу квартиру в порядок в кратчайшие сроки,
                    качественно, за разумные деньги. Мы справляемся с помещениями любого размера на самом высоком уровне!
                    Цена за уборку будет пропорциональна площади квартиры. Мы беремся за все виды уборки, в том числе за генеральную и ежедневную.
                    </p>
            </div>
        </section>

        <section class="container my-5">
            <div class="title_black">
                <a href="/cleaning/general"><img src="/img/icons/clean-general-icon.png" class="img-fluid d-block mx-auto"></a>
                <h2>Основная уборка</h2>
            </div>

            <p class="lead text-center">Основная уборка – это уборка, предназначенная для наведения тщательной
                чистоты и порядка в доме. Ее рекомендуется проводить хотя бы раз в месяц.</p>

            <p class="display-4 text-center my-5">от 100&#8381; за кв.м.</p>

            <div class="text-center py-3 mb-5 gray_bgr">
                <a href="/cleaning/general" class="btn btn-primary" >Подробнее</a>
            </div>

        </section>

        <section class="container my-5">
            <div class="title_black">
                <a href="/cleaning/express"><img src="/img/icons/clean-express-icon.png" class="img-fluid d-block mx-auto"></a>
                <h2>Экспресс уборка</h2>
            </div>

            <p class="lead text-center">Экспресс уборка – это уборка, предназначенная для поддержания чистоты в доме,
                она отлично подходит в качестве регулярной уборки, экономит Ваше время и деньги.</p>

            <p class="display-4 text-center my-5">от 50&#8381; за кв.м.</p>

            <div class="text-center py-3 mb-5 gray_bgr">
                <a href="/cleaning/express" class="btn btn-primary" >Подробнее</a>
            </div>

        </section>

        <section class="container my-5">
            <div class="title_black">
                <img src="/img/icons/clean-afterconstruct-icon.png" class="img-fluid d-block mx-auto">
                <h2>Уборка после ремонта</h2>
            </div>

            <p class="display-4 text-center my-5">от 150&#8381; за кв.м.</p>



        </section>



       



    </div>
@endsection
