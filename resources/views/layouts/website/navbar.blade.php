<div class="fixed w-full h-16 md:h-20 bg-gray-100 shadow-md flex flex-row px-4 md:px-6 lg:px-12">
  <div class="w-1/2 flex flex-row items-center">
    <img class="w-auto h-12 md:h-16" src="{{ asset('images/diamond.png')}}" alt="Logo of Patrick Santino">
    <span class="hidden md:block ml-4 font-serif font-bold text-xl">by Patrick Santino</span>
  </div>
  <div class="hidden w-1/2 md:flex flex-row justify-between items-center font-semibold uppercase">
    <a href="{{ route('website.homepage')}}">Home</a>
    <a href="{{ route('website.homepage')}}">About</a>
    <a href="{{ route('website.homepage')}}">My Articles</a>
  </div>
</div>