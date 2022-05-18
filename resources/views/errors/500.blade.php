<x-errors-layout>
    <x-slot name="code">
        500
    </x-slot>
    <x-slot name="message">
        {{ __('- Oops, an error has occurred. Internal server error! -') }}
    </x-slot>
</x-errors-layout>