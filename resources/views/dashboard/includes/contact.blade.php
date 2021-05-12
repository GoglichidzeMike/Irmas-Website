<div class="w-full py-20" id="contact">
  <h3 class="text-3xl font-medium text-primary text-center mb-4">დაგვიკავშირდით</h3>
  <p class="text-secondary text-center">აქედან შეგიძლიათ ჩვენთან დაკავშირება თუ გსურთ ჩაწერა</p>
  <p class="text-secondary text-center">რაღაცა ან უბრალოდ გასაუბრება</p>
      @if (session('status'))
        <div class="text-center animate-pulse text-primary font-medium my-4">
            {{ session('status') }} 
        </div>
      @endif
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
    <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data" class="w-9/12 flex gap-x-10">
      @csrf
      <div class="w-1/2">
        <label for="name" class="text-primary block font-light mb-1">სახელი</label>
        <input type="text" name="name" id="name" autocomplete="off" placeholder="თქვენი სახელი" class="input" value="{{ old('name') }}" @error('name') border-red-500 @enderror>
        <label for="email" class="text-primary block font-light mb-1">მეილი</label>
        <input type="email" name="email" id="email" autocomplete="off" placeholder="თქვენი e-mail" class="input" value="{{ old('email') }}"  @error('email') border-red-500 @enderror>
        <label for="phone" class="text-primary block font-light mb-1">ტელეფონი</label>
        <input type="text" name="phone" id="phone" autocomplete="off" placeholder="თქვენი ტელეფონის ნომერი" class="input" value="{{ old('phone') }}" @error('phone') border-red-500 @enderror>
      </div>
      <div class="w-1/2">
        <label for="message" class="text-primary block font-light mb-1">შეტყობინება</label>
        <textarea name="message" id="message" rows="6" class="input" value="{{ old('message') }}" @error('message') border-red-500 @enderror></textarea>
        <button type="submit" class="tracking-widest px-8 py-2 text-xs bg-primary text-white rounded-lg hover:bg-secondary transition-colors duration-300 ease-in-out">გაგზავნა</button>
      </div>
    </form>
  </div>
</div>