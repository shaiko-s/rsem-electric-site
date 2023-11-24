<x-app-layout>
    <div class="_container">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>

        <h1>
            Электромонтажные работы
        </h1>

        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

    </div>
</x-app-layout>
