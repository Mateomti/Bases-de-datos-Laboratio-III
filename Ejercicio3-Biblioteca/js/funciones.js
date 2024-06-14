// Define la función validarFechas fuera de $(document).ready
function validarFechas(event) {
  // Obtener los valores de los campos de fecha
  var fechaIngreso = document.getElementById('prestamo').value;
  var fechaEgreso = document.getElementById('devolucion').value;

  // Convertir los valores a objetos Date
  var dateIngreso = new Date(fechaIngreso);
  var dateEgreso = new Date(fechaEgreso);

  // Verificar si la fecha de ingreso es mayor que la fecha de egreso
  if (dateIngreso > dateEgreso) {
      alert("Error: La fecha de ingreso no puede ser mayor que la fecha de egreso.");
      event.preventDefault(); // Prevenir el envío del formulario
      return false;
  }
  return true;
  
}

function confirmar(){
      return confirm('¿Esta seguro que desea eliminar este libro?');
    }



function Punto1(event){
  let ingreso = document.getElementById('ingreso').value;
  let egreso = document.getElementById('ingreso').value;
  var dateIngreso = new Date(ingreso);
  var dateEgreso = new Date(egreso);
  if (dateIngreso > dateEgreso) {
    alert("Error: La fecha de ingreso no puede ser mayor que la fecha de egreso.");
    event.preventDefault(); // Prevenir el envío del formulario
  }
  
}


function Estado() {
  var fechaEgreso = $('#devolucion').val();

  var fecha_actual = new Date();

  var dateEgreso = new Date(fechaEgreso);

  if (dateEgreso > fecha_actual) {
      $('#estado').val('En prestamo');
  } else {
      $('#estado').val('Finalizado');
  }
}

