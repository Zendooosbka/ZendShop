var myMap;
var myMapTwo;

// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);

function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    myMapTwo = new ymaps.Map('mapinchegototam', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [55.76, 37.64], // Москва
        zoom: 10
    }, {
        searchControlProvider: 'yandex#search'
    });

    myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [55.76, 37.64], // Москва
        zoom: 10
    }, {
        searchControlProvider: 'yandex#search'
    });

    myMap.events.add('click', function (e) {
        var coords = e.get('coords');

        document.getElementById('maps-coord-x').setAttribute('value', coords[0]);
        document.getElementById('maps-coord-y').setAttribute('value', coords[1]);

        myMap.geoObjects.removeAll();
        myMap.geoObjects.add(new ymaps.Placemark([coords[0], coords[1]], {
            balloonContent: 'Выбранное место'
            }, {
            preset: 'islands#dotIcon',
            iconColor: '#840004'
    }))}); /* Че это за ужас? Как это нормально расставить??? */
}

function SetTarget(x, y) {
    myMapTwo.geoObjects.removeAll();
    myMapTwo.geoObjects.add(new ymaps.Placemark([x, y], {
        balloonContent: 'Выбранное место'
    }, {
        preset: 'islands#dotIcon',
        iconColor: '#840004'
    }));
    myMapTwo.panTo([x, y], {});
}