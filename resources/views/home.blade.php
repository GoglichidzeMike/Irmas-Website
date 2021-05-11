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
<div class="w-full bg-primary py-20 mb-10">
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

@endsection