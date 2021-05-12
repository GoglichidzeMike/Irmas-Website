@extends('layouts.home')

@section('content')
    
<div class="w-full">
  <div class="w-full bg-primary pt-20 pb-32">
    <div class="w-6/12 mx-auto">
      <h2 class="text-3xl mb-1 font-medium filter drop-shadow-lg text-center text-white uppercase">{{ $blog->name }}</h2>
      <p class="text-third text-center mb-4 text-sm">  {{   $blog->created_at->toFormattedDateString() }}</p>
    </div>
  </div>
  <div class="w-8/12 mx-auto flex justify-between gap-8">
    <div class="w-9/12">
      <img src="/uploads/image/{{ $blog->image }}" class="max-w-lg bg-white p-1 -mt-32 mx-auto" alt="{{ $blog->name }}">
      <div class="my-3">
        {!! $blog->body !!}
      </div>
      <div class="flex flex-col mt-3">
        <a href="" class="font-bold">{{ $blog->user->name }}</a>
      </div>
    </div>
    <div class="w-3/12 flex flex-col gap-2">
      <div class="">
        <p class="mb-2 text-primary font-medium text-lg text-center mt-4">ბოლოს დამატებული</p>
        <div class="h-px w-full bg-primary mx-auto bg-opacity-60"></div>
      </div>
      @if($latest->count())
      @foreach ($latest as $blog)
      <div class="p-3">
        <img src="/uploads/image/{{ $blog->image }}" class="mb-2 rounded-lg shadow-lg" alt="{{ $blog->name }}">
        <a class="font-bold text-sm text-primary text-center" href="{{ route('public_blogs.show' , $blog->slug) }}"><h2>{{ $blog->name }}</h2></a>
      </div>    
      <div class="h-px w-8/12 bg-primary mx-auto bg-opacity-60"></div>
        @endforeach
      @endif
    </div>
  </div>
</div>

@endsection