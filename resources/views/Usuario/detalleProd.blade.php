@extends('Layout.plantillaU')
@section('paginas')
<input type="hidden" id="item" value="2"/>
<div class="col-md-7 img-prod">
        <img id="imgdet" src="../Usuario/img/image1.png" class="img-22" data-zoom-image="../Usuario/img/image1.jpg" />
    </div>
    <div class="col-md-5 seccion-detalle">
     <h1 class="titulo-prod-det" id="titulo">Bolso Skate</h1>
     <h2 class="precio-det" id="precio">$43.200</h2>
     <p class="descripcion-det">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi possimus nulla, ut hic aliquam totam. Ea non nihil error officiis explicabo blanditiis, reiciendis ad necessitatibus doloremque a id facilis consectetur?</p>
     <h4 class="titulo-color-det" id="color">Color: Blanco<h4>
     <h4 class="tallas-det">Tallas:</h4>
     <div class="seleccion-tallas" id="seccionTallas">
             <button class="boton-talla">S</button>
             <button class="boton-talla">M</button>
             <button class="boton-talla">L</button>
     </div>
     <button id="botonCarrito" data-pushbar-target="carrito" class="btn btn-success boton-carrito">Añadir al carrito</button>
    </div>

@endsection