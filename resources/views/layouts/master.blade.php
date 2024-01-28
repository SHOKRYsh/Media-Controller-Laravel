<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('build/assets/app-67dcdfd2.css') }}">
        @yield('styles')
        <title>Laravel</title>

    </head>
    <body >
      @include('inc.nav')
      <div class="container">
            @include('inc.messages')
            @yield('content')
      </div>

      @yield('scripts')
    </body>
</html>
