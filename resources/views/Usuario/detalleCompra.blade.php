@extends('Layout.plantillaU')
@section('paginas')
    <div class="row">
      <div class="col-12">
          <h1 class="titulo-Detcompra">Detalle de compra</h1>
      </div>  
     <div class="col-12 mt-2">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>Item</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Color</th>
                    <th>Talla</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </head>
            <tbody id="tbody">
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th id="subtotalD"></th>
                    <th id="envioD">Envio: $5000</th>
                    <th id="totalD"></th>
                </tr>
            </tfoot>
        </table>
     </div>
    </div>
@endsection