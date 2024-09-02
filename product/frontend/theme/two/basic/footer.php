<script src="<?=$base_frontend_th_two_js?>app.js"></script>
<script src="<?=$base_frontend_th_two_js?>jquery-2.1.3.min.js"></script>
   <script src="<?=$base_frontend_th_two_js?>plugins.js"></script>
   <script>
      
      (function($) {

$('#contactForm').validate({

  /* submit via ajax */
  submitHandler: function(form) {

    $.ajax({      	

      type: "POST",
      url: "include/check/contact.php",
      data: $(form).serialize(),
      
      success: function(msg) {

        // Message was sent
        if (msg == 'OK') {
          $('#message-warning').fadeIn().css("display", "none");
          $('#contactForm').fadeOut();
          $('#message-success').fadeIn().css("display", "flex");
        }
        // There was an error
        else {
          $('#message-warning').html('<i class="fa fa-times"></i><span style="margin-left: 1rem;">' + msg + '</span>');
          $('#message-warning').fadeIn().css("display", "flex");
        }
      },
      error: function() {
        $('#message-warning').html('<i class="fa fa-times"></i><span style="margin-left: 1rem;">' + msg + '</span>');
        $('#message-warning').fadeIn().css("display", "flex");
      }

    });     		
  }

});

})(jQuery);


   </script>