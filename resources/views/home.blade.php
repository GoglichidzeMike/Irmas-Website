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
      <h2 class="text-3xl text-dark font-medium my-10">ჩემი <span class="text-secondary">სერვისები</span></h2>
      <p class="w-11/12 text-third mb-6">
        შემთხვევითად გენერირებული ტექსტი <span class="text-dark">ეხმარება დიზაინერებს</span> და ტიპოგრაფიული ნაწარმის შემქმნელებს, <span class="text-dark"> რეალურთან მაქსიმალურად </span>მიახლოებული შაბლონი წარუდგინონ შემფასებელს. ხშირადაა შემთხვევა
      </p>
      <div class="cards flex flex-col gap-8">
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


@endsection