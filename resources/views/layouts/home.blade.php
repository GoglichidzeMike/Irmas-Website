<!DOCTYPE html>
<html lang="en" style="scroll-behavior:smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Irma | Home</title>
</head>
<body class="bg-white min-h-screen flex justify-between flex-col overflow-visible">
  <a id="button"></a>
  <div class="nav w-full z-10 md:h-auto  overflow-hidden">
    <div class="py-4 w-95  xl:w-8/12 relative mx-auto md:flex justify-between items-center">
        <img src="/image/logo.png" class="w-10" alt="Irmas Logo">  
        <div class="burger absolute top-4 right-2 md:hidden cursor-pointer">
          <div class="line1"></div>
          <div class="line2"></div>
          <div class="line3"></div>
        </div>
      <ul class="flex flex-col md:flex-row md:items-center text-primary gap-2 my-4 md:m-0 md:gap-6">
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
          <a href="{{ route('about') }}" class="nav-link">ჩემს შესახებ</a>  
        </li>
      </ul>
      <a href="#contact" class="text-sm md:text-base bg-secondary py-2 px-8 shadow-md text-white rounded-xl hover:bg-primary hover:shadow-lg transition duration-300 ease-in-out focus:outline-none focus:ring-2 focus:ring-primary">კონტაქტი</a>
      </ul>
    </div>
  </div>

  @yield('content')


  <footer class="mt-32 bg-primary w-full">
    <div class="w-full lg:w-8/12  px-4 lg:px-0 py-4 text-white mx-auto flex flex-col sm:flex-row justify-between">
      <ul class="flex text-sm align-center gap-2">
        <li>
          <a href="{{ route('home') }}" class="text-xs sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">მთავარი</a>
        </li>
        <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
        <li>
          <a href="{{ route('blogs') }}" class="text-xs sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">სტატიები</a>
        </li>
        <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
        <li>
          <a href="{{ route('events') }}" class="text-xs sm:text-base py-3 hover:text-secondary focus:outline-none focus:text-secondary  transition duration-300 ease-out uppercase">ივენთები</a>
        </li>
        <div class="w-px h-auto bg-white bg-opacity-50 hidden sm:block"></div>
        <li>
          <a href="{{ route('about') }}" class="text-xs sm:text-base py-3 hover:text-secondary  focus:outline-none focus:text-secondary transition duration-300 ease-out uppercase">ჩემს შესახებ</a>  
        </li>
      </ul>
      <p class="text-sm hidden sm:block">Dev By - <a href="https://goglichidze.me" target="_blank" class="text-xs sm:text-base hover:text-secondary focus:outline-none focus:text-secondary transition duration-300 ease-out"> Mikael</a></p>
    </div>
  </footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
const navSlide = () => {
  const burger = document.querySelector(".burger");
  const nav = document.querySelector(".nav")


  burger.addEventListener("click", () => {
    //Toggle Nav
    nav.classList.toggle("nav-active");

    //Burger Animation
    burger.classList.toggle("toggle");
  });
};

navSlide();

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '100');
});



</script>



</body>
</html>