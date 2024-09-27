// $(function() {
//   // Validate the contact form
//   $('#contactform').validate({
//     // Specify what the errors should look like
//     // when they are dynamically added to the form
//     errorElement: "label",
//     wrapper: "td",
//     errorPlacement: function(error, element) {
//       error.insertBefore( element.parent().parent() );
//       error.wrap("<tr class='error'></tr>");
//       $("<td></td>").insertBefore(error);
//     },


$(function() {
  // Validate the contact form
  $('#contactform').validate({
    // Specify what the errors should look like
    // when they are dynamically added to the form
    errorElement: "label",
    wrapper: "",
    errorPlacement: function(error, element) {
      error.insertBefore( element.parent() );
      error.wrap("<div class='error'></div>");
      $("").insertBefore(error);
    },

  	// Add requirements to each of the fields
  	rules: {
  		name: {
  			required: true,
  			minlength: 2
  		},
  		email: {
  			required: true,
  			email: true
  		},
  		message: {
  			required: true,
  			minlength: 10
  		}
  	},

  	// Specify what error messages to display
  	// when the user does something horrid
  	messages: {
  		name: {
  			required: "Introduzca su nombre.",
  			minlength: jQuery.format("Al menos {0} caracteres necesarios.")
  		},
  		email: {
  			required: "Por favor Ingrese su email",
  			email: "Por favor introduzca una email válido."
  		},
  		message: {
  			required: "Por favor ingrese un mensaje.",
  			minlength: jQuery.format("Al menos {0} caracteres necesarios.")
  		}
  	},

  	// Use Ajax to send everything to processForm.php
  	submitHandler: function(form) {
  		$("#send").attr("value", "Enviando...");
  		$(form).ajaxSubmit({
  			success: function(responseText, statusText, xhr, $form) {
  				$(form).slideUp("fast");
  				$("#response").html(responseText).hide().slideDown("fast");
  			}
  		});
  		return false;
  	}
  });
});