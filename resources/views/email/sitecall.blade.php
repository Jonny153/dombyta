<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Звонок с сайта</title>

<!-- Styles -->
        <style>

        </style>
    </head>
    <body>
    @if (isset($contacts['type']))
        <p>{{ $contacts['type'] }}</p>
    @endif
        <p>Телефон: {{ $contacts['phone'] }}</p>

        @if ($contacts['person'])
            <p>Имя: {{ $contacts['person'] }}</p>
        @endif

    </body>
</html>
