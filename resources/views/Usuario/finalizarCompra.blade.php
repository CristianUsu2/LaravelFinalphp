@extends('.Layout.plantillaU')
@section('paginas')
<div class="row">
  <div class="col-lg-8">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Accordion Item #1
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Accordion Item #2
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Accordion Item #3
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-4">
  <div class="col-factura">
    <div class="div-titulo-finalizarC">
     <h4 class="titulo-finalizarC">Resumen Pedido</h4>
    </div>
    <div class="producto-seccion modifi">
      <div class="producto-seccimg">
       <img class="prod-secc-img" src="http://127.0.0.1:8000/Usuario/img/jmm.jpg" id="img"/> 
      </div> 
      <div class="producto-secc-titulo">
        <p class="prod-secc-title" id="nombreC">Hola mi amor</p> 
      </div>     
      <div class="producto-secc-descrip">
        <p class="prod-secc-descrip" id="idProductoC">Item:112</p>
        <p class="prod-secc-descrip" id="colorC">Color: mi amor</p>
        <p class="prod-secc-descrip" id="precioC">Precio: 2311</p>
        <p class="prod-secc-descrip" id="tallaC">Talla:M</p>
      </div>
    </div>
  </div>
  <div class="divIconoDerecha">
    <span class="icon-derecha"><i class="fas fa-arrow-alt-circle-right"></i></span>
    </div>
    <div class="divIconoIzquierda">
    <span class="icon-izquierda"><i class="fas fa-arrow-alt-circle-left"></i></span>
    </div>
  <div class="valores-compra">
    <div class="contenido-valores">
     <span>SubTotal:</span>
     <span class="subt" id="subtotalC"></span><br>
     <div  class="separadorLinea">
      <hr>
    </div>
     <span>Valor de envio:</span>
     <span class="subt" id="EnvioC"></span>
    </div>
    <div class="divtotal">
   <label class="total" ><strong>Total:</strong></label> 
   <label class="total" id="totalC"><strong></strong></label> 
    </div>
  </div>
  <!--<a class="btn btn-primary">Volver a la bolsa</a>-->
</div>
  



@endsection
