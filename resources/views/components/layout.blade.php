<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&display=swap">
        <link rel="stylesheet" href="https://unpkg.com/@splidejs/splide@3.4.13/dist/css/splide.min.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#F62006",
                    },
                },
            },
        };

    </script>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif
        }
    </style>
    <title>BuySell | Explore The Passion</title>
</head>

<body>


      <nav class="bg-[#E3E3E3]">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-8">
            <a href="/home" class="flex items-center">
                <img src="images/logo.png" class="h-14 mr-3" alt="BuySell Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark">BuySell</span>
            </a>

        <div class="flex items-center md:order-2">

            <button type="button" class="hover:animate-pulse flex mr-3 text-sm  rounded-full md:mr-0" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
              <span class="sr-only ">Open user menu</span>
              <img class="w-8 h-8 rounded-full" src="images/user.png" alt="user photo">
            </button>

            <!-- Dropdown menu -->
            <div class="z-50 hidden my-4 text-base list-none divide-y divide-gray-100 rounded-lg shadow dark:bg-[#e3e3e3] dark:divide-gray-600" id="user-dropdown">
              <div class="px-4 py-3">
                @auth
                <span class="block text-lg">{{auth()->user()->name}}</span>
                <span class="block text-sm truncate">{{auth()->user()->email}}</span>
                @endauth
              </div>


              <ul class="py-2" aria-labelledby="user-menu-button">
                @auth
                    <li>
                        <a href="/listings/manage" class="block px-4 py-2 text-sm text-neutral-950 hover:bg-gray-800 dark:hover:bg-gray-300 dark:text-black hover:text-laravel"><i class="fa-solid fa-gear"></i>
                            Manage Listed Cars</a>
                    </li>

                    <li>
                        <form class="inline" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="block px-4 py-2 text-sm text-neutral-950 hover:bg-gray-800 dark:hover:bg-gray-300 dark:text-black hover:text-laravel">
                            <i class="fa-solid fa-door-closed"></i>Logout
                        </button>
                        </form>
                    </li>
                @else


                <li><a href="/register" class="block px-6 py-2 text-sm text-neutral-950 hover:bg-gray-800 dark:hover:bg-gray-300 dark:text-black hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a></li>


                 <li> <a href="/login" class="block px-6 py-2 text-sm hover:bg-gray-800 dark:hover:bg-gray-300 dark:text-black hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>  Login</a></li>


                @endauth
              </ul>
            </div>
            <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden" aria-controls="mobile-menu-2" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-6 h-6 hover:fill-laravel" aria-hidden="true" fill="black" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
        </div>

        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
          <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg bg-[#E3E3E3] md:flex-row md:space-x-8 md:mt-0 md:border-0 bg-[#E3E3E3]">

            <li class="hover:text-laravel {{ '/home' == request()->path() ? 'text-laravel' : '' }}">
              <a href="/home" class="block py-2 pl-3 pr-4 text-xl rounded md:p-0">Home</a>
            </li>
            <li class="hover:text-laravel {{ '/' == request()->path() ? 'text-laravel' : '' }}">
              <a href="/" class="block py-2 pl-3 pr-4 rounded text-xl md:p-0">Marketplace</a>
            </li>
            <li class="hover:text-laravel {{ '/about' == request()->path() ? 'text-laravel' : '' }}">
              <a href="/about" class="block py-2 pl-3 pr-4 rounded text-xl md:p-0">About</a>
            </li>
            @if(Auth::check() && Auth::user()->roles == 'admin')
            <li class="hover:fill-laravel">
            <a href="/dashboard" class="block py-2 pl-3 pr-4 rounded text-xl md:p-0">
               <svg aria-hidden="true" class="w-8 h-8 dark:text-laravel group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>

            </a>
            </li>
            @endif
          </ul>
        </div>


        </div>
      </nav>

    <main>
        {{ $slot }}
    </main>

<footer class="shadow bg-[#E3E3E3]">
    <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
        <div class="md:flex md:justify-between">
          <div class="mb-6 md:mb-0">
              <a href="/home" class="flex items-center">
                  <img class="h-8 mr-3" src="{{ asset('images/logo.png') }}" alt="Logo" />
                  <span class="self-center text-2xl font-semibold whitespace-nowrap">BuySell™</span>
              </a>
          </div>
          <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-laravel">Resources</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="/home" class="hover:underline">BuySell</a>
                      </li>
                      <li>
                          <a href="https://laravel.com/" class="hover:underline">Laravel</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-laravel">Follow us</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="https://github.com/edberv1/BuySell" class="hover:underline ">Github</a>
                      </li>
                      <li>
                          <a href="https://trello.com/w/buysell14/home" class="hover:underline">Trello</a>
                      </li>
                  </ul>
              </div>
              <div>
                  <h2 class="mb-6 text-sm font-semibold uppercase text-laravel">Legal</h2>
                  <ul class="text-gray-600 dark:text-gray-400 font-medium">
                      <li class="mb-4">
                          <a href="#" class="hover:underline">Privacy Policy</a>
                      </li>
                      <li>
                          <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <div class="sm:flex sm:items-center sm:justify-between">
          <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/home" class="hover:underline">BuySell™</a>. All Rights Reserved.
          </span>
          <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Facebook page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">Instagram page</span>
              </a>
              <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                  <span class="sr-only">Twitter page</span>
              </a>
              <a href="https://github.com/edberv1/BuySell" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                  <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                  <span class="sr-only">GitHub account</span>
              </a>
          </div>
      </div>
    </div>
</footer>













    <x-flash-message />



</body>
<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</html>
