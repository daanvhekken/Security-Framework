<x-guest-layout>
        <div class="flex flex-col lg:flex-row">
            <div class="relative lg:w-1/2 lg:top-0 lg:right-0">
                <div class="min-h-screen w-full flex flex-col items-center justify-center bg-white p-6">
                    <div class="w-2/3 lg:w-1/2 my-10">
                        <h1 class="text-3xl font-bold text-center lg:text-left">Login</h1>
                        <p class="text-black mt-2 text-center lg:text-left text-base">
                            {{ __('auth.login_help') }}
                        </p>
                    </div>

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="bg-red-200 px-6 py-4 my-1 rounded-md text-sm flex items-center mx-auto w-fit xl:w-2/4">
                            <svg viewBox="0 0 24 24" class="text-red-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                                <path fill="currentColor" d="M11.983,0a12.206,12.206,0,0,0-8.51,3.653A11.8,11.8,0,0,0,0,12.207,11.779,11.779,0,0,0,11.8,24h.214A12.111,12.111,0,0,0,24,11.791h0A11.766,11.766,0,0,0,11.983,0ZM10.5,16.542a1.476,1.476,0,0,1,1.449-1.53h.027a1.527,1.527,0,0,1,1.523,1.47,1.475,1.475,0,0,1-1.449,1.53h-.027A1.529,1.529,0,0,1,10.5,16.542ZM11,12.5v-6a1,1,0,0,1,2,0v6a1,1,0,1,1-2,0Z"></path>
                            </svg>
                            <span class="text-red-800">{{ $error }}</span>
                        </div>
                        @endforeach
                    @endif

                    <form method="POST" action="{{ route('login') }}" class="w-2/3 lg:w-1/2">
                        @csrf

                        <div class="py-3">
                            <label for="email" class="block text-lg font-semibold text-black">{{ __('auth.login_email') }}<span class="text-red-500 font-medium">*</span></label>
                            <input
                                id="email"
                                class="block mt-1 w-full text-md border-secondary-color focus:border-tertiary-hover focus:ring focus:ring-tertiary-color focus:ring-opacity-50 rounded-md shadow-sm"
                                type="email"
                                name="email"
                                :value="old('email')"
                                required autofocus placeholder="{{ __('auth.login_email') }} address">
                        </div>

                        <div class="py-3">
                            <label for="password" class="block text-lg font-semibold text-black">{{ __('auth.login_password') }}<span class="text-red-500 font-medium">*</span></label>
                            <input
                                type="password"
                                class="block mt-1 w-full text-md border-secondary-color focus:border-tertiary-hover focus:ring focus:ring-tertiary-color focus:ring-opacity-50 rounded-md shadow-sm"
                                type="password" name="password"
                                required autocomplete="current-password"
                                placeholder="{{ __('auth.login_password') }}">
                        </div>

                        <div class="block py-3">
                            <label for="remember_me" class="flex items-center">
                                <input type="checkbox" name="remember_me" id="remember" class="rounded border-gray-300 text-tertiary-color shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                <span class="ml-2 text-base text-black">{{ __('auth.login_remember_me') }}</span>
                            </label>
                        </div>

                        <div class="flex items-center justify-center w-full py-3">
                            <button type="submit" class="w-full flex justify-center items-center px-4 py-2 bg-tertiary-color rounded-md font-semibold text-lg text-white hover:bg-tertiary-hover focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                                {{ __('auth.login') }}
                            </button>
                        </div>
                    </form>
                    <div class="mt-4 flex flex-col items-center justify-center">
                        @if (Route::has('register'))
                            <h3 class="font-semibold py-3">
                                {{ __('auth.login_no_account') }}
                                <span class="text-tertiary-color hover:text-tertiary-hover">
                                    <a href="{{ route('register') }}">{{ __('auth.login_signup') }}</a>
                                </span>
                            </h3>
                        @endif
                        @if (Route::has('password.request'))
                            <a class="text-base text-tertiary-color hover:text-tertiary-hover font-semibold" href="{{ route('password.request') }}">
                                {{ __('auth.login_forgot_password') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
