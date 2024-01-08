<x-app-layout>
    <div class="_container mx-auto">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>

        <div class="services top">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bread-crumbs">
                    <span class="bread-crumbs__text">Главная</span>
                    <span class="bread-crumbs__sign">></span>
                    <span class="bread-crumbs__text">Услуги</span>
                </div>

                <h1>
                    Услуги
                </h1>

                <p class="white-text">
                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты
                </p>

            </div>
        </div>

        <!-- <x-buttons.btn-blue title="Связаться с нами" id="btn-contact-us" />
        <x-buttons.btn-blue title="Консультация" id="btn-consultation-blue" /> -->


        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

    </div>
</x-app-layout>
