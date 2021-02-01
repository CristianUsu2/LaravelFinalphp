import {eliminar} from './cart.js';

let boton=document.getElementById("boton");

let MostrarProductosDetalle = () => {
    let productos = JSON.parse(localStorage.getItem("productos"));
    let tbody = document.getElementById("tbody");
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
      <td><div class="qty mt-5">
      <span id="boton" class="minus bg-dark">-</span>
      <input id="input" type="number" class="count" name="qty" value="1">
      <span id="boton" class="plus bg-dark">+</span>
      </div></td>
      <td><a class="remove" onclick="EliminarProducto(${Element.itemP})"><i class="fas fa-trash-alt"></i></a></td>
     </tr>
             
     `;
        });
      }
    }
  }
  
  if(boton !=null){
  boton.addEventListener("click",()=>{
    console.log("entre");
    const input=document.getElementById("input");
    const botones=document.getElementById("boton");
    console.log(botones.textContent);
    if(botones !=null && input!=null){
      if(botones.textContent==='+'){
        console.log("condicio");
        valor=input.value;
         input.value=valor;
         console.log(valor);
      }else{
  
      }
    }
  });
  }

  MostrarProductosDetalle();