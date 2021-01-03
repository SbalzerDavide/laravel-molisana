<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;600&family=Playfair+Display:wght@400;800;900&family=Poppins:wght@900&family=Teko:wght@300&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div id="app">
            @include('partials.loader')

            <div class="page" v-if="load">
                <!-- header -->
                @include('partials.header')
    
    
                <main>
                    @yield('content')
                </main>
    
    
    
    
                <!-- footer -->
                @include('partials.footer')

            </div>

        </div>

        <!-- script -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
