$('#username').keyup(function() {
     //alert('You pressed a key');
     var username_value = $('#username').val();
     $('#username_feedback').html(username_value);
});