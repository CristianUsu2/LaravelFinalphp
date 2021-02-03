let tbody = document.getElementById("tbody");

let MostrarProductosDetalle = () => {
  let productos = JSON.parse(localStorage.getItem("productos"));
  
  if (tbody != null) {
    tbody.innerHTML = '';
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
      <td><div class="qty mt-5" id="inputDiv">
      <span  class="minus bg-dark">-</span>
      <input id="inputD" type="number" class="count" name="qty" value="1">
      <span  class="plus bg-dark">+</span>
      </div></td>
      <td><a class="remove" onclick="EliminarProducto(${Element.itemP})"><i class="fas fa-trash-alt"></i></a></td>
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
  let divInput=document.getElementById("inputDiv");  
  let input = document.getElementById("inputD").value;
  divInput.innerHTML = '';
  let valor = Number(input);
  if (e.textContext === '-') {
    let r = valor - 1;
    if (r < 0) {
      r = 0;
    }
    divInput.innerHTML += `
      <span  class="minus bg-dark">-</span>
      <input id="inputD" type="number" class="count" name="qty" value="${r}">
      <span  class="plus bg-dark">+</span>
      `;
  } else {
    let r = valor + 1;
    if(r>=20){
      r=20;
    }
    divInput.innerHTML += `
      <span  class="minus bg-dark">-</span>
      <input id="inputD" type="number" class="count" name="qty" value="${r}">
      <span class="plus bg-dark">+</span>
      `;
  }
}

let CalculoCompraD=()=>{
  let cantidadin=document.getElementById("inputD").value;
  let subtotalD = document.getElementById("subtotalD");
  let totalD = document.getElementById("totalD");
  let objetos = JSON.parse(localStorage.getItem("productos"));
  if (objetos != null) {
    let valorSubtotal = objetos.reduce((e, i) => e + Number(i.precioP.replace('.', '')) * Number(i.cantidadP), 0);
    subtotalD.textContent = 'Subtotal: $' + valorSubtotal;
    let valorTotal = valorSubtotal + Number(document.getElementById("envioC").textContent.replace('$', ''));
    totalD.textContent = 'Total: $' + valorTotal;
  }
}

MostrarProductosDetalle();