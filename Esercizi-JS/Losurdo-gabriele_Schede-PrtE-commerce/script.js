let find = document.getElementById("find");
let search = document.getElementById("cercaprodotto");

find.addEventListener('click', function() {
    let requestURL = "https://dummyjson.com/products/search?q=" + search.value;
    let request = new XMLHttpRequest();
    request.open("GET", requestURL);
    request.responseType = "json";
    request.send();

    request.onload = function() {
        let prodotti = request.response;
        for (let i = 0; i < 100; i++) {
            document.getElementById("nomeprodotto").innerHTML = prodotti.products[i].title;
            document.getElementById("descrizione").innerHTML = prodotti.products[i].description;
            document.getElementById("prezzo").innerHTML = prodotti.products[i].price;
            document.getElementById("categoria").innerHTML = prodotti.products[i].category;
            document.getElementById("immagini").innerHTML = prodotti.products[i].images[0];
        }
    }
});