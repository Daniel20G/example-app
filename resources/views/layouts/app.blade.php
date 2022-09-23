
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{csrf_token()}}">


        <title>@yield('title')</title>

        @vite(['/resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body>
       <div id="app" >
            @include('layouts.menu')
            <!-- se cambiar en run me -->
            <div class="col-sm-12">
                @yield('content')
            </div>


        </div>
       @livewireScripts
    </body>
</html>
