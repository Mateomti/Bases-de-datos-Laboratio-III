// Define la función validarFechas fuera de $(document).ready
function validarFechas(event) {
  // Obtener los valores de los campos de fecha
  var fechaIngreso = document.getElementById('ingreso').value;
  var fechaEgreso = document.getElementById('egreso').value;

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

$(document).ready(function(){

  

});