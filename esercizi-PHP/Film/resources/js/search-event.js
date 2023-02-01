let type = document.getElementById("type");
let button = document.getElementById("attType");
let search = document.getElementById("searchBy");

type.addEventListener('click', function() {

    switch (type.value) {
        case 'titolo':
            button.value = 'titolo';
            break;

        case 'nome_regista':
            button.value = 'nome_regista';
            break;

        case 'genere':
            button.value = 'genere';
            break;

        case 'anno_pubblicazione':
            button.value = 'anno_pubblicazione';
            break;
    }

});