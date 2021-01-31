@extends('Layout.plantillaU')
@section('paginas')
    <div class="row">
      <div class="col-12">
          <h1>Detalle de compra</h1>
      </div>  
     <div class="col-12">
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
                    <th>Subtotal: $2323</th>
                    <th>Envio: $5000</th>
                    <th>Total: $32442</th>
                </tr>
            </tfoot>
        </table>
     </div>
    </div>
@endsection