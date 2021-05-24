<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="ფსიქოლოგია ყოველდღიურ ცხოვრებაში. კლინიკური ფსიქოლოგი ირმა კვაჭაძე" />

  <meta property="og:site_name"          content="Psychotherapy.ge ფსიქოლოგია ყოველდღიურ ცხოვრებაში" />
  <meta property="og:type"               content="website" />
  <meta property="og:title"              content="{{ $title }}" />
  <meta property="og:locale"             content="ka_GE" />
  <meta property="og:description"        content="ფსიქოლოგია ყოველდღიურ ცხოვრებაში. კლინიკური ფსიქოლოგი ირმა კვაჭაძე" />
  <meta property="og:image"              content="@isset($image) {{ $image }} @endisset" />
  
  <link rel="stylesheet preload" as="style" href="{{ asset('css/app.css') }}">

  <script src="/js/app.js" defer></script>
  <script src="/js/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" rel="preload" as="script"></script>

  <title>{{ $title }}</title>
</head>

<body class="bg-white min-h-screen flex justify-between flex-col overflow-visible">
  <a id="button"></a>
  <div class="nav w-full z-10 md:h-auto  overflow-hidden">
    <div class="py-4 w-95  xl:w-8/12 relative mx-auto md:flex justify-between items-center">
      <a href="{{ route('home') }}">
        <img src="/image/logo.png" class="w-10" alt="Irmas Logo">  
      </a>
        <div class="burger absolute top-3 right-2 md:hidden cursor-pointer">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      <ul class="flex flex-col md:flex-row md:items-center text-primary space-y-2 my-4 md:m-0 md:space-x-6 md:space-y-0">
        <li>
          <a href="{{ route('home') }}" class="nav-link">მთავარი</a>
        </li>
        <li>
          <a href="{{ route('blogs') }}" class="nav-link">სტატიები</a>
        </li>
        <li>
          <a href="{{ route('events') }}" class="nav-link">ივენთები</a>
        </li>
        <li>
          <a href="{{ route('about') }}" class="nav-link">ჩემ შესახებ</a>  
        </li>
      </ul>
      <a href="/#contact" class="text-sm md:text-base bg-secondary py-2 px-8 shadow-md text-white rounded-xl hover:bg-primary hover:shadow-lg transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary">კონტაქტი</a>
      </ul>
    </div>
  </div>

  @yield('content')


  <footer class="mt-32 bg-primary w-full">
    <div class="w-full lg:w-8/12  px-4 lg:px-0 py-4 text-white mx-auto ">

      <ul class="text-sm align-center space-x-2 flex flex-row sm:justify-between">
        <div class="flex space-x-2">

          <div class="sm:flex sm:space-x-2">
            <li>
              <a href="{{ route('home') }}" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">მთავარი</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
            <li>
              <a href="{{ route('blogs') }}" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">სტატიები</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
          </div>
          <div class="sm:flex sm:space-x-2">
            <li>
              <a href="{{ route('events') }}" class="text-sm sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">ივენთები</a>
            </li>
            <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
            <li>
              <a href="{{ route('about') }}" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out uppercase">ჩემ შესახებ</a>  
            </li>
          </div>
        </div>
          
        <div class="sm:flex sm:space-x-2 align-center">
          <li>
            <a href="{{ route('dashboard') }}" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out uppercase">დეშბორდი</a>  
          </li>
          <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
          <li>
            <a href="https://goglichidze.me" target="_blank" rel="nofollow noreferrer" class="text-sm sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out">&copy; Mikael</a>  
          </li>
        </div>
      </ul>
        
    </div>
  </footer>
</body>
</html>