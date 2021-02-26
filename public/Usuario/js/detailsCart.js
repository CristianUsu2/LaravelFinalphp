let tbody = document.getElementById("tbody");

let MostrarProductosDetalle = () => {
  let productos = JSON.parse(localStorage.getItem("productos"));
  
  if (tbody != null) {
    tbody.innerHTML = '';
    if (productos != null) {
      productos.forEach(Element => {
        tbody.innerHTML += `
     <tr >
     <td><img class="prod-secc-img" src="${Element.imgP}" /></td>
      <input type="hidden" value="${Element.itemP}" />
      <td><div class="div-descripDet">
      <p class="nombreP-Details">${Element.nombreP}</p>
      <p class="colorP-Details">${Element.colorP}</p>
      </div></td>
      <td><p class="precio-Details">${Element.precioP}</p></td>
      <td>
      <div class="Div-Cantidad-details">
      <div class="qty mt-5" id="inputDiv">
      <span  class="minus bg-dark">-</span>
      <input id="inputD" type="number" class="count" name="qty" value="1" disabled>
      <span  class="plus bg-dark">+</span>
      </div>
      </div>
      </td>
      <td><p class="remove-details"><a class="remove" onclick="EliminarProducto(${Element.itemP})"><i class="fas fa-trash-alt"></i></a></p></td>
     </tr>
             
     `;
      });
      CalculoCompraD();
    }
  }
  
}

tbody.addEventListener('click',(e)=>{
    capturar(e)
});

let capturar=(e)=>{
    if(e.target.classList.contains('minus','bg-dark')){
        if(e.target.textContent == '-'){
        console.log("3"+e.target.parentElement);
        }
    }else if(e.target.classList.contains('plus','bg-dark')){
        console.log(e.target.parentElement);
    }
 }

let SumarRestarCantidad = (e) => {
  console.log(e)
  
}

let CalculoCompraD=()=>{
  let subtotalD = document.getElementById("subtotalD");
  let totalD = document.getElementById("totalD");
  let objetos = JSON.parse(localStorage.getItem("productos"));
  if (objetos != null) {
    let valorSubtotal = objetos.reduce((e, i) => e + Number(i.precioP.replace('.', '')) * Number(i.cantidadP), 0);
    subtotalD.textContent = 'Subtotal: $' + valorSubtotal;
    let valorTotal = valorSubtotal;
    totalD.textContent = 'Total: $' + valorTotal;
  }
}

MostrarProductosDetalle();