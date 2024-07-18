<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
     <!-- Scripts -->
     @vite(['resources/scss/app.scss', 'resources/js/app.js'])
  </head>
  <body class="antialiased">
    <div class="d-flex flex-column flex-lg-row">
      <div class="flex-lg-1 h-lg-screen overflow-y-lg-auto vstack">
        @include('layouts.header')
        <div class="@if (Route::currentRouteName() != 'login') @endif h-full">
          @yield('content')
        </div>
        @include('layouts.footer')
      </div>
    </div>

    @yield('script')
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  </body>
</html>
