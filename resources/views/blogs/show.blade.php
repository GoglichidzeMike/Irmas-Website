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
        <div class="absolute md:flex flex-col items-center -ml-12 h-2.5 hidden" id="fixed"> <p class="uppercase text-xs font-medium">Share</p>
          <a href="{{ route('public_blogs.show' , $blog->slug) }}" data-image="article-1.jpg" data-title="Article Title" data-desc="Some description for this article" class="btnShare">
            <img src="/image/about/fb-share.svg" alt="Fb share" class="w-8 mb-2">
          </a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url={{ route('public_blogs.show' , $blog->slug) }}" target="popup" onclick="window.open('http://www.linkedin.com/shareArticle?mini=true&url={{ route('public_blogs.show' , $blog->slug) }}','name','width=600,height=400')" >
            <img src="/image/about/link-share.svg" alt="Fb share" class="w-8">
          </a>
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
      @foreach ($latest as $latest)
      <div class="p-3">
        <img src="/uploads/image/{{ $latest->image }}" class="mb-2 rounded-lg shadow-lg" alt="{{ $latest->name }}">
        <a class="font-bold text-sm text-primary text-center focus:outline-none focus:text-secondary hover:text-secondary transition-colors duration-300 ease-linear" href="{{ route('public_blogs.show' , $latest->slug) }}"><h2>{{ $latest->name }}</h2></a>
      </div>    
      <div class="h-px w-8/12 bg-primary mx-auto bg-opacity-60"></div>
        @endforeach
      @endif
    </div>
  </div>
</div>
<script>

</script>
<style>
  .fixed-header {
    position: fixed;
    top: 0;
    z-index: 10;
  }
</style>
@endsection