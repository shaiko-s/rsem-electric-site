<x-app-layout>
    <div class="_container mx-auto">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>

        <div class="main-top">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <h1>
                    Электромонтажные<br>
                    работы
                </h1>

                <h2>
                    на коммерческих объектах
                </h2>

                <p class="white-text">
                    Сборка и дальнейший монтаж электрощита – ответственные операции. От качества сборки данного элемента зависит равномерное и стабильное распределение электрической энергии.
                </p>

                <x-buttons.btn-blue title="Подробнее" id="btn-more" />
            </div>
        </div>

        <x-buttons.btn-blue title="Перейти к решениям" id="btn-goto-solutions" />
        <x-buttons.btn-blue title="К проектам" id="btn-to-projects" />
        <x-buttons.btn-blue title="Связаться с нами" id="btn-contact-us" />
        <x-buttons.btn-blue title="Консультация" id="btn-consultation-blue" />

        <x-buttons.btn-white title="Консультация" id="btn-consultation-white" />

        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

    </div>
</x-app-layout>
