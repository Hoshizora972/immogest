<x-app-layout>
    
    <!-- component -->
    <div tabindex="0" class="focus:outline-none">
        <!-- Remove py-8 -->
        <div class="mx-auto container py-8">
            <div class="flex flex-wrap gap-4 items-center  justify-center">
                @forelse ($bien as $rowBien)
                <!-- Card 1 -->
                <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                    <div>
                        <img alt="person capturing an image" src="{{$rowBien->image}}" tabindex="0" class="focus:outline-none w-full h-44" />
                    </div>
                    <div class="bg-white">
                        <div class="flex items-center justify-between px-4 pt-4">
                            <div>
                                {{-- <span>{{$rowBien->Category->name}}</span>  --}}
                            </div>
                            <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">{{number_format($rowBien->price,2)}}€</p>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center">
                                <h2 tabindex="0" class="focus:outline-none text-lg font-semibold">{{$rowBien->name}}</h2>
                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5">{{$rowBien->created_at}}</p>
                            </div>
                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2">{{$rowBien->description}}</p>
                            <div class="flex mt-4">
                                <div>
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Send message</p>
                                </div>
                                <div class="pl-2">
                                    <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Contact</p>
                                </div>
                            </div>
                            <div class="flex items-center justify-between py-4">
                                <h2 tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">{{$rowBien->city}}</h2>
                                <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                                <div>
                                    <a href="{{route('bien',$rowBien->id)}}">See more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    Aucune annonce disponible...
                @endforelse
                <!-- Card 1 Ends --><!-- component -->
                
            </div>
        </div>
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>
    {{ $bien->links() }}




</x-app-layout>