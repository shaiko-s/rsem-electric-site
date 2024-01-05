<x-app-layout>
    <div class="_container mx-auto">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>

        <div class="areas top">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bread-crumbs">
                    <span class="bread-crumbs__text">Главная</span>
                    <span class="bread-crumbs__sign">></span>
                    <span class="bread-crumbs__text">Направления</span>
                </div>

                <h1>
                    Щитовое<br>
                    оборудование
                </h1>

                <p class="white-text">
                Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.
                </p>

            </div>
        </div>

        <div class="areas-info">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <div class="areas-info__content">
                    <div class="areas-info__stats">
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
                    <div class="areas-info__text">
                        <p>Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.</p>
                        <p>Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="realized-projects">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <h2>
                    Реализованные<br>
                    проекты
                </h2>
            </div>
            <div class="grid-container">
                <div class="grid-item">Item 1</div>

                <div class="realized-projects__header">
                    <h3 class="realized-projects__title">
                        Название проектов
                    </h3>
                    <p class="realized-projects__text">
                        Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.
                    </p>
                </div>

                <div class="grid-item">Item 3</div>
                <div class="grid-item">Item 4</div>
                <div class="grid-item">Item 5</div>
                <div class="grid-item">Item 6</div>
            </div>
        </div>

        <div class="talk-to-expert">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <h3 class="talk-to-expert__title">
                    Хотите поговорить с экспертом?
                </h3>
                <p class="talk-to-expert__text">
                Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.
                </p>
                <x-buttons.btn-blue title="Связаться с нами" id="btn-contact-us" />
            </div>
        </div>

        <div class="clients">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="clients__title">
                    Среди наших<br>
                    клиентов
                </h2>
                <div class="clients__logos">
                    <img src="/images/sber.svg" alt="">
                    <img src="/images/sber.svg" alt="">
                    <img src="/images/sber.svg" alt="">
                    <img src="/images/sber.svg" alt="">
                    <img src="/images/sber.svg" alt="">
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
