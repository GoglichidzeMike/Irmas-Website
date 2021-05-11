@extends('layouts.home')

@section('content')
    
<div class="bg-gray-200 w-44  h-3/5 absolute -z-1 top-0 right-0 rounded-bl-lg"></div>
<div class="w-full z-10">
  <div class="w-8/12 flex justify-between mx-auto">
    <div class="flex flex-col justify-center w-7/12 pr-8">
      <h1 class="text-3xl text-primary font-medium mt-6">მთავარი სათაური <span class="text-secondary">იქნება</span> აქ კიდე რაღაც ტექსტები <span class="text-secondary">ფსიქოლოგია</span> და რამე</h1>
      
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

@endsection