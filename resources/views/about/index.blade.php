@extends('layouts.home')

@section('content')
    
<div class="w-full bg-gray-100">
  <div class="w-8/12 mx-auto flex py-20">
    <div class="w-6/12 flex flex-col justify-center">
      <p class="text-secondary text-sm ml-1">გამარჯობა, მე ვარ</p>
      <h1 class="text-5xl uppercase text-primary font-medium mb-6 tracking-wide">ირმა კვაჭაძე</h1>
      <p class="text-secondary uppercase">ფსიქოთერაპევტი</p>
      
      <p class="text-dark my-6">
        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი.
      </p>

      <div class="mt-10">
        <a href="#contact" class="btn tracking-widest bg-primary hover:bg-secondary text-white">დამიკავშირდი</a>
      </div>
    </div>
    <div class="w-6/12 flex justify-center">
      <img src="/image/irma-about.jpg" class="max-w-md rounded-md shadow-lg" alt="Irma">
    </div>
  </div>
</div>

<div class="w-full relative" id="experience">
  <div class="bg-primary h-1/4 absolute w-full right-0 top-0" style="z-index:-1"></div>
  <div class="w-8/12 mx-auto py-20 z-50 flex justify-between">
    <div class="w-4/12">
      <img src="/image/irma-second.jpg" alt="Irma" class="max-w-md rounded-md shadow-md">
    </div>

    <div class="w-7/12 py-10">
      <h2 class="text-4xl tracking-wide uppercase text-secondary drop-shadow-xl text-medium mb-14">გამოცდილება</h2>
      <div class="">
        <div class="about-exp">
          <p class="font-medium text-primary">ფსიქოთერაპევტი, პოზიცია</p>
          <p class="text-secondary my-2 text-sm">სამუშაო ადგილი, გრძელიტ ტექსტიც არის შესაძლებელი</p>
          <p class="text-third text-xs">November 2019 - Present</p>
        </div>
        <div class="about-exp">
          <p class="font-medium text-primary">მეორე ძალიან მაგარი პოზიცია</p>
          <p class="text-secondary my-2 text-sm">სამუშაო ადგილი, მოკლე</p>
          <p class="text-third text-xs">November 2019 - January 2020</p>
        </div>
        <div class="about-exp">
          <p class="font-medium text-primary">ფსიქოთერაპევტი, პოზიცია</p>
          <p class="text-secondary my-2 text-sm">შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან</p>
          <p class="text-third text-xs">November 2019 - February 2021</p>
        </div>
        <div class="about-exp">
          <p class="font-medium text-primary">გრძელი თანამდებობის დასახელება, შემთხვევიტი ტექსტი</p>
          <p class="text-secondary my-2 text-sm">სამუშაო ადგილი, გრძელიტ ტექსტიც არის შესაძლებელი</p>
          <p class="text-third text-xs">November 2019 - Present</p>
        </div>
      </div>
    </div>
    
    
  </div>
</div>

<div class="w-full" id="experience">
  <div class="w-8/12 mx-auto">
    მუშაობის ფორმატი

    
  </div>
</div>

<div class="min-h-screen"></div>


@include('dashboard.includes.contact')




@endsection