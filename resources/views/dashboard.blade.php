
<script src="https://cdn.tailwindcss.com"></script>
<x-flash-message />

  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

  <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>

<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="/dashboard" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>

         <li>
            <a href="/home" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
               <span class="ml-3">Back To Site</span>
            </a>
         </li>
        
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Users</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">{{$users}}</span>
            </a>
         </li>

         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">{{$contact}}</span>
            </a>
         </li>
         
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
               <span class="flex-1 ml-3 whitespace-nowrap">Posts</span>
               <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">{{$listing}}</span>
            </a>
         </li>

        
         <li>
         <form class="flex-1  whitespace-nowrap" method="POST" action="/logout">
            <button type="submit" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
               <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                        @csrf
                        <button type="submit">
                            <i class=" fa-solid fa-door-closed"></i>
                        </button>
            </button>
            </form> 
         </li>
      </ul>
   </div>
</aside>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('[data-drawer-toggle="default-sidebar"]');
    const sidebar = document.getElementById('default-sidebar');

    sidebarToggle.addEventListener('click', function() {
      sidebar.classList.toggle('-translate-x-full');
    });
  });

</script>

<div class="p-4 sm:ml-64">

<section class="section main-section">
      
  <div class="lg:grid lg:grid-cols-4 lg:justify-between mb-10 gap-5 space-y-4 md:space-y-0 mx-4">

  
          
    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Users</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
            
            <span class="icon widget-icon text-green-500"><i class="mdi mdi-account-multiple mdi-48px"></i></span>
        </div>
       
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3">
                
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $users }} users</span>
            </li>
        </ul>
        <a href="#users" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">View All Users</a>
    </div>

    <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Admins</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
            
        <span class="icon widget-icon text-red-500"><i class="mdi mdi-comment-account-outline mdi-48px"></i></span>
        </div>
        
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3">
                
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{ $admins }} admins</span>
            </li>
</ul>
    </div>

          <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Posts</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
            
        <span class="icon widget-icon text-blue-500"><i class="mdi mdi-arrow-down-bold-box-outline mdi-48px"></i></span>
        </div>
     
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3">
             
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{$listing}} Posts</span>
            </li>
        </ul>
        <a href="#posts" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">View All Posts</a>
    </div>
          
      

          <div class="w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">Contacts</h5>
        <div class="flex items-baseline text-gray-900 dark:text-white">
            
        <span class="icon widget-icon text-blue-500"><i class="mdi mdi-email-open-outline mdi-48px"></i></span>
        </div>
     
        <ul role="list" class="space-y-5 my-7">
            <li class="flex space-x-3">
             
                <svg aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-blue-600 dark:text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Check icon</title><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">{{$contact}} contacts</span>
            </li>
        </ul>
        <a href="#contacts" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-200 dark:focus:ring-blue-900 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex justify-center w-full text-center">View All Messages</a>
    </div>

    </div>
    
    

        
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <header class="card-header" id="users">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
              Users
            </p>
          </header>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                Name
                </th>
                <th scope="col" class="px-6 py-3">
                Email
                </th>
                <th scope="col" class="px-6 py-3">
                Role
                </th>
                <th scope="col" class="px-6 py-3">
                Password
                </th>
                <th scope="col" class="px-6 py-3">
                Created
                </th>
                <th scope="col" class="px-6 py-3">
                  Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($userat as $item)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $item->id }}
                </th>
                <td class="px-6 py-4">
                {{ $item->name }}
                </td>
                <td class="px-6 py-4">
                {{ $item->email }}
                </td>
                <td class="px-6 py-4">
                {{ $item->roles }}
                </td>
                <td class="px-6 py-4">
                {{ $item->password }}
                </td>
                <td class="px-6 py-4">
                {{ $item->created_at }}
                </td>
                <td class="px-6 py-4">                    
                    <button class=" text-blue-900"><i class="mdi mdi-account-edit mdi-36px"></i></button>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <header class="card-header" id="posts">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
              Posts
            </p>
          </header>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                Title
                </th>
                <th scope="col" class="px-6 py-3">
                Tags
                </th>
                <th scope="col" class="px-6 py-3">
                Price
                </th>
                <th scope="col" class="px-6 py-3">
                Location
                </th>
                <th scope="col" class="px-6 py-3">
                  Email
                </th>
                <th scope="col" class="px-6 py-3">
                  Website
                </th>
                <th scope="col" class="px-6 py-3">
                  Created
                </th>
                <th scope="col" class="px-6 py-3">
                  Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $item)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $item->id }}
                </th>
                <td class="px-6 py-4">
                {{ $item->title }}
                </td>
                <td class="px-6 py-4">
                {{ $item->tags }}
                </td>
                <td class="px-6 py-4">
                {{ $item->company }}
                </td>
                <td class="px-6 py-4">
                {{ $item->location }}
                </td>
                <td class="px-6 py-4">
                {{ $item->email }}
                </td>
                <td class="px-6 py-4">
                {{ $item->website }}
                </td>
                <td class="px-6 py-4">
                {{ $item->created_at }}
                </td>
                <td class="px-6 py-4">      
                <button class=" text-blue-900"><i class="mdi mdi-account-edit mdi-36px"></i></button>

              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
          <header class="card-header" id="contacts">
            <p class="card-header-title">
              <span class="icon"><i class="mdi mdi-account-multiple"></i></span>
              Messages
            </p>
          </header>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                Name
                </th>
                <th scope="col" class="px-6 py-3">
                Email
                </th>
                <th scope="col" class="px-6 py-3">
                Phone
                </th>
                <th scope="col" class="px-6 py-3">
                Subject
                </th>
                <th scope="col" class="px-6 py-3">
                  Message
                </th>
                <th scope="col" class="px-6 py-3">
                  Recieved at
                </th>
                <th scope="col" class="px-6 py-3">
                  Action
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($contacts as $item)

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $item->id }}
                </th>
                <td class="px-6 py-4">
                {{ $item->name }}
                </td>
                <td class="px-6 py-4">
                {{ $item->email }}
                </td>
                <td class="px-6 py-4">
                {{ $item->phone }}
                </td>
                <td class="px-6 py-4">
                {{ $item->subject }}
                </td>
                <td class="px-6 py-4">
                {{ $item->message }}
                </td>
                <td class="px-6 py-4">
                {{ $item->created_at }}
                </td>
                <td class="px-6 py-4">                    
                    <button class="text-blue-900"><i class="mdi mdi-account-edit mdi-36px"></i></button>
                    <form action="{{ route('deleteContact', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-900">
                            <i class="mdi mdi-account-remove mdi-36px"></i>
                        </button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>



 