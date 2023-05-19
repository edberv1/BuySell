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