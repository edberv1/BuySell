<div class="container my-24 px-6 mx-auto" id="contact">
<section class="mb-32 text-gray-800">

    <div class="relative overflow-hidden bg-no-repeat bg-cover"
      style="background-position: 50%; height: 300px;">

      <video autoplay muted loop >
        <source src="{{ asset('images/contact.mp4') }}" type="video/mp4">
      </video>
    </div>

    
    <div class="container text-gray-800 px-4 md:px-12">
      <div class="block rounded-lg shadow-lg py-10 md:py-12 px-2 md:px-6"
        style="margin-top: -100px; background: hsla(0, 0%, 100%, 0.8); backdrop-filter: blur(30px);">
        <div class="flex flex-wrap">
          <div class="grow-0 shrink-0 basis-auto w-full xl:w-5/12 px-3 lg:px-6 mb-12 xl:mb-0">
            
            @if(Session::has('success'))
            <div class="text-green-500 text-xs mt-1">
                {{Session::get('success')}}
            </div>
            @endif

            <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
{{ csrf_field() }}                    

<div class="relative mb-4">
<label for="name" class="leading-7 text-sm text-gray-600">
Name
</label>
<input type="text" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('name') }}">


@if ($errors->has('name'))
        <span class="text-red-500 text-xs mt-1">{{ $errors->first('name') }}</span>
@endif
</div>

<div class="relative mb-4">
<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
<input type="text" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('email') }}">
@if ($errors->has('email'))
        <span class="text-red-500 text-xs mt-1">{{ $errors->first('email') }}</span>
@endif
</div>

<div class="relative mb-4">
<label for="password2" class="leading-7 text-sm text-gray-600">
Phone:
</label>
<input type="text" name="phone" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('phone') }}">

@if ($errors->has('phone'))
    <span class="text-red-500 text-xs mt-1">{{ $errors->first('phone') }}</span>
@endif

</div>

<div class="relative mb-4">
<label for="password2" class="leading-7 text-sm text-gray-600">
Subject:
</label>
<input type="text" name="subject" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="{{ old('subject') }}">

@if ($errors->has('subject'))
        <span class="text-red-500 text-xs mt-1">{{ $errors->first('subject') }}</span>
    @endif

</div>

<div class="relative mb-4">
<label for="password2" class="leading-7 text-sm text-gray-600">
Message:
</label>
<textarea name="message" rows="3" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('message') }}</textarea>

@if ($errors->has('message'))
    <span class="text-red-500 text-xs mt-1">{{ $errors->first('message') }}</span>
@endif
</div>

<button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
Submit
</button>
</form>
</div>