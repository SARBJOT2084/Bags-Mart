// Initialize and add the map
function initMap() {
    // The location of Uluru
    //30.520084610672846, 76.65925395214865
    const uluru = { lat: 30.520084610672846, lng: 76.65925395214865 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}

window.initMap = initMap;