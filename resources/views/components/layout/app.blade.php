<!doctype html>
<html lang="{{str_replace('_','-',app()->getLocale())}}" class="dark">
<head>
  <meta charset="utf-8">
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="//unpkg.com/alpinejs" defer></script>
  <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script> -->
  <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>
    <!-- <link href="{{asset('css/app.css')}}"></link>rel ="stylesheet" -->
<title>Laravel</title>
</head>
<body class="antialiased text-gray-800 dark:text-gray-200">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
    <!-- ====== Navbar Section Start -->
<x-layout.navbar></x-layout.navbar>
{{$slot}}
<x-layout.footer></x-layout.footer>
</div>

    <!-- <script src="{{asset('js/app.js')}}"></script> -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>