<x-app-layout>
    {{-- <h1 class="text-5xl font-sans">Welcome, this is my home page</h1> --}}
    <x-alert2 type='warning' class="mb-4">
        <x-slot name="title">
            <h1 class="font-sans">Welcome, this is my home page</h1>
        </x-slot>
        <p>This is the content of the alert component</p>
    </x-alert2>
    <p>hola</p>
</x-app-layout>
