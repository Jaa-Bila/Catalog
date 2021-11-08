<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mt-5">
        <div class="row">
            @livewire('multiple-image-upload')
        </div>
        <div class="row">
            @livewire('image-view')
        </div>
    </div>
</x-app-layout>
