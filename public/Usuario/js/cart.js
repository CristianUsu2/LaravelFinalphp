
let botonCompra = document.getElementById("botonCarrito");
let id = document.getElementById("item");
let imgE = document.getElementById("imgdet");
let articulo = document.getElementById("titulo");
let precio = document.getElementById("precio");
let DivTallas = document.getElementById("seccionTallas");
let color = document.getElementById("color");
let divCarrito = document.getElementById("CartProductos");
let tallaP;
let DetalleC=document.getElementById("DetalleC");

DetalleC.addEventListener("click", ()=>{
 window.location="/Productos/detalleCompra";
})

if(botonCompra !=null && DivTallas!=null){
botonCompra.addEventListener("click", () => {
  AñadirElementoLocalStorage();
});

DivTallas.addEventListener("click", (e) => {
  SacarTalla(e);
});
}

let SacarTalla = (e) => {
  let talla = e.target.textContent;
  tallaP = talla;
}

let AñadirElementoLocalStorage = () => {
  if (tallaP != null) {
    let itemP = id.value;
    let nombreP = articulo.textContent;
    let precioS = precio.textContent;
    let imgP = imgE.src;
    let colorP = color.textContent;
    let precioP=precioS.substring(1);
    let cantidadP=1;
    const producto = {
      itemP,
      nombreP,
      precioP,
      colorP,
      imgP,
      tallaP,
      cantidadP
    }
    if (localStorage.getItem("productos") == null) {
      let Productos = [];
      Productos.push(producto);
      localStorage.setItem("productos", JSON.stringify(Productos));
    } else {
      let ProductosAgregados = JSON.parse(localStorage.getItem("productos"));
      ProductosAgregados.push(producto);
      localStorage.setItem("productos", JSON.stringify(ProductosAgregados));
    }
    tallaP = null;
    MostrarProductos();
  } else {
    alert("selecciona la talla");
  }
}

let MostrarProductos = () => {
  let productos = JSON.parse(localStorage.getItem("productos"));
  divCarrito.innerHTML = '';
  if (productos != null) {
    productos.forEach(Element => {
      divCarrito.innerHTML += `
   <div class="producto-seccion">
      <div class="producto-seccimg">
       <img class="prod-secc-img" src="${Element.imgP}" id="img"/> 
      </div> 
      <div class="producto-secc-titulo">
        <p class="prod-secc-title" id="nombreC">${Element.nombreP}</p> 
        <a class="remove" onclick="EliminarProducto(${Element.itemP})"><i class="fas fa-trash-alt"></i></a>
      </div>     
      <div class="producto-secc-descrip">
        <p class="prod-secc-descrip" id="idProductoC">Item:${Element.itemP}</p>
        <p class="prod-secc-descrip" id="colorC">Color:${Element.colorP}</p>
        <p class="prod-secc-descrip" id="precioC">Precio:${Element.precioP}</p>
        <p class="prod-secc-descrip" id="tallaC">Talla:${Element.tallaP}</p>
      </div>
   </div>
   `;
    });
  }
  NumeroProductos();
  CalculoCompra();
}
let NumeroProductos=()=>{
  let objetos=JSON.parse(localStorage.getItem("productos"));
  if(objetos!=null){
  let array=Object.keys(objetos);
  let cantidadP=array.length;
  if(cantidadP!=0){
    let iconoTotal=document.getElementById("iconoTotal");
    iconoTotal.textContent=cantidadP;
  }else{
    iconoTotal.innerHTML='';
  }
 }
}

let EliminarProducto=(e)=>{
  let objetos=JSON.parse(localStorage.getItem("productos"));
  let indice=objetos.findIndex(elemt=>elemt.itemP == e);
  objetos.splice(indice,1);
  localStorage.setItem("productos", JSON.stringify(objetos));
  MostrarProductos();
}

let CalculoCompra=()=>{
  let subtotal=document.getElementById("subtotalC");
  let total=document.getElementById("totalC");
  let objetos=JSON.parse(localStorage.getItem("productos"));
  if(objetos !=null){
  let valorSubtotal=objetos.reduce((e,i)=>e+Number(i.precioP.replace('.',''))* Number(i.cantidadP),0);
  subtotal.textContent='$'+valorSubtotal;
  let valorTotal=valorSubtotal+Number(document.getElementById("envioC").textContent.replace('$',''));
  total.textContent='$'+valorTotal;
  }
}

let MostrarProductosDetalle = () => {
  let productos = JSON.parse(localStorage.getItem("productos"));
  let tbody=document.getElementById("tbody");
  if(tbody !=null){
  tbody.innerHTML='';
  if (productos != null) {
    productos.forEach(Element => {
      tbody.innerHTML += `
   <tr>
    <td>${Element.itemP}</td>
    <td>${Element.nombreP}</td>
    <td><img class="prod-secc-img" src="${Element.imgP}" /></td>
    <td>${Element.colorP}</td>
    <td>${Element.tallaP}</td>
    <td>${Element.precioP}</td>
    <td><input type="number" /></td>
    <td><a class="remove" onclick="EliminarProducto(${Element.itemP})"><i class="fas fa-trash-alt"></i></a></td>
   </tr>
            
   `;
    });
  }
  }
}

MostrarProductos();
NumeroProductos();
MostrarProductosDetalle();
