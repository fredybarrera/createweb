$(document).ready(function () {
	var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
//        var telefono = /^([1-9][0-9]{7})$/;
        
        
        $(".nombre, #plan, .mensaje").keyup(function(){
		if( $(this).val() != "" ){
			$(".error").fadeOut();			
			return false;
		}		
	});
	$(".email").keyup(function(){
		if( $(this).val() != "" && emailreg.test($(this).val())){
			$(".error").fadeOut();			
			return false;
		}		
	});
        
//        $(".fono").keyup(function(){
//		if( $(this).val() != "" && telefono.test($(this).val())){
//			$(".error").fadeOut();			
//			return false;
//		}		
//	}); 
        
        
	$(".button1").click(function (){
		$(".error").remove();		
		if( $(".nombre").val() == "" ){
			$(".nombre").focus().after("<span class='error'>Ingrese su nombre</span>");
			return false;
		}else if( $(".email").val() == "" || !emailreg.test($(".email").val()) ){
			$(".email").focus().after("<span class='error'>Ingrese un email correcto</span>");
			return false;
		}else if( $("#plan").val() == "" ){
			$("#plan").focus().after("<span class='error'>Seleccione el plan</span>");
			return false;
		}else if( $(".mensaje").val() == "" ){
			$(".mensaje").focus().after("<span class='error'>Ingrese un mensaje</span>");
			return false;
		}
	       
  var name = $(".nombre").val();
  var email = $(".email").val();
  var phone = $(".fono").val();
  var plan = $("#plan").val();
  var mensaje = $(".mensaje").val();
  
  var dataString = 'name='+ name + '&email=' + email + '&phone=' + phone + '&plan=' + plan + '&mensaje=' + mensaje;
    //alert (dataString);return false;
    
    $.ajax({
      type: "POST",
      url: '../php/mail.php', //archivo php que se encargara de procesar la informacion enviada desde el formulario
      data: dataString,
      beforeSend: function(){
          $('#contact-form').html("<div id='message'></div>");
          $('#message').html("<h2>Enviando mensaje...</h2>")
          .fadeIn(5000, function(){
            $('#message').append("<div id='loading'></div>");           
          });
      },
      success: function() {
        $('#contact-form').html("<div id='message'></div>");
        $('#message').html("<h2>Mensaje enviado</h2>")
        .append("<p>Responderemos a la brevedad</p>")
        .hide()
        .fadeIn(1500, function() {
          $('#message').append("<div id='checkmark'></div>");
        });
      }
     });
    return false;
    });
  });
runOnLoad(function(){
  $(".nombre").select().focus();
});
