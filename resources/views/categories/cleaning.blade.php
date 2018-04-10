@extends('layout')

@section('title', 'Услуги сантехника')

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



       



    </div>
@endsection
