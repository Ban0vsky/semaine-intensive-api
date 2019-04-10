let map
let latitude = parseFloat(document.querySelector('.transfert_latitude').value)
let longitude = parseFloat(document.querySelector('.transfert_longitude').value)

const widgetCard = document.querySelector('.card')
const widgetName = document.querySelector('.card .name')
const widgetAddress = document.querySelector('.card .address')

let heatMapData = []
let heatMap

function initMap() 
{
    let latLng = new google.maps.LatLng(latitude,longitude)

    map = new google.maps.Map(document.querySelector('.map'), 
    {
        center: latLng,
        zoom: 17,
        zoomControl: false,
        mapTypeControl: false,
        scaleControl: false,
        streetViewControl: false,
        rotateControl: false,
        fullscreenControl: false
    });

    let request = 
    {
        location: latLng,
        radius: 200,
        type: 'bar',
    };
    
    service = new google.maps.places.PlacesService(map);
    service.nearbySearch(request, callback);

    google.maps.event.addListener(map,'click',function()
    {
        widgetCard.style.visibility = "hidden"
        widgetCard.style.opacity = "0"
    }); 
}

function callback(results, status) 
{
    if (status == google.maps.places.PlacesServiceStatus.OK) 
    {
        for (let i = 0; i < 10; i++) 
        {
            let marker = new google.maps.Marker({
                position: results[i].geometry.location,
                title: results[i].name,
                animation: google.maps.Animation.DROP
            });
            window.setTimeout(function() {
                marker.setMap(map);
            }, i * 100);
            google.maps.event.addListener(marker,'click',function()
            {
                widget(results[i].name, results[i].vicinity)
            }); 
            heatMapData.push({location: results[i].geometry.location, weight: results[i].rating })
        }
    }
    heatmap = new google.maps.visualization.HeatmapLayer({
        data: heatMapData,
        map: map
    }); 
}

function widget(name, address)
{
    widgetCard.style.visibility = "visible"
    widgetCard.style.opacity = "1"
    widgetName.innerHTML = name
    widgetAddress.innerHTML = address
}

console.log('yo')