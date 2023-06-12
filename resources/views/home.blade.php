
    <x-layout>


        <section class="mb-10">
            <div class="overflow-hidden object-content" style="height: 500px; ">
                <video autoplay muted loop id="vid">
                    <source src="{{ asset('images/video.mp4') }}" type="video/mp4">

                </video>
            </div>

            <div class="container mx-auto px-6 md:px-12 xl:px-32">
              <div class="text-center text-gray-800">
                <div class="block rounded-lg shadow-lg px-6 py-12 md:py-16 md:px-12" style="margin-top: -170px; background: hsla(0, 0%, 100%, 0.7); backdrop-filter: blur(30px);">
                  <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-12">The best offers on the market <br /><span class="text-laravel">for you.</span></h1>
                  <a class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-laravel text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-black hover:shadow-lg focus:bg-black focus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition duration-150 ease-in-out animate-bounce" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/register" role="button">Get started</a>
                  <a class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-laravel text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-black hover:shadow-lg focus:bg-blackfocus:shadow-lg focus:outline-none focus:ring-0  active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="#contact" role="button">Conact Us</a>
                </div>
              </div>
            </div>
          </section>



        <div class="lg:grid lg:grid-cols-4 lg:justify-between gap-5 md:mx-4">

            @unless(count($listings) == 0)
                @foreach ($listings as $listing)
                    <x-listing-card :listing="$listing"/>
                @endforeach
            @else
                <p>No posts founds.</p>
            @endunless
        </div>


        <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:text-center">
      <h2 class="text-base font-semibold leading-7 text-laravel">Accelerate Your Car Selling-Buying Process</h2>
      <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Unlocking the Road to Car Sales</p>
      <p class="mt-6 text-lg leading-8 text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium modi autem iste temporibus nostrum esse vero, maxime itaque voluptas expedita?</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
      <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-10 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-laravel">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
              </svg>
            </div>
            Lightning-Fast Listings
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">With our innovative platform, you can create and publish car listings in record time. Within minutes, your inventory will be showcased to potential buyers, capturing their attention and driving sales.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-laravel">
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5"><path fill="currentColor" d="M7 15h2c0 1.08 1.37 2 3 2s3-.92 3-2c0-1.1-1.04-1.5-3.24-2.03C9.64 12.44 7 11.78 7 9c0-1.79 1.47-3.31 3.5-3.82V3h3v2.18C15.53 5.69 17 7.21 17 9h-2c0-1.08-1.37-2-3-2s-3 .92-3 2c0 1.1 1.04 1.5 3.24 2.03C14.36 11.56 17 12.22 17 15c0 1.79-1.47 3.31-3.5 3.82V21h-3v-2.18C8.47 18.31 7 16.79 7 15Z"/></svg>
            </div>
            Dynamic Pricing Insights
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Pricing your cars effectively is crucial to attract buyers. Our powerful pricing tools provide real-time market insights, enabling you to set competitive and profitable prices for your inventory.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-laravel">
              <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
              </svg>
            </div>
            Rapid Customer Engagement
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">Time is of the essence when it comes to engaging with potential buyers. Our integrated communication system enables you to respond swiftly to inquiries, whether through instant messaging, email, or phone calls.</dd>
        </div>
        <div class="relative pl-16">
          <dt class="text-base font-semibold leading-7 text-gray-900">
            <div class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-lg bg-laravel">
            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
              </svg>
            </div>
            Security
          </dt>
          <dd class="mt-2 text-base leading-7 text-gray-600">We prioritize the security of our users above all else. When it comes to buying and selling goods or services, your peace of mind is paramount. That's why we have implemented robust security measures.</dd>
        </div>
      </dl>
    </div>
  </div>
</div>



        <section class="p-6 shadow-lg shadow-red-200 text-black  backdrop-blur-xl ">
            <div class="container p-4 mx-auto text-center">
                <h2 class="text-3xl md:text-4xl xl:text-5xl font-bold tracking-tight mb-12">Trusted by the best</h2>
            </div>
            <div class="container flex flex-wrap justify-center mx-auto dark:text-black">
                <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                    <img src="https://autosallonialberti.net/wp-content/uploads/2020/12/logo_auto_alberti_zi.png" alt="" class="hover:animate-pulse">
                </div>

                <div class="flex justify-center  w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">

                    <div class="flex items-center justify-center col-span-1 md:col-span-3 lg:col-span-1">
                    <svg class="h-5 mt-1 text-gray-500 fill-current dark:text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 278.7 36.3"><g><path class="st0" d="M238.1 14.4v21.9h7V21.7h25.6v14.6h7V14.4h-39.6m6.2-7.1h27c3.8-.7 6.5-4.1 7.3-7.3H237c.8 3.2 3.6 6.5 7.3 7.3m-27.5 29c3.5-1.5 5.4-4.1 6.2-7.1h-31.5V.1h-7.1v36.2h32.4M131.9 7.2h25c3.8-1.1 6.9-4 7.7-7.1H125v21.4h32.4V29H132c-4 1.1-7.4 3.8-9.1 7.3h41.5V14.4H132l-.1-7.2m-61.6.1h27c3.8-.7 6.6-4.1 7.3-7.3H62.9c.8 3.2 3.6 6.5 7.4 7.3m0 14.3h27c3.8-.7 6.6-4.1 7.3-7.3H62.9c.8 3.2 3.6 6.5 7.4 7.3m0 14.7h27c3.8-.7 6.6-4.1 7.3-7.3H62.9c.8 3.2 3.6 6.6 7.4 7.3M0 .1c.8 3.2 3.6 6.4 7.3 7.2h11.4l.6.2v28.7h7.1V7.5l.6-.2h11.4c3.8-1 6.5-4 7.3-7.2V0L0 .1"></path></g></svg>
                </div>
                </div>
                <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4">
                    <img src="https://autosallonialberti.net/wp-content/uploads/2020/12/logo_auto_alberti_zi.png" alt="" class="hover:animate-pulse">
                </div>
                <div class="flex justify-center w-1/2 p-6 align-middle md:w-1/3 xl:w-1/4 ">
                    <div class="container p-4 mx-auto text-center">
                        <h2 class="text-4xl font-bold hover:animate-pulse">SHERRETI</h2>
                    </div>
                </div>


            </div>
        </section>




        @include('contactForm')

    </x-layout>
