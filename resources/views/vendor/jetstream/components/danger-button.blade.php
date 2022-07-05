<button {{ $attributes->merge(['type' => 'button', 'class' => 'font-medium text-sm w-fit flex justify-center py-2 px-8 rounded-lg text-white bg-red-600 hover:bg-red-500 focus:outline-none focus:border-red-700 focus:ring-2 focus:ring-offset-2 focus:ring-davys-grey ease-in-out duration-300 transition']) }}>
    {{ $slot }}
</button>
