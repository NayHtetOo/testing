<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite(['resources/js/app.js'])
        {{-- <script src="{{ asset('app.js') }}"></script> --}}
        <title>Laravel</title>
    </head>
    <body>

        <ul id="list-messages">
            <li>Messages are here</li>
        </ul>

        <form action="" id="form">
            <label for="input-message">Message:</label>
            <input type="text" id="input-message" placeholder="Message......">
        </form>
    </body>
</html>
