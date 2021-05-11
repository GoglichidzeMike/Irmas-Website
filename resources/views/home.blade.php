@extends('layouts.home')

@section('content')
    
<div class="bg-gray-100 w-44  h-3/5 absolute -z-1 top-0 right-0 rounded-bl-lg"></div>
<div class="w-full z-10">
  <div class="w-8/12 flex justify-between mx-auto">
    <div class="flex flex-col justify-center w-7/12 pr-8">
      <h1 class="text-4xl text-primary font-medium mt-6">მთავარი სათაური <span class="text-secondary">იქნება</span> აქ კიდე რაღაც ტექსტები <span class="text-secondary">ფსიქოლოგია</span> და რამე</h1>
      
      <p class="text-primary my-14">
        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა
      </p>
      
      <div>
        <a href="#contact" class="btn bg-primary text-white mr-6">კონტაქტი</a>
        <a href="/about-me" class="btn hover:text-white text-primary">ჩვენს შესახებ</a>
      </div>
    </div>
    <div class="w-5/12">
      <img src="/image/hero_irma.svg" class="max-w-md rounded-lg m-4 shadow-lg" alt="Irma">
    </div>
  </div>
</div>
<div class="w-full bg-primary py-20">
  <div class="w-8/12 m-auto flex items-center">
    <h2 class="text-3xl text-white w-8/12">
      მე შემიძლია <span class="text-secondary">თერაპიაში</span> და შემდეგ <span class="text-secondary">საკითხებში</span> დაგეხმარო
      და ეს მხოლოდ <span class="text-secondary">ზოგიერთი რამეა</span> რაშიც შეგვიძლია მუშაობა.
    </h2>
    <div class="illu">
      <img src="/image/illu.png" alt="Psychology Illustration" class="w-80">
    </div>
  </div>
  <div class="mx-auto w-8/12 flex justify-between my-10">
    <div class="flex flex-col w-72">
      <p class="text-gray-100 mb-2 font-medium">შფოთვა</p>
      <p class="text-gray-100 text-sm">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს</p>
    </div>
    <div class="flex flex-col w-72">
      <p class="text-gray-100 mb-2 font-medium">ფობია მეორე</p>
      <p class="text-gray-100 text-sm">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული</p>
    </div>
    <div class="flex flex-col w-72">
      <p class="text-gray-100 mb-2 font-medium">დამოკიდებულება</p>
      <p class="text-gray-100 text-sm">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის</p>
    </div>
    <div class="flex flex-col w-72">
      <p class="text-gray-100 mb-2 font-medium">დეპრესია</p>
      <p class="text-gray-100 text-sm">შემთხვევითად გენერირებული ტექსტი ეხმარება</p>
    </div>
  </div>
</div>

<div class="w-full bg-gray-100 pb-20">
  <div class="w-8/12 mx-auto flex justify-between">
    <div class="w-4/12 -mt-20">
      <img src="/image/irma-second.jpg" alt="Irma" class="rounded-lg shadow-md">
    </div>
    
    <div class="w-7/12">
      <h2 class="text-3xl text-dark font-medium my-6">ჩემი <span class="text-secondary">სერვისები</span></h2>
      <p class="w-11/12 text-third mb-6">
        შემთხვევითად გენერირებული ტექსტი <span class="text-dark">ეხმარება დიზაინერებს</span> და ტიპოგრაფიული ნაწარმის შემქმნელებს, <span class="text-dark"> რეალურთან მაქსიმალურად </span>მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა
      </p>
      <div class="card-container flex flex-col gap-6">
        <div class="card">
          <img src="/image/head-2.svg" alt="Brain Illustration" class="w-24 ml-4 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">ფსიქოთერაფია & ფსიქოლოგია</p>
            <p class="text-sm text-third">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს</p>
          </div>
        </div>
        <div class="card">
          <img src="/image/brain-1.svg" alt="Brain Illustration" class="w-24 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">ფსიქოგანათლება</p>
            <p class="text-sm text-third">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად </p>
          </div>
        </div>
        <div class="card">
          <img src="/image/head-1.svg" alt="Brain Illustration" class="w-24 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">ფიზიკური რაღაცა</p>
            <p class="text-sm text-third">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს</p>
          </div>
        </div>
        <div class="card">
          <img src="/image/brain-2.svg" alt="Brain Illustration" class="w-24 h-auto">
          <div class="div">
            <p class="text-primary font-medium text-md mb-4">სავარძელზე წამოწოლა</p>
            <p class="text-sm text-third">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს</p>
          </div>
        </div>
      </div>
      <div class="mt-6">
        <a href="/about" class="btn bg-primary text-white">ჩვენთან დაკავშირება</a>
      </div>
    </div>
  </div>  
</div>

@if($latest->count())
<div class="w-full bg-primary">
  <div class="w-8/12 mx-auto pt-14 pb-40">
    <h2 class="text-3xl text-white text-center font-medium">ბოლოს დამატებული <span class="text-secondary">სტატიები</span></h2>
  </div>

</div>
<div class="w-full mb-10">
  <div class="w-8/12 mx-auto -mt-32 latest grid grid-cols-3 gap-4">

    @foreach ($latest as $blog)
    <div class="p-2 flex flex-col justify-between bg-white shadow-md rounded-lg transform hover:-translate-y-1 hover:shadow-xl transition duration-300 ease ">
      <div class="mb-6">
        <img src="/uploads/image/{{ $blog->image }}" class="mb-3 rounded-lg shadow-md" alt="{{ $blog->name }}">
        <a class="font-bold text-primary hover:text-secondary transition-colors duration-300 ease" href="{{ route('public_blogs.show' , $blog->slug) }}"><h2>{{ $blog->name }}</h2></a>
      </div>
      
      <div class="flex justify-between items-center">
        <a href="{{ route('public_blogs.show' , $blog->slug) }}" class="px-6 py-2 text-xs bg-primary text-white rounded-lg hover:bg-secondary">სრულად ნახვა</a>
        <p class="text-third text-xs">  {{   $blog->created_at->toFormattedDateString() }}</p>
      </div>
    </div>    
    @endforeach

  </div>
</div>
@else
<p>There are no blogs</p>    
@endif

<div class="partners bg-gray-100 relative">
  <img src="/image/dots-bg.svg" alt="Pixels background" class="absolute top-2 left-0">
  <img src="/image/dots-bg.svg" alt="Pixels background" class="absolute bottom-2 right-0">
  <div class="w-8/12 mx-auto text-center mt-20 mb-28">
    <h2 class="text-primary text-3xl font-medium">პარტნიორები</h2>
    <p class="text-secondary mb-8">პარტნიორების ტექსტი, შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს <br/> და ტიპოგრაფიული ნაწარმის შემქმნელებს</p>
    <div class="flex flex-wrap gap-8">
      <div class="partner">
        <img src="/image/google.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">დასახელება მეორე</p>
      </div>
      <div class="partner">
        <img src="/image/snapchat.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">პარტნიორი მეორე</p>
      </div>
      <div class="partner">
        <img src="/image/tiktok.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">ფიგმუნდ ზროიდი</p>
      </div>
      <div class="partner">
        <img src="/image/youtube.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">ფსიქოლოგია</p>
      </div>
      <div class="partner">
        <img src="/image/snapchat-alt.svg" alt="Google Logo" class="mb-4">
        <p class="text-primary">მოკლე</p>
      </div>
    </div>
  </div>  
</div>

<div class="w-full py-20" id="contact">
  <h3 class="text-3xl font-medium text-primary text-center mb-4">დაგვიკავშირდით</h3>
  <p class="text-secondary text-center">აქედან შეგიძლიათ ჩვენთან დაკავშირება თუ გსურთ ჩაწერა</p>
  <p class="text-secondary text-center">რაღაცა ან უბრალოდ გასაუბრება</p>
  <div class="w-8/12 mx-auto rounded-lg shadow-xl px-4 py-6 flex justify-center">
    <div class="w-3/12 pl-6 pr-3 flex flex-col justify-center">
      <p class="text-primary font-primary font-medium text-center">კონტაქტის ფორმები</p>
      <div class="flex my-3">
        <img src="/image/contact/smartphone.svg" alt="Smartphone Icon" class="w-6">
        <p class="text-primary ml-4">+995 579 900 900</p>
      </div>
      <div class="flex my-3">
        <img src="/image/contact/mail.svg" alt="Smartphone Icon" class="w-6">
        <p class="text-primary ml-4">irma@irmaswebsite.ge</p>
      </div>
      <div class="flex my-3">
        <img src="/image/contact/contact_fb.svg" alt="Smartphone Icon" class="w-6">
        <p class="text-primary ml-4">fb.me/irmasfb</p>
      </div>
      <div class="flex my-3">
        <img src="/image/contact/contact_link.svg" alt="Smartphone Icon" class="w-6">
        <p class="text-primary ml-4">linked.in/irmapsy</p>
      </div>
    </div>
    <form action="" class="w-9/12 flex gap-x-10">
      <div class="w-1/2">
        <label for="name" class="text-primary block font-light mb-1">სახელი</label>
        <input type="text" name="name" id="name" autocomplete="off" placeholder="თქვენი სახელი" class="w-full mb-2 text-sm ring-1 ring-primary p-2 rounded-md shadow focus:outline-none focus:ring-2 focus:shadow-xl transition duration-400 ease-in-out">
        <label for="email" class="text-primary block font-light mb-1">მეილი</label>
        <input type="email" name="email" id="email" autocomplete="off" placeholder="თქვენი e-mail" class="w-full mb-2 text-sm ring-1 ring-primary p-2 rounded-md shadow focus:outline-none focus:ring-2 focus:shadow-xl transition duration-400 ease-in-out">
        <label for="phone" class="text-primary block font-light mb-1">სახელი</label>
        <input type="text" name="phone" id="phone" autocomplete="off" placeholder="თქვენი ტელეფონის ნომერი" class="w-full mb-2 text-sm ring-1 ring-primary p-2 rounded-md shadow focus:outline-none focus:ring-2 focus:shadow-xl transition duration-400 ease-in-out">
      </div>
      <div class="w-1/2">
        <label for="message" class="text-primary block font-light mb-1">შეტყობინება</label>
        <textarea name="message" id="message" rows="6" class="w-full mb-2 text-sm ring-1 ring-primary p-2 rounded-md shadow focus:outline-none focus:ring-2 focus:shadow-xl transition duration-400 ease-in-out"></textarea>
        <button type="submit" class="tracking-widest px-8 py-2 text-xs bg-primary text-white rounded-lg hover:bg-secondary transition-colors duration-300 ease-in-out">გაგზავნა</button>
      </div>
    </form>
  </div>

</div>

  
 @endsection