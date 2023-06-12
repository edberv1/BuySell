<x-layout>

    @include('partials._hero')

    <div class="2xl:container 2xl:mx-auto">
                <div class="md:py-12 lg:px-20 md:px-6 py-9 px-4">
                    <div class="flex items-center mb-4">


                        <!-- filters Button (md and plus Screen) -->
                        <button onclick="showFilters()" class="cursor-pointer dark:bg-white dark:text-gray-800 text-white dark:hover:bg-gray-100 sm:flex hidden hover:bg-gray-700 focus:ring focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-4 px-6 bg-gray-800 flex text-base leading-4 font-normal text-white justify-center items-center">
                            <img class="dark:hidden"src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1.svg"/>
                            <img class="hidden dark:block"src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1dark.svg"/>
                        </button>

                            <form action="/">
                                <div class="relative w-full">
                                        <input type="text" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." required>
                                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white rounded-r-lg  hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-laravel bg-laravel hover:bg-black focus:ring-blue-800">
                                            <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                                            <span class="sr-only">Search</span>
                                        </button>

                                </div>
                            </form>

                    </div>
                    <p class="text-xl dark:text-gray-400 leading-5 text-[#e3e3e3] font-medium">{{$listing}} Posts</p>

                    <!-- Filters Button (Small Screen) -->

                    <button onclick="showFilters()" class="cursor-pointer mt-6 block sm:hidden hover:bg-gray-700 focus:ring focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 py-2 w-full bg-gray-800 flex text-base leading-4 font-normal text-white dark:text-gray-800 dark:bg-white dark:hover:bg-gray-100 justify-center items-center">
                        <img class="dark:hidden"src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1.svg" alt="filter" />
                        <img class="hidden dark:block"src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg1dark.svg" alt="filter" />
                        Filters
                    </button>
                </div>

                <div id="filterSection" class="block relative md:py-10 lg:px-20 md:px-6 py-9 px-4 bg-gray-50 dark:bg-[#e3e3e3] w-full">
                    <!-- Cross button Code -->
                    <div onclick="closeFilterSection()" class="cursor-pointer absolute right-0 top-0 md:py-10 lg:px-20 md:px-6 py-9 px-4">
                        <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg2.svg" alt="cross" />
                        <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg2dark.svg" alt="cross" />
                    </div>

                    <!-- Colors Section -->
                    <div>
                        <div class="flex space-x-2">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg3.svg" alt="colors"/>
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg3dark.svg" alt="colors"/>
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium">Color</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=White" class="text-base leading-4  font-normal">White</a>
                            </div>
                            <div class="flex space-x-2 justify-center items-center">
                                <div class="w-4 h-4 rounded-full bg-blue-600 shadow"></div>
                                <a href="/?tag=Blue" class="text-base leading-4  font-normal">Blue</a>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-end">
                                <div class="w-4 h-4 rounded-full bg-red-600 shadow"></div>
                                <a href="/?tag=Red" class="text-base leading-4  font-normal">Red</a>
                            </div>
                            <div class="flex space-x-2 justify-center items-center">
                                <div class="w-4 h-4 rounded-full bg-black shadow"></div>
                                <a href="/?tag=Black" class="text-base leading-4  font-normal">Black</a>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-gray-600 shadow"></div>
                                <a href="/?tag=Grey" class="text-base leading-4  font-normal">Grey</a>
                            </div>
                        </div>
                    </div>

                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />

                    <!-- Material Section -->
                    <div>
                        <div class="flex space-x-2">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4.svg" alt="materials"/>
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg4dark.svg" alt="materials"/>
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Manufacturer</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                    <a href="/?tag=Mercedes" class="text-base leading-4  font-normal">Mercedes</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                            <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                    <a href="/?tag=Audi" class="text-base leading-4  font-normal">Audi</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-end">
                            <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                    <a href="/?tag=BMW" class="text-base leading-4  font-normal">BMW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                            <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                    <a href="/?tag=Lamborghini" class="text-base leading-4  font-normal">Lamborghini</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center items-center">
                            <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <div class="inline-block">
                                    <div class="flex space-x-6 justify-center items-center">
                                    <a href="/?tag=Tesla" class="text-base leading-4  font-normal">Tesla</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />

                    <!-- Size Section -->
                    <div>
                        <div class="flex space-x-2 ">
                            <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg5.svg" alt="size"/>
                            <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/filter1-svg5dark.svg" alt="size"/>
                            <p class="lg:text-2xl text-xl lg:leading-6 leading-5 font-medium ">Size</p>
                        </div>
                        <div class="md:flex md:space-x-6 mt-8 grid grid-cols-3 gap-y-8 flex-wrap">
                            <div class="flex md:justify-center md:items-center items-center justify-start">

                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=SUV" class="text-base leading-4  font-normal">SUV</a>
                            </div>
                                </div>
                            </div>

                            <div class="flex justify-center items-center">

                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=Sedan" class="text-base leading-4  font-normal">Sedan</a>
                            </div>
                                </div>
                            </div>
                            <div class="flex md:justify-center md:items-center items-center justify-end">
                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=Coupe" class="text-base leading-4  font-normal">Coupe</a>
                            </div>
                                </div>
                            </div>

                            <div class="flex md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=Luxury" class="text-base leading-4  font-normal">Luxury</a>
                            </div>

                                </div>
                            </div>
                            <div class="flex md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=Sport" class="text-base leading-4  font-normal">Sport</a>
                            </div>

                                </div>
                            </div>
                            <div class="flex md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=JDM" class="text-base leading-4  font-normal">JDM</a>
                            </div>

                                </div>
                            </div>

                            <div class="flex md:justify-center md:items-center items-center justify-start">
                                <div class="inline-block">
                                <div class="flex space-x-2 md:justify-center md:items-center items-center justify-start">
                                <div class="w-4 h-4 rounded-full bg-white shadow"></div>
                                <a href="/?tag=Electric" class="text-base leading-4  font-normal">Electric</a>
                            </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="bg-gray-200 lg:w-6/12 w-full md:my-10 my-8" />



                </div>
            </div>

            <style>
                .checkbox:checked + .check-icon {
                    display: flex;
                }
            </style>
            <script>
                function showFilters() {
        var fSection = document.getElementById("filterSection");
        if (fSection.classList.contains("hidden")) {
            fSection.classList.remove("hidden");
            fSection.classList.add("block");
        } else {
            fSection.classList.add("hidden");
        }
    }

    function closeFilterSection() {
        var fSection = document.getElementById("filterSection");
        fSection.classList.add("hidden");
    }
    </script>









    <div class="lg:grid lg:grid-cols-4 gap-8 space-y-4 md:space-y-0 mx-4 lg:mx-28 justify-center mt-8">
                    @unless(count($listings) == 0)
                        @foreach ($listings as $listing)
                            <x-listing-card :listing="$listing" />
                        @endforeach
                    @else
                        <p>No posts founds</p>
                    @endunless

    </div>



          <div class="mt-6 p-4">
            {{$listings->links()}}
        </div>

    </x-layout>













