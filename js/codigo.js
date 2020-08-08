'use strict'

var OneClick = document.getElementById('next-titulo-estacion-3d');
//console.log(OneClick);
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