//verificar usuario existente metodo $.post
$('#usuario').change(function(){
  $.post('ajax_validacion_usuario.php',{
      usuario: $('#usuario').val(),
      beforeSend: function(){
        $('.validacion').html("Espere un momento...");
      }
  },function(respuesta){
    $('.validacion').html(respuesta);
  });
});

$('#btn_guardar').hide();

//comparar contraseñas
$('#pass2').change(function(){
  if($('#pass1').val()===$('#pass2').val() && $('#pass1').val()!="" ){
    swal('¡Bien hecho...!','Las contraseñas coinciden','success');
    $('#btn_guardar').show();
  }else{
    swal('¡Ops...!','Las contraseñas no coinciden','error');
    $('#btn_guardar').hide();
  }
});

//Desactivar la tecla enter al presionar en los campos del formulario
$('.form').keypress(function(e) {
  if (e.which ==13){
    return false;
  }
});
