@extends('layouts.home')

@section('content')
    
<div class="w-full">
  <div class="bg-blogs-index bg-cover shadow-lg pt-14 pb-28 md:py-28">
    <h1 class="text-center text-white text-2xl md:text-3xl mb-4 filter drop-shadow-xl uppercase">სტატიები და სიახლეები</h1>
    <p class="text-center text-secondary filter drop-shadow-xl mx-10 md:mx-0">გაეცანით უახლეს კვლევებს და ფსიქოთერაპიის თანამედროვე მიდგომებს</p>
  </div>
  <div class="w-95 md:w-10/12 xl:w-8/12 mx-auto flex justify-between gap-6 -mt-20">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      @if($blogs->count())
      @foreach ($blogs as $blog)
        <div class="p-2 flex flex-col justify-between bg-white shadow-md rounded-lg transform hover:shadow-xl transition-shadow duration-300 ease-out">
          <div class="mb-6">
            <img src="/uploads/image/{{ $blog->image }}" class="mb-3 rounded-lg shadow-md" alt="{{ $blog->name }}">
            <a class="font-bold text-primary hover:text-secondary transition-colors duration-300 ease-linear focus:outline-none focus:text-secondary" href="{{ route('public_blogs.show' , $blog->slug) }}"><h2>{{ $blog->name }}</h2></a>
          </div>
          
          <div class="flex justify-between items-center">
            <a href="{{ route('public_blogs.show' , $blog->slug) }}" class="px-6 py-2 text-xs bg-primary text-white rounded-lg hover:bg-secondary  transition-colors duration-300 ease-linear uppercase focus:outline-none focus:bg-secondary">სრულად ნახვა</a>
            <p class="text-third text-xs">  {{   $blog->created_at->toFormattedDateString() }}</p>
          </div>
        </div>
      @endforeach
      {{ $blogs->links() }}
      @else
        <p>There are no blogs</p>    
      @endif
    </div>
  </div>
</div>

@endsection