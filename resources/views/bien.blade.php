<x-app-layout>
    <!-- tailwind.config.js -->
<!-- component -->
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

<div class="bg-gray-900">
    <header>
        <div class="container mx-auto px-6 py-3">
            <div class="flex items-center justify-between">
                <div class="hidden w-full text-gray-300 md:flex md:items-center">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M16.2721 10.2721C16.2721 12.4813 14.4813 14.2721 12.2721 14.2721C10.063 14.2721 8.27214 12.4813 8.27214 10.2721C8.27214 8.06298 10.063 6.27212 12.2721 6.27212C14.4813 6.27212 16.2721 8.06298 16.2721 10.2721ZM14.2721 10.2721C14.2721 11.3767 13.3767 12.2721 12.2721 12.2721C11.1676 12.2721 10.2721 11.3767 10.2721 10.2721C10.2721 9.16755 11.1676 8.27212 12.2721 8.27212C13.3767 8.27212 14.2721 9.16755 14.2721 10.2721Z" fill="currentColor" /><path fill-rule="evenodd" clip-rule="evenodd" d="M5.79417 16.5183C2.19424 13.0909 2.05438 7.39409 5.48178 3.79417C8.90918 0.194243 14.6059 0.054383 18.2059 3.48178C21.8058 6.90918 21.9457 12.6059 18.5183 16.2059L12.3124 22.7241L5.79417 16.5183ZM17.0698 14.8268L12.243 19.8965L7.17324 15.0698C4.3733 12.404 4.26452 7.97318 6.93028 5.17324C9.59603 2.3733 14.0268 2.26452 16.8268 4.93028C19.6267 7.59603 19.7355 12.0268 17.0698 14.8268Z" fill="currentColor" />
                    </svg>
                    <span class="mx-1 text-sm">Around You</span>
                </div>
                <div class="w-full text-indigo-500 md:text-center text-2xl font-semibold">
                    Immo Gest
                </div>
                <div class="flex items-center justify-end w-full">
                </div>
            </div>
    </header>

    <main class="my-8">
        <div class="container mx-auto px-6">
            <div class="md:flex md:items-center">
                <div class="w-full h-64 md:w-1/2 lg:h-96">
                    <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="{{$rowBien->image}}" alt="Nike Air">
                </div>
                <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                    <h3 class="text-indigo-500 uppercase text-lg">{{$rowBien->name}}</h3>
                    <p><span class="text-gray-300 mt-3">{{number_format($rowBien->price,2)}}€</span></p>
                    <p><span class="text-gray-300 mt-3">{{$rowBien->description}}</span></p>
                    <p><span class="text-gray-300 mt-3">{{$rowBien->city}}</span></p>
                    {{-- <span class="text-gray-300 mt-3">{{$rowBien->category->title}}€</span>  --}}

                {{-- </div> --}}
                    <hr class="my-3">
                    <div class="flex items-center mt-6">
                        <button class="px-8 py-2 bg-indigo-500 text-white text-sm font-medium rounded hover:bg-indigo-700 focus:outline-none focus:bg-indigo-500">Reserve Now</button>
                        <button class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-900 focus:outline-none focus:bg-indigo-500">Contact Now</button>
                    </div>
                    
                </div>
            </div>
            <div class="mt-16">
                <h3 class="text-gray-500 text-2xl font-medium">Similar Product</h3>
                
                
                <!-- boucle a faire pour produit similaire -->
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    @foreach ( $similary as $item)
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=376&q=80')">
                            <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        </div>
                        
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Chanel</h3>
                            <span class="text-gray-500 mt-2">$12</span>
                        </div>
                        @endforeach
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </main>


    <!-- component footer -->
<!-- This is an example component -->
<div class=" bg-gray-900">
    <div class="max-w-2xl mx-auto text-white py-10">
        <div class="text-center">
            <h3 class="text-3xl mb-3"> Download Immo Gest </h3>
            <p>  Search your ad easily. </p>
            <div class="flex justify-center my-10">
                <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-52 mx-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" class="w-7 md:w-8">
                    <div class="text-left ml-3">
                        <p class='text-xs text-gray-200'>Download on </p>
                        <p class="text-sm md:text-base"> Google Play Store </p>
                    </div>
                </div>
                <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-44 mx-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" class="w-7 md:w-8">
                    <div class="text-left ml-3">
                        <p class='text-xs text-gray-200'>Download on </p>
                        <p class="text-sm md:text-base"> Apple Store </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-28 flex flex-col md:flex-row md:justify-between items-center text-sm text-gray-400">
            <p class="order-2 md:order-1 mt-8 md:mt-0"> &copy; IconicSparkle, 2024. </p>
            <div class="order-1 md:order-2">
                <span class="px-2">About us</span>
                <span class="px-2 border-l">Contact us</span>
                <span class="px-2 border-l">Privacy Policy</span>
            </div>
        </div>
    </div>
</div>

    
</x-app-layout>




<!-- component -->


{{-- <div class="flex min-h-screen items-center justify-center bg-gray-900">
    <div class="flex font-sans">
        <div class="flex-none w-48 relative">
        <img src="{{$rowBien->image}}" alt="img" class="absolute inset-0 w-80 h-80 " loading="lazy" width="600px"/>
    </div>
    <form class="flex-auto p-6">
        <div class="flex flex-wrap">
            <h1 class="flex-auto text-xl font-semibold text-gray-900">
                {{$rowBien->name}}
            </h1>
            <div class="text-lg font-semibold text-black-500">
                {{$rowBien->city}}
            </div>
            <div class="text-lg font-semibold text-black-500">
                {{$rowBien->city}}
            </div>
            <div class="text-lg font-semibold text-black-500">
                {{$rowBien->description}}
            </div>
            <div class="text-lg font-semibold text-black-500">
                {{number_format($rowBien->price,2)}}€
            </div>
            <div class="w-full flex-none text-sm font-medium text-black-700 mt-2">
                Poster à {{$rowBien->created_at}}
            </div>
        </div>
        
    </div>
</div>
<div class="flex space-x-4 mb-6 text-sm font-medium"> --}}
    {{-- <div class="flex-auto flex space-x-4">
        <button class="h-10 px-6 font-semibold rounded-md border border-balck-800 text-gray-900" type="button">
            Contact
        </button>
    </div>
    <button class="flex-none flex items-center justify-center w-9 h-9 rounded-md text-slate-300 border border-slate-200" type="button" aria-label="Favorites">
      <svg width="20" height="20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" />
      </svg>
    </button>
        </div>
      </form>

      
    </div>
  </div> --}}



