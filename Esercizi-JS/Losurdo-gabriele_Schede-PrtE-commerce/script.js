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
        document.getElementById("product-title").innerHTML = prodotti.products[0].title;
        document.getElementById("product-description").innerHTML = prodotti.products[0].description;
        document.getElementById("product-price").innerHTML = prodotti.products[0].price;
        document.getElementById("product-category").innerHTML = prodotti.products[0].category;
        document.getElementById("Image").innerHTML = "<img src='" + prodotti.products[0].images[0] + "' style='height:18rem; width:18rem;'/>";
    }
});