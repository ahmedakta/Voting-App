<x-app-layout>
 <div>
    <div >
        <a href="/" class="flex items-center font-semibold hover:underline">
            <svg class="w-4 h-4" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
            <span class="ml-2">All Ideas</span>
        </a>
    </div>
 </div>
 <div class="idea-container bg-white rounded-xl flex mt-4 ">
    <div class="flex flex-1 px-4 pt-6">
        <a href="" class="flex-none">
            <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="avatar" class="w-14 h-14 rounded-xl">
        </a>
        <div class="w-full mx-4">
            <h4 class="text-xl font-semibold ml-2">
                <a href="" class="hover:underline">Random Title Can Go Here</a>
            </h4>
            <div class="text-gray-600 mt-3 p-2">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dicta, tempora aut. Praesentium repudiandae soluta rem harum impedit porro reiciendis aspernatur voluptas rerum. Reiciendis, ad cumque, labore aliquid soluta voluptatibus mollitia repellat ex ipsa optio repudiandae deleniti unde magni tenetur modi quaerat. Dignissimos ea ducimus quam saepe, consequatur eveniet mollitia minima?
            </div>
            <div class="flex item-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                    <div class="font-bold text-gray-900">John Doe</div>
                    <div> &bull; </div>
                    <div> 10 hourse ago</div>
                    <div> &bull; </div>
                    <div> Category 1</div>
                    <div> &bull; </div>
                    <div class="text-gray-800"> 3 Comments</div>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="bg-gray-100 text-xs font-semibold uppercase leading-none 
                    rounded-full text-center w-20 h-8 px-4 p-2">open</div>
                    <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 py-3">
                        <svg xmlns="http://www.w3.org/2000/svg"  class="w-20" height="14" fill="curentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                        </svg>
                        <ul class="hidden absolute w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-2">
                            <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Mark As Spam</a></li>
                            <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Delete Post</a></li>
                        </ul>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- end idea container -->
<div class="buttons-container flex items-center justify-between mt-6">
    <div class="flex items-center space-x-4 ml-4">
        <button 
        type="button" 
        class="flex item-center justify-center h-11 w-34 text-sm bg-blue -100 text-white font-semibold rounded-xl border border-blue-200
         hover:bg-blue-hover  transtion duration-150 ease-in px-6 py-3 mr-2">
            <span class="ml-1">Reply</span>
        </button>
        <button 
        type="button" 
        class="flex item-center justify-center h-11 w-34 text-xs bg-gray-100 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transtion duration-150 ease-in px-6 py-3">
        <span>Set Status </span>
        <svg class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
    </div>
        <div class="flex items-center space-x-3 ">
            <div class="bg-white font-semibold text-center rounded-xl px-4 py-2">
                <div class="text-xl leading-snug">12</div>
                <div class="text-gray-400 text-xs leading-none">Votes</div>
            </div>
            <button 
            type="button" 
            class="h-11 w-32 text-xs ml-2 bg-gray-100 font-semibold uppercase rounded-xl border 
            border-gray-200 hover:border-gray-400 transtion duration-150 ease-in px-6 py-3">
            <span>Vote</span>
            </button>
        </div>
    </div> <!-- end buttons continer -->
    <div class="comments-container relative ml-22 space-y-6 my-8 mt-1 pt-4" style="margin-left: 74px">
        <div class="comment-container relative bg-white rounded-xl flex mt-4 ">
            <div class="flex flex-1 px-4 pt-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold ml-2">
                        <a href="" class="hover:underline">Random Title Can Go Here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 p-2 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, similique.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div> 10 hourse ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-4 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg"  class="w-20" height="14" fill="curentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-2">
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Mark As Spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
        <div class="is-admin comment-container relative bg-white rounded-xl flex mt-4 ">
            <div class="flex flex-1 px-4 pt-6">
                <div class="flex-none">
                    <a href="" class="flex-none">
                        <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="avatar" class="w-14 h-14 rounded-xl">
                    </a>
                    <div class="text-center uppercase text-xs font-semibold mt-2" style="color: #328af1">Admin</div>
                </div>
                <div class="w-full mx-4">
                    <h4 class="text-xl font-semibold ml-2">
                        <a href="" class="hover:underline">Status changed to "Under Consideration"</a>
                    </h4>
                    <div class="text-gray-600 mt-3 p-2 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, similique.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-blue-100" style="color: #328af1">Andreea</div>
                            <div> 10 hourse ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-4 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg"  class="w-20" height="14" fill="curentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-2">
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Mark As Spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
        <div class="comment-container relative bg-white rounded-xl flex mt-4 ">
            <div class="flex flex-1 px-4 pt-6">
                <a href="" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=4" alt="avatar" class="w-14 h-14 rounded-xl">
                </a>
                <div class="w-full mx-4">
                    {{-- <h4 class="text-xl font-semibold ml-2">
                        <a href="" class="hover:underline">Random Title Can Go Here</a>
                    </h4> --}}
                    <div class="text-gray-600 mt-3 p-2 line-clamp-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, similique.
                    </div>
                    <div class="flex item-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div class="font-bold text-gray-900">John Doe</div>
                            <div> 10 hourse ago</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-4 py-3">
                                <svg xmlns="http://www.w3.org/2000/svg"  class="w-20" height="14" fill="curentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="hidden absolute w-44 text-left ml-8 font-semibold bg-white shadow-dialog rounded-xl py-2">
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Mark As Spam</a></li>
                                    <li><a href="" class="hover:bg-gray-100 block transition duration-150 ease-in px-10 py-2">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end comment container -->
    </div><!-- end comments continer -->
</x-app-layout>