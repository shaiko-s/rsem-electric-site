<x-app-layout>
    <div class="_container mx-auto">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>
        <div class="about top">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bread-crumbs">
                    <span class="bread-crumbs__text">Главная</span>
                    <span class="bread-crumbs__sign">></span>
                    <span class="bread-crumbs__text">О компании</span>
                </div>

                <h1 class="about-top__title">
                    О Компании
                </h1>

                <p class="white-text">
                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.
                </p>
            </div>
        </div>

        <div class="electro-project">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <h2>
                    Реализуйте свой проект вместе с РСЭМ
                </h2>
                <x-buttons.btn-blue title="К проектам" id="btn-to-projects" />
            </div>
        </div>
        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>
    </div>
</x-app-layout>
