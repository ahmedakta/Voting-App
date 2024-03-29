<x-app-layout>
    <div class="filters flex space-x-6">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full rounded-xl border-none px-4 py-2">
                <option value="Categoey one">Category one</option>
                <option value="Categoey two">Category two</option>
                <option value="Categoey three">Category three</option>
                <option value="Categoey four">Category four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="category" id="category " class="w-full rounded-xl border-none px-4 py-2">
                <option value="Filter one">Filter one</option>
                <option value="Filter two">Filter two</option>
                <option value="Filter three">Filter three</option>
                <option value="Filter four">Filter four</option>
            </select>
        </div>
        <div class="w-2/3 relative">
            <input type="search" name="search" id="search" placeholder="Find an idea.." class="w-full rounded-xl bg-white border-none placeholder-text-gray-900 px-4 py-2 pl-8">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </div>
        </div> 
    </div>  <!-- end filters -->
    
    
    <div class="ideas-container space-y-6 mt-6">
        @foreach ($ideas as $idea)            
        <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="border-r border-gray-100 px-4 py-12">
                <div class="text-center">
                    <div class="font-semibold text-xl">12</div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 bg-gray-100 border border-gray-100 hover:border-gray-200 font-semibold  text-xs uppercase rounded-xl px-4 py-4">Vote</button>
                </div>
            </div>
            <div class="flex flex-1 px-2 pt-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=8" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold ml-2">
                        <a href="{{route('idea.show',$idea)}}" class="hover:underline">{{ $idea->title }}</a>
                    </h4>
                    <div class="text-gray-600 mt-3 p-2 line-clamp-3">
                            {{$idea->description}}                    
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div> {{$idea->created_at->diffForHumans()}}</div>
                            <div> &bull; </div>
                            <div> Category 1</div>
                            <div> &bull; </div>
                            <div class="text-gray-800"> 3 Comments</div>
                        </div>
                        <div 
                        x-data = "{ isOpen: false }"
                        class="flex items-center space-x-2">
                            <div class="bg-gray-100 text-xs font-semibold uppercase leading-none 
                            rounded-full text-center w-20 h-8 px-4 p-2">open</div>
                            <button 
                            @click = "isOpen = !isOpen"
                            class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-8 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg"  class="w-20" height="14" fill="curentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul 
                                x-cloak
                                x-show.transition.origin.top.left="isOpen"
                                @click.away ="isOpen = false"
                                @keydown.escape.window="isOpen = false"
                                class=" absolute w-48 text-left ml-12 font-semibold bg-white shadow-dialog rounded-xl py-2">
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Mark As Spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end idea container -->
        @endforeach
 
    </div> <!-- end ideas-container -->

    <div class="mt-4 my-8">
        {{$ideas->links()}}
    </div>
</x-app-layout>