<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Irma | Home</title>
</head>
<body class="bg-white min-h-screen flex justify-between flex-col overflow-visible">

  <div class="w-full ">
    <div class="py-4  w-8/12  mx-auto flex justify-between items-center">

      <div class="flex items-center">
        <img src="/image/logo.png" class="w-10" alt="Irmas Logo">  
        <p class="font-medium text-secondary ml-1">Psychology</p>
      </div>
      <ul class="flex items-center text-primary">
        <li>
          <a href="{{ route('home') }}" class="p-3">მთავარი</a>
        </li>
        <li>
          <a href="{{ route('blogs') }}" class="p-3">სტატიები</a>
        </li>
        <li>
          <a href="{{ route('events') }}" class="p-3">ივენთები</a>
        </li>
        <li>
          <a href="/about" class="p-3">ჩემს შესახებ</a>  
          {{-- TODO: change to route when available --}}
        </li>
      </ul>
        <a href="#contact" class="bg-secondary py-2 px-8 shadow-md text-white rounded-xl hover:bg-primary hover:shadow-lg transition duration-300 ease-in focus:outline-none focus:ring-2 focus:ring-primary">კონტაქტი</a>
      </ul>
    </div>
  </div>

      @yield('content')


    <footer class="mt-auto bg-primary w-full">
      <div class="w-8/12  py-4 text-white mx-auto flex justify-between">
        <ul class="flex">
          <li>
            <a href="{{ route('home') }}" class="p-3 hover:text-secondary transition duration-300 ease-out">მთავარი</a>
          </li>
          <div class="w-px h-auto bg-white bg-opacity-50"></div>
          <li>
            <a href="{{ route('blogs') }}" class="p-3 hover:text-secondary transition duration-300 ease-out">სტატიები</a>
          </li>
          <div class="w-px h-auto bg-white bg-opacity-50"></div>
          <li>
            <a href="{{ route('events') }}" class="p-3 hover:text-secondary transition duration-300 ease-out">ივენთები</a>
          </li>
          <div class="w-px h-auto bg-white bg-opacity-50"></div>
          <li>
            <a href="/about" class="p-3 hover:text-secondary transition duration-300 ease-out">ჩემს შესახებ</a>  
            {{-- TODO: change to route when available --}}
          </li>
        </ul>
        <p>Dev By - <a href="https://goglichidze.me" target="_blank" class="hover:text-secondary transition duration-300 ease-out"> Mikael</a></p>

      </div>
       


    </footer>

</body>
</html>