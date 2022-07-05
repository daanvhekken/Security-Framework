<x-guest-layout>
    <div class="flex flex-col lg:flex-row">
        <div class="relative lg:w-1/2 lg:top-0 lg:right-0">
            <div class="min-h-screen w-full flex flex-col items-center justify-center bg-white p-6">
                <div class="w-2/3 lg:w-1/2 my-10">
                    <h1 class="text-3xl font-bold text-center lg:text-left">Verify Your Email Address</h1>
                    <p class="text-black mt-2 text-center lg:text-left text-base">
                        {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
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

                @if (session('status') == 'verification-link-sent')
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
                    </div>
                @endif

                <div class="w-2/3 lg:w-1/2">
                    <form method="POST" action="{{ route('verification.send') }}">
                        @csrf

                        <button type="submit" class="w-full flex justify-center items-center px-4 py-2 bg-tertiary-color rounded-md font-semibold text-lg text-white hover:bg-tertiary-hover focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                            {{ __('Resend Verification Email') }}
                        </button>
                    </form>
                    <div class="w-full mt-10 flex items-center justify-around gap-2">
                        <a href="{{ route('profile.show') }}" class="underline text-base text-davys-grey hover:text-tertiary-hover font-semibold">
                            {{ __('Edit Profile') }}
                        </a>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="underline text-base text-davys-grey hover:text-tertiary-hover font-semibold">
                                {{ __('Log Out') }}
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
