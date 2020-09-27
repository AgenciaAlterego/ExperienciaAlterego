'use strict'


/*
Botonsitos de "siguiente" en cada separador de sección
*/

var OneClick = document.getElementById('next-titulo-estacion-3d');
//console.log(OneClick);
if (OneClick != null) {
    OneClick.addEventListener('click', function () {
        console.log('paso a estación 2');
        document.getElementById('estacion3d').className = 'hidden estacion';
        document.getElementById('estacionPostprod').className = 'estacion';
        document.getElementById('body').className = 'aecolorRojo';
        /*
            var OneClick = document.getElementsById('next-titulo-estacion-3d');
            OneClick.addEventListener('click', OnOneClick, false);
        */
    }, false);
}
if (menuHamburguesa != null) {
    menuHamburguesa.addEventListener('click', function () {
        aside.classList.toggle('hidden');
        asidebackground.classList.toggle('hidden');
    });
}

if (asidebackground != null) {
    asidebackground.addEventListener('click', function () {
        aside.classList.toggle('hidden');
        asidebackground.classList.toggle('hidden');
    });
}

if (asideCloseButton != null) {
    asideCloseButton.addEventListener('click', function () {
        aside.classList.toggle('hidden');
        asidebackground.classList.toggle('hidden');
    });
}


function entrarAlLobby(){
    document.getElementById('lobby-intro').classList.toggle('hidden');
    document.getElementById('lobby-people').classList.toggle('hidden');
}

