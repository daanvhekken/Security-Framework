<x-guest-layout>
        <div class="flex flex-col">
            <div class="relative">
                <div class="min-h-screen w-full flex flex-col items-center justify-center bg-white p-6">
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

                    <form method="POST" action="{{ route('register') }}" class="w-2/3 lg:w-1/2">
                        @csrf

                        <div class="py-3">
                            <label for="name" class="block text-lg font-semibold text-black">Name<span class="text-red-500 font-medium">*</span></label>
                            <input id="name" class="block mt-1 w-full border-secondary-color focus:border-tertiary-hover focus:ring focus:ring-tertiary-color focus:ring-opacity-50 rounded-md shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Name">
                        </div>

                        <div class="py-3">
                            <label for="email" class="text-lg font-semibold text-black">Email<span class="text-red-500 font-medium">*</span></label>
                            <div class="group inline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline text-tertiary-color -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div class="transition-opacity opacity-0 bg-white border border-primary-rounded text-primary-rounded text-center text-xs rounded-lg py-2 absolute z-20 group-hover:opacity-100 mb-1 px-3 pointer-events-none w-fit">
                                    Email must be unique and never used before.
                                </div>
                            </div>
                            <input id="email" class="block mt-1 w-full border-secondary-color focus:border-tertiary-hover focus:ring focus:ring-tertiary-color focus:ring-opacity-50 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required placeholder="Email address">
                        </div>

                        <div class="py-3">
                            <label for="password" class="text-lg font-semibold text-black">Password<span class="text-red-500 font-medium">*</span></label>
                            <div class="group inline">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline text-tertiary-color -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div class="transition-opacity opacity-0 bg-white border border-primary-rounded text-primary-rounded text-center text-xs rounded-lg py-2 absolute z-20 group-hover:opacity-100 mb-1 px-3 pointer-events-none w-1/2">
                                    The password must be at least 10 characters, contain at least 1 uppercase character, 1 number, and 1 special character.
                                </div>
                            </div>
                            <input type="password" class="block mt-1 w-full border-secondary-color focus:border-tertiary-hover focus:ring focus:ring-tertiary-color focus:ring-opacity-50 rounded-md shadow-sm" type="password" name="password" required autocomplete="current-password" placeholder="Password">
                        </div>

                        <div class="py-3">
                            <label for="password" class="block text-lg font-semibold text-black">Confirm Password<span class="text-red-500 font-medium">*</span></label>
                            <input type="password" class="block mt-1 w-full border-secondary-color focus:border-tertiary-hover focus:ring focus:ring-tertiary-color focus:ring-opacity-50 rounded-md shadow-sm" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="block py-3">
                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                            <div class="mt-4">
                                <x-jet-label for="terms">
                                    <div class="flex items-center">
                                        <x-jet-checkbox name="terms" id="terms"/>

                                        <div class="ml-2">
                                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                            ]) !!}
                                        </div>
                                    </div>
                                </x-jet-label>
                            </div>
                            @endif
                        </div>

                        <div class="flex items-center justify-center w-full py-3">
                            <button type="submit" class="w-full flex justify-center items-center px-4 py-2 border border-tertiary-color rounded-md font-semibold text-lg text-tertiary-color hover:bg-blue-50 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition my-4">
                                Register
                            </button>
                        </div>
                    </form>
                    <div class="mt-4 flex flex-col items-center justify-center">
                        @if (Route::has('register'))
                            <h3 class="font-semibold">
                                Already registered?
                                <span class="text-tertiary-color hover:text-tertiary-hover">
                                    <a href="{{ route('login') }}">Login</a>
                                </span>
                            </h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</x-guest-layout>
