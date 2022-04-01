@if (Route::has('login'))
<nav class="bg-white" >
    <div class="flex justify-between mx-20 my-4 items-center">
        <h5 class="text-3xl font-semibold  tracking-wide">Funitura</h5>
        <div class="flex gap-8 justify-center items-center">
            @auth
            <a href="" class="font-semibold text-gray-500 hover:text-black">Home</a>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                    <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="bg-gray-800 text-white py-3 px-6 rounded-full font-semibold hover:bg-black">
                        {{ __('Log Out') }}
                    </a>
            </form>
            @else
            <a href="{{ route('login') }}" class="font-semibold text-gray-500 hover:text-black">Login</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="bg-gray-800 text-white py-3 px-6 rounded-full font-semibold hover:bg-black">Sign up free</a>
            @endif
            @endauth
        </div>
    </div>
</nav>
@endif

