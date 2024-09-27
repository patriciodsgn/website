$(function() {
  // Validate the contact form
  $('#contactform').validate({
    // Specify what the errors should look like
    // when they are dynamically added to the form
    errorElement: "label",
    wrapper: "div",
    errorPlacement: function(error, element) {
      error.insertBefore( element);
      // error.wrap("<div class='error'></div>");
      // $("<td></td>").insertBefore(error);
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
        required: "Por favor ingresa tu nombre.",
        minlength: jQuery.format("Al menos {0} caracteres son requeridos.")
      },
      email: {
        required: "Por favor ingresa tu email.",
        email: "Por favor ingresa un email válido."
      },
      message: {
        required: "Por favor ingresa tu mensaje.",
        minlength: jQuery.format("Al menos {0} caracteres son requeridos.")
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