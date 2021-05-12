@extends('layouts.home')

@section('content')
    
<div class="w-full bg-gray-100">
  <div class="w-8/12 mx-auto flex py-20">
    <div class="w-6/12 flex flex-col justify-center">
      <p class="text-secondary text-sm ml-2">გამარჯობა, მე ვარ</p>
      <h1 class="text-5xl uppercase text-primary font-medium mb-6">ირმა კვაჭაძე</h1>
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


<div class="h-screen"></div>



@endsection