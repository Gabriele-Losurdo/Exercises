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
            if (citta.results[i].admin1 == "Apulia") {
                document.getElementById("longitude").innerHTML = citta.results[i].longitude;
                document.getElementById("latitude").innerHTML = citta.results[i].latitude;
                document.getElementById("elevation").innerHTML = citta.results[i].elevation;
                document.getElementById("popolation").innerHTML = citta.results[i].population;
                break;
            }
        }
    }
});