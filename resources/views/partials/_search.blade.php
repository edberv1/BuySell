
<form action="/">
    <div class="flex relative border-2 border-gray-100 m-4 rounded-lg w-3/5 md:w-96">
        <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Your Email</label>
        <button id="dropdown-button" data-dropdown-toggle="dropdown" class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-[#e3e3e3] border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100" type="button">Filter <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg></button>
        <div name="category[]" id="dropdown" class="z-10 hidden divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-[#e3e3e3]">
            <ul class="py-2 text-sm text-black" aria-labelledby="dropdown-button">
                
            <li>
                <a href="/?tag=Sedan" class="inline-flex w-full px-4 py-2 hover:bg-gray-500">Sedan</a>
            </li>
            <li>
                <a href="/?tag=SUV" class="inline-flex w-full px-4 py-2 hover:bg-gray-500">SUV</a>
            </li>
            <li>
                <a href="/?tag=Electric" class="inline-flex w-full px-4 py-2 hover:bg-gray-500">Electric</a>
            </li>
            <li>
                <a href="/?tag=Luxury" class="inline-flex w-full px-4 py-2 hover:bg-gray-500">Luxury</a>
            </li>
            </ul>
            
        </div>
        <div class="relative w-full">
            <input type="text" name="search" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Search..." required>
            <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white rounded-r-lg  hover:bg-red-800 focus:ring-2 focus:outline-none focus:ring-laravel bg-laravel hover:bg-black focus:ring-blue-800">
                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>











