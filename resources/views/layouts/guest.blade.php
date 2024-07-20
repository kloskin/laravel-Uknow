<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .bg-uknow{
                background-color: #88BDBC ;
            }
            .bg-gradient-uknow{
                background: rgb(37,78,88);
                background: linear-gradient(90deg, rgba(37,78,88,1) 50%, rgba(17,45,50,1) 100%);
            }
            .bg-color-uknow{
                color: #EDFAE9 !important;
            }
            .bg-white-uknow{
                background-color: #EDFAE9 ;
                color: black;
            }
        </style>
    </head>
    <body class="font-sans bg-color-uknow antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-uknow">
            <div>
                <a href="/">
                    <img src="{{ asset('images/logo-circle.svg') }}" alt="Logo Uknow" height="60" class="logo-uknow w-20 h-20">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gradient-uknow bg-color-uknow shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
