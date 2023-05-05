<x-layout>
    @include('partials._hero')
    @include('partials._search');

    
    <div class="lg:grid lg:grid-cols-3 gap-8 space-y-4 md:space-y-0 mx-4 lg:mx-40">

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



