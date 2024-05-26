$(document).ready(function(){

  $("#ver").click(function(){
    var estado = "";
    var nota1 = parseInt($("#n1").val());
    var nota2 = parseInt($("#n2").val());
    var asis = parseInt($("#asis").val());
    
    if (nota1 >= 8 && nota2 >= 8 && asis >= 80){
      estado = "Promocionado";
      $("#estado").val(estado);
    }
    else{
      if (nota1 >= 5 && nota2 >= 5 && asis>=70){
        estado = "Regular";
        $("#estado").val(estado);
      };
    }

    


  if (nota1 <= 4 || nota2 <= 4){
      estado = "Desaprobado";
      $("#estado").val(estado);

    };
  
  if (asis < 70){
      estado = "Libre";
      $("#estado").val(estado);

  };
  });
  

});