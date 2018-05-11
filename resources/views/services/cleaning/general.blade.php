@extends('layout')

@section('title', $data->title )

@section('content')
    <div class="content">


        <section class="container my-5">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item"><a href="/">Главная</a></li>
                    <li class="breadcrumb-item"><a href="/cleaning">Уборка</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{$data->title}}</li>
                </ol>
            </nav>

            <div class="title_black">
                <img src="/img/icons/clean-general-icon.png" class="img-fluid d-block mx-auto">
                <h1>{{$data->title}}</h1>
            </div>

            <p class="lead text-center">{{$data->description}}</p>

            <p class="display-4 text-center my-5">от 100&#8381; за кв.м.</p>

            <div class="title_black">
                <h3>Что входит в основную уборку</h3>
            </div>

            <p class="lead">В жилых помещениях и спальне</p>
            <ul>
                <li>Протираем все доступные горизонтальные поверхности;</li>
                <li>Протираем фасады шкафов (высотой до 2х метров);</li>
                <li>Протираем двери и дверную коробку с обеих сторон, включая выключатели и розетки, дверные ручки;</li>
                <li>Очищаем радиаторы отопления (доступные места);</li>
                <li>Очищаем подоконники от пыли и грязи;</li>
                <li>Протираем пыль с бытовой техники;</li>
                <li>Убираем пыль с аксуссуаров и предметов интерьера (вазы, рамы, картины и т.п.), осветительных приборов (кроме хрусталя);</li>
                <li>Моем зеркала;</li>
                <li>Протираем глянцевые поверхности шкафов-купе (высотой до 2-х метров), экраны ТВ и бытовой техники;</li>
                <li>Расставляем вещи и складываем одежду;</li>
                <li>Застилаем постель;</li>
                <li>Если Вы оставите комплект чистого постельного белья, то мы с радостью поменяем его;</li>
                <li>Пылесосим ковёр, протираем плинтусы и моем пол;</li>
                <li>Убираем мусор.</li>
            </ul>

            <p class="lead">На кухне</p>
            <ul>
                <li>Очищаем снаружи плиту(варочную панель) и духовой шкаф от грязи и жира;</li>
                <li>Протираем снаружи холодильник, СВЧ и бытовую технику;</li>
                <li>Очищаем столещницу, кухонный стол, подоконник от пыли, жира и грязи;</li>
                <li>Очищаем кухонный фартук, смеситель и раковину от грязи и жира;</li>
                <li>Моем полы;</li>
                <li>Пылесосим ковёр;</li>
                <li>Протираем плинтусы;</li>
                <li>Убираем мусор.</li>
            </ul>

            <p class="lead">В ванной комнате и туалете</p>
            <ul>
                <li>Протираем все доступные поверхности (высотой до 2-х метров), выключатели и розетки;</li>
                <li>Моем стену возле раковины, смесителя ванны и унитаза от загрязнений;</li>
                <li>Протираем двери и дверную коробку с обеих сторон;</li>
                <li>Протираем полотенцесушитель;</li>
                <li>Моем раковину, ванную (либо поддон душевой кабины), смесители от загрязнений;</li>
                <li>Моем зеркала;</li>
                <li>Моем и дезинфицируем унитаз, биде;</li>
                <li>Протираем плинтусы и моем пол;</li>
                <li>Убираем мусор.</li>
            </ul>

            <p class="lead">В коридоре и прихожей</p>
            <ul>
                <li>Протираем (высотой до 2- метров) все доступные поверхности мебели, включая встроенные открытые
                    ниши, выключатели и розетки, дверные ручки;</li>
                <li>Протираем все имеющиеся ниши в пределах досягаемости;</li>
                <li>Моем зеркала;</li>
                <li>Пылесосим коврики;</li>
                <li>Протираем плинтусы, моем пол;</li>
                <li>Убираем мусор.</li>
            </ul>

            <p class="lead text-center">После окончания работ клинер оценивает качество и сдает Вам чистую квартиру.
                При необходимости устраняет замечания.</p>




        </section>



       



    </div>
@endsection
