@extends('layouts.home')

@section('content')
    
<div class="w-full">
  <div class="w-full bg-primary pt-20 pb-32">
    <div class="w-full md:w-6/12 mx-auto">
      <h2 class="text-3xl mb-1 font-medium filter drop-shadow-lg text-center text-white uppercase">{{ $blog->name }}</h2>
      <p class="text-third text-center mb-4 text-sm">  {{   $blog->created_at->toFormattedDateString() }}</p>
    </div>
  </div>
  <div class="w-95 md:w-11/12 lg:w-8/12 mx-auto md:flex justify-between gap-8">
    <div class="w-full md:w-9/12">
      <img src="/uploads/image/{{ $blog->image }}" class="md:max-w-lg bg-white p-1 -mt-32 mx-auto" alt="{{ $blog->name }}">
      <div class="my-4 text-darker relative">
        <div class="absolute md:flex flex-col items-center -ml-12 h-2.5 hidden" id="fixed">
          <p class="uppercase text-xs font-medium">Share</p>
          <img src="/image/about/fb-share.svg" alt="Fb share" class="w-8 mb-2">
          <img src="/image/about/link-share.svg" alt="Fb share" class="w-8">
        </div>
        {!! $blog->body !!}
      </div>
      <div class="w-full flex my-10">
        <a href="{{ route('home') }}" class="show-btn">მთავარ გვერდზე დაბრუნება</a>
        <a href="{{ route('blogs') }}" class="show-btn">სტატიების გვერდზე დაბრუნება</a>
      </div>
    </div>
    <div class="w-full md:w-3/12 flex flex-col gap-2">
      <div class="">
        <p class="mb-2 text-primary font-medium text-lg text-center mt-4 uppercase tracking-widest">ბოლოს დამატებული</p>
        <div class="h-px w-full bg-primary mx-auto bg-opacity-60"></div>
      </div>
      @if($latest->count())
      @foreach ($latest as $blog)
      <div class="p-3">
        <img src="/uploads/image/{{ $blog->image }}" class="mb-2 rounded-lg shadow-lg" alt="{{ $blog->name }}">
        <a class="font-bold text-sm text-primary text-center focus:outline-none focus:text-secondary hover:text-secondary transition-colors duration-300 ease-linear" href="{{ route('public_blogs.show' , $blog->slug) }}"><h2>{{ $blog->name }}</h2></a>
      </div>    
      <div class="h-px w-8/12 bg-primary mx-auto bg-opacity-60"></div>
        @endforeach
      @endif
    </div>
  </div>
</div>
<script>

  $(document).ready(function() {
    // Get the current top location of the nav bar.
    var stickyNavTop = $('#fixed').offset().top;
  
    // Set the header's height to its current height in CSS
    // If we don't do this, the content will jump suddenly when passing through stickyNavTop.
    $('header').height($('header').height());
  
    $(window).scroll(function(){
        if ($(window).scrollTop() >= stickyNavTop) {
            $('#fixed').addClass('fixed-header');
        } else {
            $('#fixed').removeClass('fixed-header');
        }
    });
  });
</script>
<style>
  .fixed-header {
    position: fixed;
    top: 0;
    z-index: 10;
  }
</style>



<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
  fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  {{-- <div class="fb-share-button" 
  data-href="{{ route('blogs') }}/{{ $blog->slug}}" 
  data-layout="button_count">
</div> --}}



@endsection