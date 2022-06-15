<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm">
      <header class="flex items-center justify-between px-8 py-4">
              <a href=""><img src="{{asset('img/a_logo.png')}}" alt="" class="w-50 h-20"></a>
          <div class="flex items-center">
            @if (Route::has('login'))
            <div class="px-6 py-4">
                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>                
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
  
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
            @endif 
            <a href="">
                <img src="https://robohash.org/mail@ashallendesign.co.uk" alt="avatar" class="w-10 h-10 rounded-full">
            </a>
          </div>
      </header>

      <main class="container mx-auto max-w-custom flex">
          <div class="w-70 mr-5"> 
           Add Idea Form goes here amet consectetur adipisicing elit. Possimus veritatis natus, cupiditate assumenda culpa eaque sapiente adipisci esse mollitia error aspernatur fugiat dolorum! Cupiditate provident nam expedita, accusamus consequatur commodi perspiciatis debitis quia perferendis eos, numquam quibusdam a distinctio pariatur! Corrupti molestias hic impedit. Officiis voluptatem alias impedit. Officiis, impedit voluptatum, placeat, soluta eum itaque deserunt voluptatibus consequuntur officia consequatur iure reiciendis incidunt quibusdam dolorem nam beatae perspiciatis porro! Animi iste sit deleniti quos, doloribus saepe ipsum ducimus voluptas maxime est dolor sequi necessitatibus fuga nulla tenetur commodi ut nam! Optio, inventore modi eum beatae voluptatem at quisquam earum libero!
          </div>
          <div class="w-175">
              <nav class="flex items-center justify-between test-xs">
                  <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                      <li><a href="" class="border-b-4 pb-3 border-red">All Ideas (87)</a></li>
                      <li><a href="" class="text-gray-400 transition duration-150 
                        ease-in border-b-4 pb-3 hover:border-red">Considering (6)</a></li>
                      <li><a href="" class="text-gray-400 transition duration-150 
                        ease-in border-b-4 pb-3 hover:border-red">In progress (1)</a></li>
                  </ul>

                  <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
                      <li><a href="" class="text-gray-400 transition duration-150 
                        ease-in border-b-4 pb-3 hover:border-red">Implemented (2)</a></li>
                      <li><a href="" class="text-gray-400 transition duration-150 
                        ease-in border-b-4 pb-3 hover:border-red">Closed (5)</a></li>
                  </ul>
              </nav>

              <div class="mt-8">
                  {{$slot}}
              </div>
          </div>
      </main>
    </body>
</html>
