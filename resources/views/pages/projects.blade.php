<x-app-layout>
    <div class="_container mx-auto">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>

        <div class="projects top">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bread-crumbs">
                    <span class="bread-crumbs__text">Главная</span>
                    <span class="bread-crumbs__sign">></span>
                    <span class="bread-crumbs__text">Проекты</span>
                </div>

                <h1>
                Название проекта
                </h1>

                <p class="white-text">
                Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.
                </p>

            </div>
        </div>

        <div class="projects-info">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <div class="projects-info__content">
                    <div class="projects-info__stats">
                        <div class="stat">
                            <div class="stat__title">10 лет</div>
                            <div class="stat__text">успешной работы</div>
                        </div>
                        <div class="stat">
                            <div class="stat__title">200+</div>
                            <div class="stat__text">проектов</div>
                        </div>
                        <div class="stat">
                            <div class="stat__title">50+</div>
                            <div class="stat__text">заказчиков</div>
                        </div>
                    </div>

                    <div class="projects-info__text">
                        <p>Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- <x-buttons.btn-blue title="Связаться с нами" id="btn-contact-us" />
        <x-buttons.btn-blue title="Консультация" id="btn-consultation-blue" /> -->


        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

    </div>
</x-app-layout>
