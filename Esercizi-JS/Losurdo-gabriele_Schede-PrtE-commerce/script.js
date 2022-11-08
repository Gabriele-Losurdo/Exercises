let find = document.getElementById("find");
let search = document.getElementById("search");

find.addEventListener('click', function() {
    let requestURL = "https://dummyjson.com/products/search?q=" + search.value;
    let request = new XMLHttpRequest();
    request.open("GET", requestURL);
    request.responseType = "json";
    request.send();

    request.onload = function() {
        let prodotti = request.response;
        for (let i = 0; i < 100; i++) {
            document.getElementById("product-title").innerHTML = prodotti.products[i].title;
            document.getElementById("product-description").innerHTML = "Descrizione: " + prodotti.products[i].description;
            document.getElementById("product-price").innerHTML = "Prezzo: " + prodotti.products[i].price;
            document.getElementById("product-category").innerHTML = "Categoria: " + prodotti.products[i].category;
            document.getElementById("Image").innerHTML = "<img src='" + prodotti.products[i].images[0] + "'/>";
        }
    }
});