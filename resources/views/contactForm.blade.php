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

<h1 class="text-6xl text-center">LET'S GET IN TOUCH</h1>
            <p class="text-xl pb-4 text-center">We'll get back to you in 24h.</p>
            <div class="flex flex-wrap">
                
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                
                <div class="flex items-start">
                    
                  <div class="shrink-0">
                    <div class="p-4 bg-laravel rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <i class="fa-solid w-3 text-white fa-location-dot"></i>
                    </div>
                  </div>
                  
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">ADDRESS</p>
                    <p class="text-gray-500">Pejton Prishtine</p>
                    
                   
                  </div>
                </div>
              </div>
              <div class="mb-12 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex items-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-laravel rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <i class="fa-solid w-3 text-white fa-phone"></i>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">PHONE</p>
                    <p class="text-gray-500">+383 44 123 456</p>
                  </div>
                </div>
              </div>
              <div class="mb-12 md:mb-0 grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-laravel rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <i class="fa-solid w-3 text-white fa-envelope"></i>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">EMAIL</p>
                    <p class="text-gray-500">info@buysell.com</p>
                  </div>
                </div>
              </div>
              <div class="grow-0 shrink-0 basis-auto w-full md:w-6/12 px-3 lg:px-6">
                <div class="flex align-start">
                  <div class="shrink-0">
                    <div class="p-4 bg-laravel rounded-md shadow-md w-14 h-14 flex items-center justify-center">
                      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bug" class="w-5 text-white"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                          d="M511.988 288.9c-.478 17.43-15.217 31.1-32.653 31.1H424v16c0 21.864-4.882 42.584-13.6 61.145l60.228 60.228c12.496 12.497 12.496 32.758 0 45.255-12.498 12.497-32.759 12.496-45.256 0l-54.736-54.736C345.886 467.965 314.351 480 280 480V236c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v244c-34.351 0-65.886-12.035-90.636-32.108l-54.736 54.736c-12.498 12.497-32.759 12.496-45.256 0-12.496-12.497-12.496-32.758 0-45.255l60.228-60.228C92.882 378.584 88 357.864 88 336v-16H32.666C15.23 320 .491 306.33.013 288.9-.484 270.816 14.028 256 32 256h56v-58.745l-46.628-46.628c-12.496-12.497-12.496-32.758 0-45.255 12.498-12.497 32.758-12.497 45.256 0L141.255 160h229.489l54.627-54.627c12.498-12.497 32.758-12.497 45.256 0 12.496 12.497 12.496 32.758 0 45.255L424 197.255V256h56c17.972 0 32.484 14.816 31.988 32.9zM257 0c-61.856 0-112 50.144-112 112h224C369 50.144 318.856 0 257 0z">
                        </path>
                      </svg>
                    </div>
                  </div>
                  <div class="grow ml-6">
                    <p class="font-bold mb-1">Bug report</p>
                    <p class="text-gray-500">bugs@buysell.com</p>
  
                  </div>
                </div>
                
                

              </div>
              
            </div>
            <div class="mt-20 md:mb-12 lg:mb-0">
                <div class="map-container relative shadow-lg rounded-lg">
                    <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Pejton%20Prishtine+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  </section>



</div>