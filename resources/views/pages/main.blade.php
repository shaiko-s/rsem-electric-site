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
        <div class="electro-info">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <div class="electro-info__top">
                    <div class="electro-info__content">
                        <h2 class="electro-info__title title">
                        Готовые решения от РСЭМ
                        </h2>
                        <p class="electro-info__text black-text">
                        Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты или прототипы содержимым. Это тестовый контент, который не должен нести никакого смысла, лишь показать наличие самого текста или продемонстрировать типографику в деле.
                        </p>
                        <div class="electro-info__button">
                            <x-buttons.btn-blue title="Перейти к решениям" id="btn-goto-solutions" />
                        </div>
                    </div>
                    <div class="electro-info__energy">
                        <!-- TO DO place img -->
                    </div>
                </div>
                <div class="electro-info__stats">
                    <div class="stat">
                        <div class="stat__title">10 лет</div>
                        <div class="stat__text">успешной работы</div>
                    </div>
                    <div class="stat">
                        <div class="stat__title">50+</div>
                        <div class="stat__text">заказчиков</div>
                    </div>
                    <div class="stat">
                        <div class="stat__title">200+</div>
                        <div class="stat__text">проектов</div>
                    </div>
                </div>
                <div class="electro-info__cards">
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Кабельнесущие проблемы</p>
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Шинопровод</p>
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Светильники</p>
                    </div>
                    <div class="card card_column-span-2">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Щитовое оборудование</p>
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Потолочные системы</p>
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Сухие трансформаторы</p>
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Маслянные трансформаторы</p>
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Подстанции</p>
                    </div>
                    <div class="card card_column-span-2">
                        <h3 class="card__title">Хотите поговорить с экспертом?</h3>
                        <p class="card__text">Рыбатекст используется дизайнерами, проектировщиками и фронтендерами,</p>
                        <x-buttons.btn-white title="Консультация" id="btn-consultation-white" />
                    </div>
                    <div class="card">
                        <img src="" alt="" class="card__img">
                        <p class="card__text">Лотки</p>
                    </div>
                </div>
            </div>
        </div>

        <x-buttons.btn-blue title="К проектам" id="btn-to-projects" />
        <x-buttons.btn-blue title="Связаться с нами" id="btn-contact-us" />
        <x-buttons.btn-blue title="Консультация" id="btn-consultation-blue" />


        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

    </div>
</x-app-layout>