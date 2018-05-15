<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Отзыв с сайта</title>

<!-- Styles -->
        <style>

        </style>
    </head>
    <body>

        <p>Телефон: {{ $contacts['phone'] }}</p>
        <p>Имя: {{ $contacts['person'] }}</p>
        <p>Отзыв: {{ $contacts['feedback'] }}</p>

    </body>
</html>
