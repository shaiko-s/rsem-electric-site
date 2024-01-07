<x-app-layout>
    <div class="_container mx-auto">
        <x-slot name="header">
            @include('layouts.header')
        </x-slot>

        <!-- Yandex Maps JavaScript API -->
        <script src="https://api-maps.yandex.ru/2.1/?apikey=<your-api-key>&lang=ru_RU" type="text/javascript"></script>

        <script type="text/javascript">
            ymaps.ready(init);
            function init(){
                var myMap = new ymaps.Map("map", {
                    center: [55.76, 37.64], // Coordinates of Moscow
                    zoom: 16
                });

                // Add a placemark with a custom button
                var myPlacemark = new ymaps.Placemark([55.76, 37.64], {}, {
                    balloonContentBody: '<p>Address: Moscow</p>' +
                                        '<a href="https://yandex.ru/maps/?rtext=~55.76,37.64" target="_blank">How to get there</a>'
                });

                myMap.geoObjects.add(myPlacemark);
            }
        </script>

        <div class="contacts top">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">

                <div class="bread-crumbs">
                    <span class="bread-crumbs__text">Главная</span>
                    <span class="bread-crumbs__sign">></span>
                    <span class="bread-crumbs__text">Контакты</span>
                </div>

                <h1>
                    Контактная<br>
                    информация
                </h1>

                <p class="white-text">
                    Рыбатекст используется дизайнерами, проектировщиками и фронтендерами, когда нужно быстро заполнить макеты
                </p>

                <p>
                    Телефон:<br>
                    <span>8 862 378 03 30</span>
                </p>

                <p>
                    Адрес:<br>
                    <span>Москва</span>
                </p>

            </div>
        </div>

        <!-- Yandex Map -->
        <div id="map" style="width: 100%; height: 400px;"></div>

        <div class="electro-project">
            <div class="content-wrapper mx-auto px-4 sm:px-6 lg:px-8">
                <h2>
                    Поможем запустить ваш проект
                </h2>
                <x-buttons.btn-blue title="Консультация" id="btn-consultation-blue" />
            </div>
        </div>

        <!-- <x-buttons.btn-blue title="Связаться с нами" id="btn-contact-us" />
        <x-buttons.btn-blue title="Консультация" id="btn-consultation-blue" /> -->


        <x-slot name="footer">
            @include('layouts.footer')
        </x-slot>

    </div>
</x-app-layout>
