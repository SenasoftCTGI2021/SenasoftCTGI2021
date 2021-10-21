alert("Bienvenido al juego")

let cartasT = ["programador" ] 
let nombre = ["juan","pedro","Carlos","Juanita","Antonio","Carolina","Manuel"]

function displayCard(){
    let singleCard = cartasT[Math.floor(Math.random()* cartasT.length)];
    let singleNumeros = nombre[Math.floor(Math.random()* nombre.length)]
    let showCard = `${singleNumeros} ${singleCard}`;
    document.getElementById("showing").style.background = "#0accff";
    document.getElementById("showing").innerHTML = showCard
    

}

  
 let cartas2 = ["Modulo"]
 let nombre2 = ["Nómina","Facturación","Recibos","Comprobante contable","Usuarios","Contabilidad"]

function displayCard2(){
    let singleCard = cartas2[Math.floor(Math.random()* cartas2.length)];
    let singleNumeros = nombre2[Math.floor(Math.random()* nombre2.length)]
    let showCard = `${singleNumeros} ${singleCard}`;
    document.getElementById("showing2").style.background = "#0accff";
    document.getElementById("showing2").innerHTML = showCard
}

let cartas3 = ["error"]
let nombre3 = [" 404","Stack overflow","Memory out of range","Null pointer","Syntax error","Encoding error"]
 
function displayCard3(){
    let singleCard = cartas3[Math.floor(Math.random()* cartas3.length)];
    let singleNumeros = nombre3[Math.floor(Math.random()* nombre3.length)]
    let showCard = `${singleNumeros} ${singleCard}`;
    document.getElementById("showing3").style.background = "#0accff";
    document.getElementById("showing3").innerHTML = showCard
}

