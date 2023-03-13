<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> {{env('APP_NAME')}} | @yield('title', 'Home') </title>
    <link rel="icon" href="{{asset('img/portfolio_logo.png')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!--FontAwesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css' integrity='sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==' crossorigin='anonymous'/>

    <!-- Usando Vite -->
    @vite('resources/js/app.js')
</head>

<body>
    <div id="app">


        @include('includes.navbar')
        @include('includes.alert')
        @include('includes.validation')
        <main>
            @yield('content')
        </main>
    </div>

    @yield('scripts')

    <script>
        const deleteForms = document.querySelectorAll('.deleteForm');
        
        deleteForms.forEach(form => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const hasConfirmed = confirm("Sei sicuro di voler cancellare questo elemento, l'azione è irreversibile.");
                if(hasConfirmed) form.submit();
            })
        });

    </script>
</body>

</html>
