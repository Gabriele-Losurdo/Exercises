let find = document.getElementById("find");
let nome = document.getElementById("cercacitta");

find.addEventListener('click', function() {
    let requestURL = "https://geocoding-api.open-meteo.com/v1/search?name=" + nome.value;
    let request = new XMLHttpRequest();
    request.open("GET", requestURL);
    request.responseType = "json";
    request.send();

    request.onload = function() {
        let citta = request.response;
        for (let i = 0; i < 100; i++) {
            if (citta.results[i].country == "Italy") {
                document.getElementById("longitude").innerHTML = "Longitudine: " + citta.results[i].longitude;
                document.getElementById("latitude").innerHTML = "Latitudine: " + citta.results[i].latitude;
                document.getElementById("elevation").innerHTML = "Elevazione:" + citta.results[i].elevation;
                document.getElementById("popolation").innerHTML = "Popolazione:" + citta.results[i].population;
                break;
            }
        }
    }
});