let btnLight = document.getElementById('btnLight');
let btnDark = document.getElementById('btnDark');
function getDark (){
    document.body.style.backgroundColor = 'black';
    document.body.style.color = 'white';
    document.getElementById('menu').className = 'navbar navbar-expand-lg navbar-dark fixed-top menu dark-menu';
    document.getElementById('homeHeader').className = 'mensaje dark-menu text-center';
    document.getElementById('tecnologias').className = 'tecnologias tecnologias-dark my-3 py-5';
    document.getElementById('contacto').className = 'tecnologias tecnologias-dark my-3 py-5';
    document.getElementById('btnLight').className = 'btnLight d-none';
    document.getElementById('btnDark').className = 'btnDark';
}
function getLight (){
    document.body.style.backgroundColor = 'white';
    document.body.style.color = 'black';
    document.getElementById('menu').className = 'navbar navbar-expand-lg navbar-light fixed-top menu light-menu';
    document.getElementById('homeHeader').className = 'mensaje light-menu text-center';
    document.getElementById('tecnologias').className = 'tecnologias tecnologias-light my-3 py-5';
    document.getElementById('contacto').className = 'tecnologias tecnologias-light my-3 py-5';
    document.getElementById('btnDark').className = 'btnDark d-none';
    document.getElementById('btnLight').className = 'btnLight';
}

btnLight.onclick = getDark;

btnDark.onclick = getLight;