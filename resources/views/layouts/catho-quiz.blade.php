<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700;900&family=Cormorant+Garamond:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <meta name="description"
          content="{{ $description ?? 'Catho-Quiz is an interactive web application designed to help users learn about the Catholic faith through engaging quizzes and educational content. It covers a wide range of topics including sacraments, church history, saints, and Catholic prayers and devotions.' }}">
    <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        .navlink {
            font-weight: bold;
            position: relative;
            outline: none !important;
            text-transform: uppercase;
            transition: 0.2s;
        }

        .navlink::after {
            content: "";
            background-color: #ff5c39;
            position: absolute;
            bottom: 0;
            left: 0;
            height: 3px;
            width: 0;
            transition: 0.2s;
        }

        .navlink:hover::after,
        .navlink:focus::after {
            width: 100%;
        }

        .modal-overlay {
            position: fixed;
            inset: 0;
            background-color: rgba(0, 0, 0, 0.6);
            backdrop-filter: blur(3px);
            z-index: 50;
        }
    </style>
</head>

<body>
<livewire:layout.navigation/>

<main>
    {{ $slot }}
</main>

<livewire:components.alert/>

@guest
    <livewire:auth.login/> {{-- Changed from @livewire to livewire: --}}
    <livewire:auth.register/>
@endguest

<x-layout.footer/>

@livewireScripts
</body>
</html>
