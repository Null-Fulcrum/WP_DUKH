jQuery(document).ready(function($){
  var form = $('send_email');
  var action = form.attr('action');
  form.on('submit', function(event){
    event.preventDefault();
    var formData = {
      name: $('#name').val(),
      city: $('#city').val(),
      budget: $('#budget').val(),
      phone: $('#phone').val(),
      mail: $('#mail').val(),
      comment: $('#comment').val()
    }
    $.$.ajax({
      url: action,
      type: 'POST',
      data: formData,
      success: function(){
        form.html("ваш запрос отправлен");
      }
    });

  });


});
