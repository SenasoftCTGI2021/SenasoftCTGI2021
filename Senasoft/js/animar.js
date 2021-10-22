function animar(){
document.getElementById("barra").classList.toggle("final");
}

function myFunction() {
    animar();
    myVar = setTimeout(redireccion, 3000);
}

function redireccion() {
    location.href = "../Senasoft/"
}




