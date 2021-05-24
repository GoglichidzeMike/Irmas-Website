@extends('layouts.home')

@section('content')
    
<div class="w-full">
  <div class="w-95 md:w-10/12 xl:w-8/12 mx-auto md:flex py-10 md:py-20">
    <div class="w-full md:w-6/12 flex flex-col justify-center mr-6">
      <p class="text-secondary text-sm ml-1">გამარჯობა, მე ვარ</p>
      <h1 class="text-4xl md:text-5xl uppercase text-primary font-medium md:mb-6 tracking-wide">ირმა კვაჭაძე</h1>
      <p class="text-secondary uppercase">ფსიქოთერაპევტი</p>
      <p class="text-sm md:text-base text-dark my-6">
        შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი.
      </p>

      <div class="mt-10">
        <a href="#contact" class="btn tracking-widest bg-primary hover:bg-secondary text-white">დამიკავშირდი</a>
      </div>
    </div>
    <div class="w-full md:w-6/12 md:flex justify-center mt-10 md:m-0 hidden">
      <img src="/image/irma-about.jpg" class="max-w-sm xl:max-w-md rounded-md shadow-lg" alt="Irma">
    </div>
  </div>
</div>

<div class="w-full min-h-screen" id="experience">
  <div class="bg-primary h-52 w-full" style="z-index:-1">
  <div class="w-full md:w-7/12 mx-auto lg:m-0 h-full lg:ml-auto flex items-center">
      <h2 class="text-3xl lg:text-4xl mx-auto lg:mx-0 tracking-wide uppercase text-secondary drop-shadow-xl font-medium">გამოცდილება</h2>
  </div>  
  </div>
  <div class="w-95 md:w-10/12 2xl:w-8/12 mx-auto z-50 lg:flex justify-between">
    <div class="w-full lg:w-4/12 -mt-20 lg:-mt-32">
      <img src="/image/irma-second.jpg" alt="Irma" class="mx-auto max-w-xs lg:max-w-sm rounded-md shadow-md">

      <div class="mt-6 w-full flex  flex-col  items-center justify-center">
        <a href="#methods" class="btn tracking-wide mb-4 bg-primary hover:bg-secondary text-white hidden md:block">მუშაობის მეთოდები</a>
        <a href="#contact" class="btn tracking-widest bg-primary hover:bg-secondary text-white">ირმასთან კავშირი</a>
      </div>
    </div>

    <div class="w-full lg:w-7/12">
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
          <p class="font-medium text-primary">მეორე ძალიან მაგარი პოზიცია</p>
          <p class="text-secondary my-2 text-sm">სამუშაო ადგილი, მოკლე</p>
          <p class="text-third text-xs">November 2019 - January 2020</p>
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

<div class="w-full min-h-screen" id="methods">
  <div class="bg-primary h-40 md:h-52  w-full flex items-center justify-center" style="z-index:-1">
    <h2 class="text-2xl md:text-4xl tracking-wide uppercase text-secondary drop-shadow-lg font-medium">მუშაობის მეთოდები</h2>
  </div>
  <div class="w-95 md:w-11/12 xl:w-8/12 mx-auto flex flex-col md:flex-row justify-between gap-6">
    <div class="w-full md:w-5/12 flex flex-col items-center">

      <div class="max-w-lg rounded-lg shadow-lg p-4 border-2 border-gray-200 my-6 min-h-252">
        <h2 class="text-primary font-medium text-2xl mb-4 text-center">არტ - თერაპია</h2>
        <p class="text-dark">
          შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი.
        </p>
      </div>
      <div class="max-w-lg rounded-lg shadow-lg p-4 border-2 border-gray-200 my-6 min-h-252">
        <h2 class="text-primary font-medium text-2xl mb-4 text-center">სხელუზე ორიენტირებული ფსიქოთერაპია</h2>
        <p class="text-dark">
          შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი.
        </p>
      </div>

    </div>
    <div class="mx-auto w-6/12 md:w-1/12 lg:w-3/12">
      <img src="/image/about/books.jpg" alt="Books" class="md:-mt-12 mx-auto rounded-md shadow-md h-auto md:h-4/5 object-cover">
    </div>

    <div class="w-full md:w-5/12 flex flex-col items-center">

      <div class="max-w-lg rounded-lg shadow-lg p-4 border-2 border-gray-200 my-6 min-h-252">
        <h2 class="text-primary font-medium text-2xl mb-4 text-center">ფსიქოსინთეზისი</h2>
        <p class="text-dark">
          შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი.
        </p>
      </div>
      <div class="max-w-lg rounded-lg shadow-lg p-4 border-2 border-gray-200 my-6 min-h-252" >
        <h2 class="text-primary font-medium text-2xl mb-4 text-center">მეოთხე ძალიან მაგარი რაღაცა</h2>
        <p class="text-dark">
          შემთხვევითად გენერირებული ტექსტი ეხმარება დიზაინერებს და ტიპოგრაფიული ნაწარმის შემქმნელებს, რეალურთან მაქსიმალურად მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა, როდესაც დიზაინის შესრულებისას საჩვენებელია, თუ როგორი იქნება ტექსტის ბლოკი.
        </p>
      </div>

    </div>
  </div>
</div>


@include('dashboard.includes.contact')




@endsection