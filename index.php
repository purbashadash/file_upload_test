
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Testing</title>
<script src="js/jquery-1.10.2.min.js" type="text/javascript"></script> 
<script src="js/jquery.form.js" type="text/javascript"></script>
<script>
// $(document).on('click',"#submit", function () {

//   $("#oneline_regd").ajaxForm(
//   {
// 	  beforeSend: function()
// 	  {
// 		  $("#submit").html('');
// 		  $("#submit").html('<div class="text-center">loading...</div>');  
// 	  },
// 	  success: function(html)
// 	  {
// 	  	alert(html);
// 		  $("#submit").empty();
// 		  $("#submit").html('Submit');
// 	  },
  
//   }).submit();
  
// });
$(document).on('click',"#submit", function () {
    var file_data = $('#upload_file').prop('files')[0];
    var username = $('#username').val();   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    form_data.append('username', username);                           
    $.ajax({
                url: 'postpage.php', // point to server-side PHP script 
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(php_script_response){
                    alert(php_script_response); // display response from the PHP script, if any
                }
     });
});
</script>

</head>
<body>
<form action="../file_upload_post_path/postpage.php" method="post" enctype="multipart/form-data" id="oneline_regd">
	<label>Username</label><input type="text" name="username" id="username"></input><br>
	<input type="file" name="upload_file" id="upload_file"></input><br>
	<button type="button" name="submit" id="submit">Submit</button>
</form>
</body>