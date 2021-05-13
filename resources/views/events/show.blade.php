@extends('layouts.home')

@section('content')
    


<div class="w-full">
  <div class="w-full bg-primary pt-20 pb-32">
    <div class="w-6/12 mx-auto">
      <h2 class="text-3xl mb-1 font-medium filter drop-shadow-lg text-center text-white uppercase">{{ $event->name }}</h2>
      <p class="text-third text-center mb-4 text-sm">  {{   $event->created_at->toFormattedDateString() }}</p>
    </div>
  </div>
  <div class="w-8/12 mx-auto flex justify-between gap-8">
    <div class="w-9/12">
      <img src="/uploads/image/{{ $event->image }}" class="max-w-lg bg-white p-1 -mt-32 mx-auto" alt="{{ $event->name }}">
      <div class="">
        @if($event->date || $event->duration)
            <div class="flex justify-center gap-10 shadow-inner p-2 mx-auto my-6 rounded-md bottom-2 bg-primary">
              @if ($event->date)
                <div class="flex">
                  <p class="text-gray-100  text-center mr-2">დასაწყისი: </p> 
                  <p class="font-medium text-white text-center"> {{ $event->date }}</p>
                </div>
              @endif
              @if ($event->duration)
                <div class="flex">
                  <p class="text-gray-100 text-center mr-2">ხანგრძლივობა: </p>
                  <p class="font-medium text-white text-center"> {{ $event->duration }}</p>
                </div>
              @endif
            </div>
        @endif
        <div class="text-dark">
          {!! $event->body !!}
        </div>

         <div class="my-10">
          @include('dashboard.includes.register')
        </div>

      </div>
    </div>
    <div class="w-3/12 flex flex-col gap-2">
      <div class="">
        <p class="mb-2 text-primary font-medium text-lg text-center mt-4 uppercase tracking-widest">ბოლოს დამატებული</p>
        <div class="h-px w-full bg-primary mx-auto bg-opacity-60"></div>
      </div>
      @if($latest->count())
        @foreach ($latest as $event)
          <div class="p-3">
            <img src="/uploads/image/{{ $event->image }}" class="mb-2 rounded-lg shadow-lg" alt="{{ $event->name }}">
            <a class="font-bold text-sm text-primary text-center" href="{{ route('public_blogs.show' , $event->slug) }}"><h2>{{ $event->name }}</h2></a>
          </div>    
          <div class="h-px w-8/12 bg-primary mx-auto bg-opacity-60"></div>
        @endforeach
      @endif
    </div>
  </div>
</div>




@endsection