var grand = 100;
var pallone = document.getElementById("pallone");
var errore = document.getElementById("error");

document.getElementById("pallone").style.fontSize = grand+"px";

function refreshPage(){
    window.location.reload();// refresh page
}

function generateRandom(max){ // generatore casuale di numeri
    return Math.floor(Math.random()*max);
}

function check(){ // controllo grandezza del pallone ed eventualmente sostituire l'emoji
    if (grand>250){
        document.getElementById("container").innerHTML = "<span id=\"esplosione\">&#128165;</span><br>"+
        "<b>Il pallone è esploso!!!</b><br>"+
        "<button onclick=\"refreshPage();\">Ricarica la pagina.</button>";// bottone per ricaricare la pagina
        document.getElementById("esplosione").style.fontSize =  "100px";
    }
}

function Ingrandisci(){ // funzione per l'ingrandimento dell'emoji pallone 
    var pixel = grand + (grand*10)/100;
    grand = pixel;
    document.getElementById("pallone").style.fontSize = pixel +"px";
    document.getElementById("error").style.visibility = "hidden";
    check();
}

function Rimpicciolisci(){ // funzione per rimpicciolire dell'emoji pallone 
    var pixel = grand - (grand*10)/100;
    if (grand >=50) {
        grand = pixel;
        document.getElementById("pallone").style.fontSize = pixel +"px";
    } else {
        document.getElementById("error").style.visibility = "visible";
    }
}

window.addEventListener('keydown', function (e) { // rimpicciolisco e ingradisco il pallone usando le freccette + e -
    if ( e.key == "-"){
        Rimpicciolisci();
    }else if ( e.key == "+"){
        Ingrandisci();
    }
}, false);

// moving the ball

var x = 0;
var y = 0;
var casual;
var windowWidth = window.innerWidth; // larghezza finestra
var windowHeight = window.innerHeight; // altezza finestra

window.addEventListener('keydown', function (e) { // rimpicciolisco e ingradisco il pallone usando le freccette ArrowUp e ArrowDown
    windowWidth = window.innerWidth; // mi ricavo la larghezza della finestra
    if ( e.key == "ArrowUp"){
        if ( y > 0){
            y -= 10;
        }
    }else if ( e.key == "ArrowDown"){
        y += 10;
    }else if ( e.key == "ArrowLeft"){
        if ( x > -(windowWidth/2.2) ) {
            x -= 10;        
        }
    }else if ( e.key == "ArrowRight"){
        x +=10;
    }
    pallone.style.top = y + "px"; 
    pallone.style.left = x + "px"; 
}, false);

pallone.addEventListener('mouseover', function() { // evento per la vibrazione e il 'balzo' dell'emoji pallone
    var id=null;

    id = setInterval(() => { // vibrazione
        x -= 10;    // sinistra
        pallone.style.left = x + "px"; 
        setTimeout(() => {
            x += 10; // destra
            pallone.style.left = x + "px"; 
        }, 1);
    }, 5);
    
    setTimeout(() => { // balzo
        casual = Math.random();
        if ( casual > 0.5 ){
            x = generateRandom(windowWidth/2.2);
        }else{
            x = generateRandom(-windowWidth/2.2); 
        }
        y = generateRandom(windowHeight/2.2);
        pallone.style.left = x + "px"; 
        pallone.style.top = y + "px";    
        clearInterval(id);
    }, 1000);
});