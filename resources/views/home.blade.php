@extends('layouts.home')

@section('content')
    
<div class="bg-gray-100 w-44  h-570 absolute -z-1 top-0 right-0 rounded-bl-lg"></div>
<div class="w-full z-10">
  <div class="w-95  sm:w-10/12 lg:w-8/12 md:mb-20 xl:mb-0 md:flex justify-between mx-auto">
    <div class="flex flex-col justify-center w-full md:w-7/12  mx-auto md:pr-8">
      <h1 class="text-2xl sm:text-4xl text-primary font-medium mt-6 uppercase">
        Ფსიქოთერაპიული სივრცე <span class="text-secondary">ლაღი, ბედნიერი და ჰარმონიული</span> ცხოვრებისთვის
      </h1>
      <p class="text-primary my-6 sm:my-14">
        Მიიღე მხარდაჭერა და გაეცანი სანდო ინფორმაციას დარგის წამყვანი ფსიქოლოგების, ფსიქოთერაპევტებისა და ქოუჩებისგან 
      </p>
      <div class="mx-auto md:m-0">
        <a href="#contact" class="btn bg-primary text-white mr-2 sm:mr-6">კონტაქტი</a>
        <a href="{{ route('about') }}" class="btn hover:text-white text-primary">ჩვენ შესახებ</a>
      </div>
    </div>
    <div class="w-full md:w-5/12">
      <img src="/image/hero_irma.jpg" class="max-w-300 mx-auto my-4 lg:max-w-md rounded-lg md:m-4 shadow-lg" alt="Irma">
    </div>
  </div>
</div>
<div class="w-full bg-primary py-20">
  <div class="w-95 md:w-10/12 lg:w-8/12 m-auto md:flex items-center">
    <h2 class="text-xl md:text-3xl text-white w-95 md:w-8/12 uppercase mx-auto md:m-0">
      <span class="text-secondary">Სავსე ცხოვრების ალგორითმი - შინაგანი რესურსების აქტივაცია და ჯანსაღი კომუნიკაცია სამყროსთან</span>
    </h2>
    <div class="illu">
      <img src="/image/illu.png" alt="Psychology Illustration" class="max-w-300 md:w-80 mt-6 mx-auto md:m-0">
    </div>
  </div>

  <div class="mx-auto w-95 md:w-10/12 lg:w-8/12 flex flex-col md:flex-row justify-between items-center md:items-start my-10">
    <div class="flex flex-col w-72 text-center md:text-left my-6 md:m-0">
      <p class="text-gray-100 text-lg mb-2 font-medium uppercase ">Მე კონცეფცია</p>
      <p class="text-gray-100 text-sm">გაიცანი საკუთარი თავი და შექმენი მისი საუკეთესო ვერსია</p>
    </div>
    <div class="flex flex-col w-72 text-center md:text-left my-6 md:m-0">
      <p class="text-gray-100 text-lg mb-2 font-medium uppercase ">Მოთხოვნილება და მიზანი</p>
      <p class="text-gray-100 text-sm">მიაღწიე მიზანს მარტივად</p>
    </div>
    <div class="flex flex-col w-72 text-center md:text-left my-6 md:m-0">
      <p class="text-gray-100 text-lg mb-2 font-medium uppercase ">ტრანსფორმაცია</p>
      <p class="text-gray-100 text-sm">განთავისუფლდი წარსულს ნეგატივისგან უკეთესი მომავლისთვის</p>
    </div>
    <div class="flex flex-col w-72 text-center md:text-left my-6 md:m-0">
      <p class="text-gray-100 text-lg mb-2 font-medium uppercase ">Კომუნიკაცია</p>
      <p class="text-gray-100 text-sm">დაამყარე ჯანსაღი კომუნიკაცია მშობლებთან, პარტნიორთან და შვილებთან</p>
    </div>
  </div>
</div>

<div class="w-full bg-gray-100 pb-20">
  <div class="w-95 md:w-8/10 lg:w-8/12 mx-auto lg:flex justify-between">
    <div class="w-10/12 mx-auto lg:mx-0 md:w-4/12 -mt-20">
      <img src="/image/irma-new-1.jpg" alt="Irma" class="rounded-lg shadow-md">
    </div>
    
    <div class="w-95 lg:w-7/12 mx-auto lg:mx-0">
      <h2 class="text-2xl md:text-3xl text-center lg:text-left text-dark font-medium my-6 uppercase">Მხარდაჭერის <span class="text-secondary">ფორმები</span></h2>
      <p class="mx-auto lg:mx-0 text-sm sm:text-base w-11/12 text-third mb-6">
        Შენ შეგიძლია აირჩიო შენთვის ხელსაყრელი <span class="text-dark">მხარდაჭერის ფორმა</span>
      </p>
      <div class="card-container flex flex-col space-y-6">
        <div class="card">
          <img src="/image/head-2.svg" alt="Brain Illustration" class="w-16 sm:w-24 sm:ml-4 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">ინდივიდუალური ფსიქოთერაპია</p>
            <p class="text-sm text-third">მიიღე მხარდაჭერა ფსიქოთერაპიის/ქოუჩინგის ფორმატში სასურველი რეზულტატის მისაღებად</p>
          </div>
        </div>
        <div class="card">
          <img src="/image/brain-1.svg" alt="Brain Illustration" class="w-16 sm:w-24 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">ოჯახური კონსულტაცია</p>
            <p class="text-sm text-third">მიაღწიე ჰარმონიულ ურთიერთობებს და დაამყარე ჯანსაღი კონტაქტი<p>
          </div>
        </div>
        <div class="card">
          <img src="/image/head-1.svg" alt="Brain Illustration" class="w-16 sm:w-24 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">თემატური მარათონები</p>
            <p class="text-sm text-third">Ჩაერთე შენთვის საინტერესო მარათონში და გახადე თქვითშემეცნების პროცესი სასიამოვნო</p>
          </div>
        </div>
        <div class="card">
          <img src="/image/brain-2.svg" alt="Brain Illustration" class="w-16 sm:w-24 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">სასერტიფიკაციო სასწავლო ტრენინგები</p>
            <p class="text-sm text-third">შეისწავლე ფსიქოლოგიის უახლესი მიმართულებები როგორც ქართველ ასევე საერთაშორისო სპეციალისტებთან</p>
          </div>
        </div>
      </div>
      <div class="mt-6 flex md:block justify-center">
        <a href="/about" class="btn bg-primary text-white">მეტი ირმას შესახებ</a>
      </div>
    </div>
  </div>  
</div>

@if($latest->count())
<div class="w-full bg-primary">
  <div class="w-95 md:w-10/12 lg:w-8/12 mx-auto pt-14 pb-40">
    <h2 class="text-2xl md:text-3xl text-white text-center font-medium uppercase">ბოლოს დამატებული <span class="text-secondary">სტატიები</span></h2>
  </div>

</div>
<div class="w-full mb-32">
  <div class="w-95 lg:w-10/12 xl:w-8/12 mx-auto -mt-32 latest grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

    @foreach ($latest as $blog)
    <div class="p-2 flex flex-col justify-between bg-white shadow-md rounded-lg transform hover:-translate-y-1 hover:shadow-xl transition duration-300 ease-out max-w-412 mx-auto">
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

  </div>
</div>
@else
<p>There are no blogs</p>    
@endif

<div class="partners bg-gray-100 relative hidden">
  <img src="/image/dots-bg.svg" alt="Pixels background" class="absolute top-2 left-0 hidden xl:block">
  <img src="/image/dots-bg.svg" alt="Pixels background" class="absolute bottom-2 right-0 hidden xl:block">
  <div class="w-95 md:w-10/12 lg:w-8/12 mx-auto text-center mt-20 mb-28">
    <h2 class="text-primary text-2xl md:text-3xl font-medium uppercase mb-2">პარტნიორები</h2>
    <p class="text-secondary mb-8">პარტნიორების ტექსტი, შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს <br/> და ტიპოგრაფიული ნაწარმის შემქმნელებს</p>
    <div class="flex flex-wrap gap-6 justify-center">
      <div class="partner mb-4">
        <img src="/image/google.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">დასახელება მეორე</p>
      </div>
      <div class="partner mb-4">
        <img src="/image/snapchat.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">პარტნიორი მეორე</p>
      </div>
      <div class="partner mb-4">
        <img src="/image/tiktok.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">ფიგმუნდ ზროიდი</p>
      </div>
      <div class="partner mb-4">
        <img src="/image/youtube.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">ფსიქოლოგია</p>
      </div>
      <div class="partner mb-4">
        <img src="/image/snapchat-alt.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">მოკლე</p>
      </div>
    </div>
  </div>  
</div>

<div class="contact-container">
  @include('dashboard.includes.contact')
</div>
  
@endsection