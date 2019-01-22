var myMap;
ymaps.ready(init);

function init () {
    myMap = new ymaps.Map('map', {
        center: [56.50, 60.35],
        zoom: 10
    }, {
        searchControlProvider: 'yandex#search'
    });

    document.getElementById('destroyButton').onclick = function () {
        myMap.destroy();
    };
}