@props(['listing'])

<div class="backdrop-blur-3xl max-w-lg p-4 shadow-md rounded-lg border border-gray-100 shadow-lg">
    <div class="flex justify-between pb-4 border-bottom">
        <div class="flex items-center">
            <div class="mb-0 capitalize"><x-listing-tags :tagsCsv="$listing->tags" /></div>
        </div>
        <p>{{ $listing->created_at->format('Y M d, H:i') }}</p>
    </div>
    <div class="space-y-4">
        <div class="space-y-2">
            @if ($listing->logo)
            @php
                $images = explode('|', $listing->logo);
                $logoImage = asset('storage/' . $images[0]);
            @endphp
            <img class="block object-cover object-center w-full rounded-md h-72 dark:bg-gray-500" src="{{ $logoImage }}" alt="" />
            @else
            <img class="block object-cover object-center w-full rounded-md h-72 dark:bg-gray-500" src="{{ asset('/images/no-image.png') }}" alt="No Image" />
            @endif
            <div class="flex items-center text-xs">
                <h1>{{ $listing->email }}</h1>
            </div>
        </div>
        <div class="space-y-2">
            <a rel="noopener noreferrer" class="block">
                <span class="text-xl font-semibold dark:text-laravel">{{ $listing->title }}</span>
            </a>
            <p class="leading-snug">{{ $listing->company }}<i class="fa-solid fa-euro"></i></p>
            <p class="leading-snug"><i class="fa-solid fa-location-dot"></i> {{ $listing->location }}.</p>
        </div>

        <a class="inline-block px-7 py-3 mb-2 md:mb-0 mr-0 md:mr-2 bg-laravel text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-black hover:shadow-lg" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/listings/{{ $listing->id }}" role="button">View</a>
    </div>
</div>
