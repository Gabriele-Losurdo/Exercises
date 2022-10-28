let find = document.getElementById("find");
let nome = document.getElementById("cercacitta");

find.addEventListener('click', function() {
    let requestURL = "https://geocoding-api.open-meteo.com/v1/search?name=" + nome.value;
    let request = new XMLHttpRequest();
    request.open("GET", requestURL);
    request.responseType = "json";
    request.send();

    request.onload = function() {
        const citta = request.response;
        let options;
        for (var result in citta.results) {
            options += "<option>" + result[1] + "</option>";
        }
        document.getElementById("city").innerHTML = options;
    }

});