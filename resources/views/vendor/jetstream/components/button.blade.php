<button {{ $attributes->merge(['type' => 'submit', 'class' => 'font-medium text-sm w-fit flex justify-center py-2 px-8 rounded-lg text-white bg-tertiary-color hover:bg-tertiary-hover focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-davys-grey ease-in-out duration-300 transition']) }}>
    {{ $slot }}
</button>
