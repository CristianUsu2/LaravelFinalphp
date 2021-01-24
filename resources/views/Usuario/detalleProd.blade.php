@extends('Layout.plantillaU')
@section('paginas')
<div class="col-md-7 img-prod">
        <img src="../Usuario/img/img2.jpg" class="img-22"/>
    </div>
    <div class="col-md-5 seccion-detalle">
     <h1 class="titulo-prod-det">Vestido de mujer bonito pa fumachar</h1>
     <h2 class="precio-det">$43.200</h2>
     <p class="descripcion-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi possimus nulla, ut hic aliquam totam. Ea non nihil error officiis explicabo blanditiis, reiciendis ad necessitatibus doloremque a id facilis consectetur?</p>
     <h4 class="titulo-color-det">Color: Blanco<h4>
     <h4 class="tallas-det">Tallas:</h4>
     <div class="seleccion-tallas">
         <button class="boton-talla">
             <span class="talla">S</span>
         </button>
     </div>
     <button class="btn btn-success boton-carrito">Añadir al carrito</button>
    </div>
@endsection