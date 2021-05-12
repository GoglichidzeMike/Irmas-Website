@extends('layouts.home')

@section('content')
    
<div class="w-full">
    <div class="bg-events-index bg-cover shadow-lg py-28">
      <h2 class="text-center text-white text-3xl mb-4 filter drop-shadow-xl uppercase">ჩვენი ივენთები და მარათონები</h2>
      <p class="text-center text-secondary filter drop-shadow-xl">აქ არის ჩვენი ივენთები, ლექციები და ყველაფერი საინტერესო რასაც ვნახავთ. <br> აქ იქნება სტატიები როგორც ირმასგან ასევე სხვა ტიპებისგან.</p>
    </div>

  <div class="w-8/12 mx-auto flex justify-between gap-6 -mt-20">
    <div class="grid grid-cols-3 gap-4">
      @if($events->count())
      @foreach ($events as $event)
      <div class="p-2 flex flex-col justify-between bg-white shadow-md rounded-lg transform hover:shadow-xl transition-shadow duration-300 ease-out">
        <div class="mb-6">
          <div class="relative">
            <img src="/uploads/image/{{ $event->image }}" class="mb-3 rounded-lg shadow-md" alt="{{ $event->name }}">

            @if($event->date || $event->duration)
              <div class="w-full absolute bottom-2 px-2">
                <div class="flex justify-center text-sm gap-10 shadow-inner py-1 px-2 mx-auto rounded-lg bottom-2 bg-white">
                  @if ($event->date)
                    <div class="flex">
                      <p class="text-primary  text-center mr-1">დასაწყისი: </p> 
                      <p class="font-medium text-primary text-center"> {{ $event->date }}</p>
                    </div>
                  @endif
                  @if ($event->duration)
                    <div class="flex">
                      <p class="text-primary text-center mr-1">ხანგრძლივობა: </p>
                      <p class="font-medium text-primary text-center"> {{ $event->duration }}</p>
                    </div>
                  @endif
                </div>
              </div>
            @endif

          </div>
          

          <a class="font-bold text-primary hover:text-secondary transition-colors duration-300 ease"" href="{{ route('public_event.show' , $event->slug) }}"><h2>{{ $event->name }}</h2></a>
        </div>



        <div class="flex justify-between items-center">
          <a href="{{ route('public_event.show' , $event->slug) }}" class="px-6 py-2 text-xs bg-primary text-white rounded-lg hover:bg-secondary uppercase">სრულად ნახვა</a>
          <p class="text-third text-xs">  {{   $event->created_at->toFormattedDateString() }}</p>
        </div>

      </div>    
      
      @endforeach
      
      {{ $events->links() }}
      
      @else
      <p>There are no events</p>    
      @endif
    </div>


  </div>
</div>

@endsection