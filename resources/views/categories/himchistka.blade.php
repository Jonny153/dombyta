@extends('layout')

@section('title', 'Услуги сантехника')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/himchistka.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/himchistka.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/himchistka.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/himchistka.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex justify-content-end h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Химчистка</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">
                    Компания «Дом Быта 39» использует химию европейского качества и специализированное оборудование
                    при химчистке мягкой мебели и ковровых покрытий. Осуществляйте постоянный уход за мебелью,
                    и ваши кресла и диваны долгие годы будут выглядеть как новые, потому что химчистка помогает
                    сохранить цвета и краски обивки яркими.

                </p>
            </div>
        </section>



       



    </div>
@endsection
