@extends('layout')

@section('title', 'Вызов сантехника в Калининграде')

@section('content')
    <div class="content">
        <section class="heading">
            <picture>
                <source srcset="/img/slider/1920x800/santehnik.jpg" media="(min-width: 1400px)">
                <source srcset="/img/slider/1400x700/santehnik.jpg" media="(min-width: 769px)">
                <source srcset="/img/slider/800x500/santehnik.jpg" media="(min-width: 577px)">
                <img srcset="/img/slider/600x500/santehnik.jpg" alt="responsive image" class="d-block img-fluid">
            </picture>
            <div class="capture">
                <div class="container d-flex h-50">
                    <span data-toggle="modal" data-target="#callModal" class="btn btn-xl btn-primary align-self-end wow bounceIn" data-wow-duration="1s" data-wow-delay="2s">Вызвать мастера</span>
                </div>
                <div class="container d-flex h-50 pb-5">
                    <h1 class="display-1 text-light mx-auto align-self-end wow bounceInDown" data-wow-duration="1s" data-wow-delay="1s">Услуги сантехника</h1>
                </div>
            </div>
        </section>

        <section class="gray_bgr intro">
            <div class="container p-2 p-md-5">
                <p class="text-center lead">Компания «Дом Быта 39» оказывает жителям Калининграда и Калининградской области
                    весь спектр сантехнических услуг.
                    Нужно устранить засор трубы, установить смеситель, подключить стиральную или посудомоечную машину, провести монтаж ванны, унитаза и умывальника? Необходимо установить душевую кабину? Канализационная система нуждается в капитальном ремонте? Необходимо заменить радиатор отопления? Или необходимо проектирование и монтаж системы водоснабжения, отопления и канализации в частном доме или на даче? Требуются срочные сантехнические работы? Мы поможем оперативно и в любое время суток решить возникшие проблемы! Качественно, с гарантией и в удобное для Вас время!
                Наши специалисты предоставляют услуги круглосуточно и без выходных.
                    К нам можно обратиться независимо от дня и времени суток.
                    Мы оперативно реагируем на обращения клиентов и в кратчайшие сроки избавляем их от возникших проблем.</p>
            </div>
        </section>

        <section class="black_texture_bgr pb-5" id="toggle">
            <div class="container">
                <div class="title_white">
                    <h2>Экстренный вызов сантехника</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 col-lg-3 icon-font">
                        <a href="#" class="simple-link" data-noscroll data-toggle="modal" data-target="#callModal">
                            <i class="fas fa-exclamation-triangle text-primary"></i>
                            <small class="text-info">круглосуточно</small>
                        </a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <p class="text-info text-center lead">
                            Если у вас произошла аварийная ситуация, прорвало трубу, засорилась канализация,
                            отломился кран, потекла батарея или возникла любая другая проблема, требующая немедленного
                            устранения, звоните <a class="tel-context-dark" href="tel:+74012337434">33-74-34</a> или
                            <a class="tel-context-dark" href="tel:+79637387434">+7-963-738-7434</a> и наши специалисты
                            немедленно приедут и устранят проблему. Также вы можете заполнить форму ниже и мы
                            свяжемся с вами в ближайшее время.
                        </p>
                        <form class="outline-primary" id="staticCallForm" action="/call" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="Экстренный вызов сантехника">
                            <div class="form-row">
                                <div class="col-md-5 mb-1 form-group">
                                    <input type="text" class="form-control" name="person" placeholder="Ваше имя">
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



        <section class="container my-5">
            <div class="title_black">
                <img src="/img/icons/sink-icon.png" class="img-fluid d-block mx-auto">
                <h2>Сантехника</h2>
            </div>

            <p class="lead text-center">Компания «Дом Быта 39» оказывает все виды услуг по установке и замене сантехники в Калининграде и Калининградской области</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-primary">Наименование услуги</th>
                            <th scope="col" class="text-primary">Цена</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Установка и замена смесителя</td>
                            <td>от 1000&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и замена раковины</td>
                            <td>от 1500&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и замена унитаза</td>
                            <td>от 1500&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и замена ванны</td>
                            <td>от 1500&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и подключение душевой кабины</td>
                            <td>от 3000&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и подключение стиральной машины</td>
                            <td>от 1500&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и подключение посудомоечной машины</td>
                            <td>от 1500&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и замена сифона</td>
                            <td>от 1000&#8381;</td>
                        </tr>
                        <tr>
                            <td>Установка и замена полотенцесушителя</td>
                            <td>от 1000&#8381;</td>
                        </tr>
                        <tr>
                            <td>Замена шлангов гибкой подводки</td>
                            <td>от 1000&#8381;</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </section>


        <section class="container my-5">
            <div class="title_black">
                <img src="/img/icons/water-icon.png" class="img-fluid d-block mx-auto">
                <h2>Водоснабжение</h2>
            </div>

            <p class="lead text-center">Монтаж систем водоснабжения связан с решением целого ряда технических задач:
                непрерывная подача воды, стабильное давление в трубопроводе. Подключение потребителей требует
                не только навыков, но и специализированного образования. Компания «Дом Быта 39» поможет вам решить
                комплексно весь спектр вопросов от проекта до ввода в эксплуатацию. В нашем распоряжении штат
                инженеров и рабочих, а также возможность снабжения всем необходимым от начала и до конца монтажных работ.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-primary">Наименование услуги</th>
                        <th scope="col" class="text-primary">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Проектирование системы водоснабжения</td>
                        <td>Договорная</td>
                    </tr>
                    <tr>
                        <td>Монтаж системы водоснабжения</td>
                        <td>от 1000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Врезка системы водоснабжения</td>
                        <td>Договорная</td>
                    </tr>
                    <tr>
                        <td>Установка, замена и ремонт насосной станции</td>
                        <td>от 2500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка и замена глубинного насоса</td>
                        <td>от 2500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка и замена редуктора давления</td>
                        <td>от 1000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка и замена очистных фильтров</td>
                        <td>от 1500&#8381;</td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </section>

        <section class="container my-5">
            <div class="title_black">
                <img src="/img/icons/sewer-icon.png" class="img-fluid d-block mx-auto">
                <h2>Канализация</h2>
            </div>

            <p class="lead text-center">Специалисты компании «Дом Быта 39» быстро и профессионально выполнят работы
                по монтажу канализационных труб и подключению сантехнического оборудования в квартирах,
                частных домах или офисах. Также возможно проектирование и установка автономной системы канализации с
                учетом пожеланий заказчика и особенностей объекта.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-primary">Наименование услуги</th>
                        <th scope="col" class="text-primary">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Устранение засоров</td>
                        <td>от 1500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Проектирование системы канализации</td>
                        <td>Договорная</td>
                    </tr>
                    <tr>
                        <td>Монтаж системы канализации</td>
                        <td>от 1000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Врезка системы канализации</td>
                        <td>Договорная</td>
                    </tr>
                    <tr>
                        <td>Копка и монтаж септика</td>
                        <td>от 10000&#8381;</td>
                    </tr>


                    </tbody>
                </table>
            </div>

        </section>

        <section class="container my-5">
            <div class="title_black">
                <img src="/img/icons/heat-icon.png" class="img-fluid d-block mx-auto">
                <h2>Отопление</h2>
            </div>

            <p class="lead text-center">Компания «Дом Быта 39» осуществляет проектирование, установку и обслуживание
                систем отопления в помещениях различных типов и площадей в Калининграде. Специалисты нашей компании
            подберут оптимальный вариант системы отопления для вашего дома или офиса. Мы работаем с такими материалами
                как медь, шитый полиэтилен, металлопластик, полипропилен.</p>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-primary">Наименование услуги</th>
                        <th scope="col" class="text-primary">Цена</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Проектирование системы отопления</td>
                        <td>Договорная</td>
                    </tr>
                    <tr>
                        <td>Монтаж системы отопления</td>
                        <td>от 2000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Врезка системы отопления</td>
                        <td>Договорная</td>
                    </tr>
                    <tr>
                        <td>Монтаж котельной</td>
                        <td>от 5000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка, замена и чистка бойлера</td>
                        <td>от 2000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка и замена газового котла отопления</td>
                        <td>от 3500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка и замена жидкотопливного котла отопления</td>
                        <td>от 5000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Установка и замена твердотопливного котла отопления</td>
                        <td>от 5000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Промывка системы отопления</td>
                        <td>от 3000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Монтаж и замена радиатора</td>
                        <td>от 2500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Монтаж и замена циркуляционного насоса</td>
                        <td>от 1500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Монтаж коллектора отопления лучевой разводки</td>
                        <td>от 3000&#8381;</td>
                    </tr>
                    <tr>
                        <td>Монтаж гидроаккумулятора расширительного бака</td>
                        <td>от 1500&#8381;</td>
                    </tr>
                    <tr>
                        <td>Монтаж теплопункта</td>
                        <td>Договорная</td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </section>

        <section class="black_texture_bgr">
            <div class="container py-5">

                <div class="row">

                    <div class="col-12">
                        <p class="text-info text-center lead">
                            Если вы не нашли интересующую вас услугу, позвоните по телефонам <a class="tel-context-dark" href="tel:+74012337434">33-74-34</a> или
                            <a class="tel-context-dark" href="tel:+79637387434">+7-963-738-7434</a> и наши специалисты
                            сделают все возможное, чтобы вы получили желаемую услугу. Также вы можете заполнить форму ниже и мы
                            свяжемся с вами в ближайшее время.
                        </p>
                        <form class="outline-primary" id="staticCallForm" action="/call" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="type" value="Вызов сантехника">
                            <div class="form-row">
                                <div class="col-md-5 mb-1 form-group">
                                    <input type="text" class="form-control" name="person" placeholder="Ваше имя">
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

    </div>
@endsection
