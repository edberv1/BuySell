<x-layout>




    <div style='background-color:rgba(0, 0, 0, 0)'>
      <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back</a>
            <div class="container px-5 py-24 mx-auto" style="cursor: auto;">
            <button id="prevButton" class="bg-gray-200 text-gray-700 rounded-full px-4 py-2 mr-2">Previous</button>
            <button id="nextButton" class="bg-gray-200 text-gray-700 rounded-full px-4 py-2">Next</button>
                <div class="lg:w-4/5 mx-auto flex flex-wrap">

                    @if ($listing->logo)
                        @php
                            $images = explode('|', $listing->logo);
                        @endphp
                        <div id="carousel" class="lg:w-1/2 w-full lg:h-auto h-64 relative">
                            @foreach ($images as $index => $image)
                                <div class="carousel__slide absolute top-0 left-0 {{ $index === 0 ? 'opacity-100' : 'opacity-0' }}">
                                    <img class="w-full h-full object-cover object-center rounded" src="{{ asset('storage/' . $image) }}" alt="Listing Image">
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="lg:w-1/2 w-full lg:h-auto h-64">
                            <img class="w-full h-full object-cover object-center rounded" src="{{ asset('/images/no-image.png') }}" alt="No Image">
                        </div>
                    @endif


    <script>
     document.addEventListener('DOMContentLoaded', function() {
                var carousel = document.getElementById('carousel');
                var slides = carousel.querySelectorAll('.carousel__slide');
                var prevButton = document.getElementById('prevButton');
                var nextButton = document.getElementById('nextButton');
                var currentIndex = 0;
                var intervalId;

                function showSlide(index) {
                    slides.forEach(function(slide) {
                        slide.style.opacity = '0';
                    });
                    slides[index].style.opacity = '1';
                }

                function slideTo(index) {
                    if (index < 0) {
                        index = slides.length - 1;
                    } else if (index >= slides.length) {
                        index = 0;
                    }
                    currentIndex = index;
                    showSlide(currentIndex);
                }

                function startAutoplay() {
                    intervalId = setInterval(function() {
                        slideTo(currentIndex + 1);
                    }, 8000);
                }

                function stopAutoplay() {
                    clearInterval(intervalId);
                }

                carousel.addEventListener('mouseover', stopAutoplay);
                carousel.addEventListener('mouseout', startAutoplay);

                prevButton.addEventListener('click', function() {
                    slideTo(currentIndex - 1);
                });

                nextButton.addEventListener('click', function() {
                    slideTo(currentIndex + 1);
                });

                startAutoplay();
            });
    </script>


        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0" style="cursor: auto;">
          <h2 class="text-sm title-font text-gray-500 tracking-widest" style="cursor: auto;">{{ $listing->created_at}}</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1" style="cursor: auto;"><a>{{ $listing->title }}</a></h1>
          <div class="flex mb-4">
            <span class="flex items-center">
              <svg fill="red" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="red" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="red" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="red" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <svg fill="none" stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
              </svg>
              <span class="text-gray-600 ml-3">20 Reviews</span>
            </span>
            <span class="flex ml-3 pl-3 py-2 border-l-2 border-gray-200 space-x-2s">
              <a class="text-gray-500">
                <x-listing-tags :tagsCsv="$listing->tags" />
              </a>

            </span>
          </div>
          <p class="leading-relaxed">{{ $listing->description }}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
            <div class="flex">
              <span class="mr-3"><i class="fa-solid fa-location-dot"></i> {{ $listing->location }}</span>

            </div>
            <div class="flex ml-6 items-center">
              <span class="mr-3">{{ $listing->email}}</span>
            </div>
          </div>
          <div class="flex">
            <span class="title-font font-medium text-2xl text-gray-900"><i class="fa-solid fa-euro"></i>{{ $listing->company }}</span>

            <button class="flex ml-auto text-white bg-laravel border-0 py-2 px-6 focus:outline-none hover:bg-black rounded"><a href="{{ $listing->website }}" target="blank">Visit Website</a></button>


              <button type="submit" class="rounded-full w-10 h-10 bg-gray-200 p-0 border-0 inline-flex items-center justify-center text-gray-500 ml-4">
              <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"></path>
              </svg>
            </button>



          </div>
        </div>
      </div>
    </div>
    </div>



    </x-layout>
