const { strict } = require("assert");

'use strict'
class mensajes{

  constructor();

   export confirmar(){
   let resultado="Swal.fire({'icon':'success','title':'Operacion exitosa','text':'Se ejecuto exitosamente'})";
    return resultado;
  }

  export error(){
    let resultado="Swal.fire({'icon':'error','title':'No se pudo ejecutar','text':'No seejecuto exitosamente'})";
    return resultado;
  }
}
