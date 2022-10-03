var grand = 100;

document.getElementById("pallone").style.fontSize = grand+"px";

function refreshPage(){
    window.location.reload();// refresh page
}

function check(){
    if (grand>250){
        document.getElementById("container").innerHTML = "<span id=\"esplosione\">&#128165;</span><br>"+
        "<b>Il pallone è esploso!!!</b><br>"+
        "<button onclick=\"refreshPage();\">Ricarica la pagina.</button>";// bottone per ricaricare la pagina
        document.getElementById("esplosione").style.fontSize =  "100px";
    }
}

function Ingrandisci(){
    var pixel = grand + (grand*10)/100;
    grand = pixel;
    document.getElementById("pallone").style.fontSize = pixel +"px";
    document.getElementById("error").style.visibility = "hidden";
    check();
}

function Rimpicciolisci(){
    var pixel = grand - (grand*10)/100;
    if (grand >=50) {
        grand = pixel;
        document.getElementById("pallone").style.fontSize = pixel +"px";
    } else {
        document.getElementById("error").style.visibility = "visible";
    }
}

window.addEventListener('keydown', function (e) { // rimpicciolisco e ingradisco il pallone usando le freccette ArrowUp e ArrowDown
    if ( e.key == "ArrowDown"){
        Rimpicciolisci();
    }else if ( e.key == "ArrowUp"){
        Ingrandisci();
    }
}, false);