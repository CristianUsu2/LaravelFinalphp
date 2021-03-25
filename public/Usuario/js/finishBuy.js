let botonDerecho = document.getElementById("iconoDerecho");
let botonIzquierdo = document.getElementById("iconoIzquierdo");
let divContenedorCards = document.getElementById("divContenedorCards");
if(botonDerecho!=null){
botonDerecho.addEventListener('click', () => {
    MovimientoDerecho();
});
}
if(botonIzquierdo!=null){
botonIzquierdo.addEventListener('click', () => {
    MovimientoIzquierdo();
});
}

let MovimientoDerecho = () => {
    console.log("me presiono el boton derecho");
}

let MovimientoIzquierdo = () => {
    console.log("me presiono el izquierdo");
}

let MostrarCard = () => {
    if (divContenedorCards != null) {
        productos.forEach(e=>{
            divContenedorCards.innerHTML=`
            <div class="producto-seccimg">
            <img class="prod-secc-img" src="${e.imgP}" id="img"/> 
           </div> 
           <div class="producto-secc-titulo">
             <p class="prod-secc-title" id="nombreC">${e.nombreP}</p> 
           </div>     
           <div class="producto-secc-descrip">
             <p class="prod-secc-descrip" id="idProductoC">Item: ${e.itemP}</p>
             <p class="prod-secc-descrip" id="precioC">Precio: ${e.precioP}</p>
             <p class="prod-secc-descrip" id="tallaC">Talla: ${e.tallaP}</p>
             <p class="prod-secc-descrip" id="cantidadC">Cantidad: ${e.cantidadP}</p>
           </div>
            `;
        });       
    }
}
MostrarCard()