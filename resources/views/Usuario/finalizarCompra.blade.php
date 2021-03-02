@extends('.Layout.plantillaU')
@section('paginas')
<div class="row">
  <div class="col-lg-8">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
           1. Datos de envio
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
              <form>
                <div class="row form-row">
                 <div class="form-group col-6">
                  <label>Nombre</label>
                  <input class="form-control" type="" />
                 </div>

                 <div class="form-group col-6">
                  <label>Apellido</label>
                  <input class="form-control" type="" />
                 </div>

                 <div class="form-group col-6">
                  <label>Correo</label>
                  <input class="form-control" type="text" />
                 </div>

                 <div class="form-group col-6">
                  <label>Cedula</label>
                  <input class="form-control" type="text" />
                 </div>

                 <div class="form-group col-6">
                  <label>Telefono/Celular</label>
                  <input class="form-control" type="text" />
                 </div>

                 <div class="form-group col-6">
                  <label>Departamento</label>
                  <input class="form-control" type="text" disabled value="Antioquia"/>
                 </div>
                  
                  <div class="form-group col-6">
                   <label>Ciudad/Municipio</label>
                   <select  class="form-select" aria-label="Default select example">
                     <option selected>Selecciona el municipio o ciudad</option>
                     <option></option>
                   </select>
                  </div>

                  <div class="form-group col-6">
                    <label>Barrio</label>
                    <input class="form-control" type="text"/>
                  </div>
                  
                   <div class="row">
                     <label>Direccion</label>
                    <div class="col-sm-4 form-group">
                     <select class="form-select">
                          <option></option>
                     </select>
                    </div>
                    <div class="col-sm-2 form-group">
                      <input class="form-control" type="text"/>
                    </div>
                    <div class="col-sm-2 form-group">
                     <input class="form-control" type="text" />
                    </div>
                    <div class="col-sm-4 form-group">
                     <input class="form-control" type="text"/>
                    </div>
                  </div> 
                  <div class="col-12">
                   <label>Detalles de la direccion</label>
                   <input class="form-control" type="text"/>
                  </div>
                </div>
                <button class="mt-2 btn btn-dark" type="submit">Continuar</button>
              </form>
             
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            2. Factura de envio
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim quam voluptatibus laudantium, voluptate vel, aliquid ipsum, cumque quas nemo culpa officia reprehenderit neque quo? Ex necessitatibus id doloremque quod sequi!</p>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
           3. Informacion de envio 
          
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body"><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim quam voluptatibus laudantium, voluptate vel, aliquid ipsum, cumque quas nemo culpa officia reprehenderit neque quo? Ex necessitatibus id doloremque quod sequi!</p></div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
           4.  Metodos de pago
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">

          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
            5. Terminos y condiciones
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
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
        <p class="prod-secc-title" id="nombreC">Zapatos</p> 
      </div>     
      <div class="producto-secc-descrip">
        <p class="prod-secc-descrip" id="idProductoC">Item: 112</p>
        <p class="prod-secc-descrip" id="colorC">Color: Rosado</p>
        <p class="prod-secc-descrip" id="precioC">Precio: 2311</p>
        <p class="prod-secc-descrip" id="tallaC">Talla: 38</p>
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
     <span class="subt" id="subtotalC">$744333</span><br>
     <div  class="separadorLinea">
      <hr>
    </div>
     <span>Valor de envio:</span>
     <span class="subt" id="EnvioC">$0</span>
    </div>
    <div class="divtotal">
   <label class="total" ><strong>Total:</strong></label> 
   <label class="total" id="totalC">$56565<strong></strong></label> 
    </div>
  </div>
  <!--<a class="btn btn-primary">Volver a la bolsa</a>-->
</div>
  



@endsection
