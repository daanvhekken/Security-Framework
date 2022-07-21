`<x-guest-layout>
    <div class="flex flex-col">
        <div class="relative">
            <div class="min-h-screen w-full flex flex-col items-center justify-center bg-white p-6">
                <div class="w-2/3 lg:w-1/2 my-16">
                    @if (Route::has('login'))
                        <div class="flex flex-col items-center justify-center mt-16">
                            @auth
                                <a href="{{ route('home') }}" class="w-full flex justify-center items-center px-4 py-2 border border-tertiary-color rounded-md font-semibold text-lg text-tertiary-color hover:bg-blue-50 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-4">Get started</a>
                            @else
                                <a href="{{ route('login') }}" class="w-full flex justify-center items-center px-4 py-2 border border-tertiary-color rounded-md font-semibold text-lg text-tertiary-color hover:bg-blue-50 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-4">
                                    Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="w-full flex justify-center items-center px-4 py-2 border border-tertiary-color rounded-md font-semibold text-lg text-tertiary-color hover:bg-blue-50 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-4">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
`
