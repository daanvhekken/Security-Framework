<x-guest-layout>
    <section class="flex items-center justify-center h-screen bg-gray-900">
        <div class="flex flex-col items-center justify-center w-4/5 lg:w-1/3">
            <img src="{{ asset('img/svg/500-illustration.svg') }}" alt="" class="h-[300px]">
            <h1 class="font-bold text-4xl mb-2 text-center text-white">Oops, something went wrong.</h1>
            <h2 class="text-xl text-center mb-20 text-white">Sorry, it's not you, it's us. Please wait and refresh the page</h2>
            <div class="flex items-center justify-center w-1/2">
                <button type="button" onclick="refreshPage()" class="w-full flex justify-center items-center px-4 py-2 bg-tertiary-color rounded-md font-semibold text-lg text-white hover:bg-tertiary-hover focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">
                   Refresh The Page
                </button>
            </div>
        </div>
    </section>
</x-guest-layout>
<script type="text/javascript">
    function refreshPage(){
        window.location.reload();
    } 
</script>