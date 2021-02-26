@extends('Layout.plantillaU')
@section('paginas')
    <div class="row">
     <div class="col-12 mt-2">
        <table class="table">
            <thead class="table-dark tcabeza">
                <tr>
                    <th>Item</th>
                    <th></th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </head>
            <tbody id="tbody">
            </tbody>
            <tfoot>
                <tr>
                    <th id="subtotalD"></th>
                    <th id="totalD"></th>
                </tr>
            </tfoot>
        </table>
     </div>
    </div>
@endsection