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
        let options;
        for (let i = 0; i < 5; i++) {
            if ( (citta.results[i].country) == "Italy"){
                options += 
                    "<div class='card' style='width: 18rem;'>" +
                        "<div class='card-header'>" +
                            citta.results[i].name +
                        "</div>" +
                        "<ul class='list-group list-group-flush'>" +
                            "<li class='list-group-item'>" + citta.results[i].longitude + "</li>" +
                            "<li class='list-group-item'>" + citta.results[i].latitude + "</li>" +
                            "<li class='list-group-item'>" + citta.results[i].population + "</li>" +
                        "</ul>" +
                    "</div>";
            }
        }
        document.getElementById("city").innerHTML = options;
    }
});