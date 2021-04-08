
let tbody = document.getElementById("tbodyC");
let botonFinalizar=document.getElementById("btnFinalizarC");
let productos = JSON.parse(localStorage.getItem("productos"));

let MostrarProductosDetalle = () => {
  if (tbody != null) {
    tbody.innerHTML = '';
    if (productos != null) {
      productos.forEach(Element => {
        tbody.innerHTML += `
        <tr>
        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="${Element.imgP}" alt="Product"/></a></td>
        <td class="pro-title"><a href="#">${Element.nombreP}</a></td>
        <td class="pro-price"><span>$${Element.precioP}</span></td>
        <td class="pro-quantity">
            <div class="pro-qty">
            <div class="col-1">
            <input type="hidden" value="${Element.itemP}"/>
            </div>
                <input type="text" value="1" />
            </div>
           
        </td>
        <td class="pro-remove" onclick="EliminarProducto(${Element.itemP})"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
             
     `;
      });
      CalculoCompraD();
    }
  }
  
}

if(botonFinalizar!=null){
  botonFinalizar.addEventListener('click',()=>{
    window.location="/Productos/finalizarCompra";
  })
}

if(tbody!=null){
tbody.addEventListener('click',(e)=>{
  AumentarValor(e)
});
}

let CalculoCompraD=()=>{
  let subtotalD = document.getElementById("subtotalD");
  let totalD = document.getElementById("totalD");
  if (productos != null) {
    let valorSubtotal = productos.reduce((e, i) => e + Number(i.precioP) * Number(i.cantidadP), 0);
    subtotalD.textContent = '$' + valorSubtotal;
    let valorTotal = valorSubtotal;
    totalD.textContent = '$' + valorTotal;
  }
}

let AumentarValor=(e)=>{
  let card=e.target.parentElement
  let itemB=card.querySelector('input[type="hidden"]').value;
  if(itemB!=null){
    let busqueda=productos.findIndex(i=>i.itemP==itemB);
    if(busqueda!=-1){
      let valor=card.querySelector('input[type="text"]').value;
       productos[busqueda].cantidadP=valor;
       localStorage.setItem("productos", JSON.stringify(productos));  
       CalculoCompraD();
    }  
  }
}

let ValidacionDeItemsCard=()=>{
  /*productos.reduce((e,i,o)=>{
    console.log(i,o)
    
  },[])*/ 
}
ValidacionDeItemsCard()
MostrarProductosDetalle();