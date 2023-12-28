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
                        <img src="/images/energy.png" alt="ENERGY">
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
                        <img src="/images/kabelenesuscie-problemi.jpg" alt="" class="card__img">
                        <p class="card__text">
                            Кабельнесущие проблемы
                            <svg class="card__icon" class="btn-blue__icon" width="19" height="19" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.6551 15C23.6551 14.6987 23.5547 14.4475 23.3538 14.2466L21.8303 12.7232L15.7701 6.66294C15.5692 6.46205 15.318 6.3616 15.0167 6.3616C14.7154 6.3616 14.4643 6.46205 14.2634 6.66294L12.7399 8.18638C12.539 8.38727 12.4386 8.63839 12.4386 8.93973C12.4386 9.24107 12.539 9.49218 12.7399 9.69308L15.904 12.8571H7.49997C7.20979 12.8571 6.95867 12.9632 6.74662 13.1752C6.53456 13.3873 6.42854 13.6384 6.42854 13.9286V16.0714C6.42854 16.3616 6.53456 16.6127 6.74662 16.8248C6.95867 17.0368 7.20979 17.1429 7.49997 17.1429H15.904L12.7399 20.3069C12.5279 20.519 12.4218 20.7701 12.4218 21.0603C12.4218 21.3504 12.5279 21.6016 12.7399 21.8136L14.2634 23.3371C14.4643 23.5379 14.7154 23.6384 15.0167 23.6384C15.318 23.6384 15.5692 23.5379 15.7701 23.3371L21.8303 17.2768L23.3538 15.7533C23.5547 15.5525 23.6551 15.3013 23.6551 15ZM27.8571 15C27.8571 17.3326 27.2823 19.4838 26.1328 21.4537C24.9832 23.4235 23.4235 24.9833 21.4536 26.1328C19.4838 27.2824 17.3326 27.8571 15 27.8571C12.6674 27.8571 10.5161 27.2824 8.54628 26.1328C6.57642 24.9833 5.01671 23.4235 3.86715 21.4537C2.7176 19.4838 2.14282 17.3326 2.14282 15C2.14282 12.6674 2.7176 10.5162 3.86715 8.54631C5.01671 6.57645 6.57642 5.01674 8.54628 3.86718C10.5161 2.71763 12.6674 2.14285 15 2.14285C17.3326 2.14285 19.4838 2.71763 21.4536 3.86718C23.4235 5.01674 24.9832 6.57645 26.1328 8.54631C27.2823 10.5162 27.8571 12.6674 27.8571 15Z" fill="white"/>
                            </svg>
                        </p>
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