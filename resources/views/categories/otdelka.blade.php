@extends('layout')

@section('title', 'Отделка и ремонт в Калининграде')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/remont.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/remont.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/remont.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/remont.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex justify-content-end h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Отделка и ремонт</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">Компания «Дом Быта 39» предлагает своим клиентам заказать выполнение ремонта квартир,
                    а также множество различных услуг, связанных с комплексной отделкой любых помещений.
                    У нас работают только высококвалифицированные специалисты с большим опытом работы,
                    что позволяет нам не только гарантировать достойное качество, но и выполнять ремонт квартир
                    под ключ в кратчайшие сроки, независимо от уровня сложности проекта.
                </p>
            </div>
        </section>



       



    </div>
@endsection
