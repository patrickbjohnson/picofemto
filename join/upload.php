<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <!-- // <script src="jquery.form.js"></script> -->
</head>
<body>

<h1>jQuery Uploads</h1>

<form id="myform" action="mail.php" enctype="multipart/form-data" method="POST">
  <ul>
    <li>
      <label for="name">Name:</label>
      <input type="text" name="name" id="name">
    </li>

    <li>
      <label for="file_upload">File:</label>
      <input type="file" name="file_upload" id="file_upload">
    </li>

    <li><input class="button green" type="submit" name="submit" value="Submit Content"></li>
  </ul>
</form>

</body>
<script type="text/javascript">
  $("#myform").submit(function(e){
    e.preventDefault();

    var fd = new FormData();
    var file_data = $('input[type="file"]')[0].files; // for multiple files
    for(var i = 0;i<file_data.length;i++){
       fd.append("file_"+i, file_data[i]);
    }
    var other_data = $('#myform').serializeArray();
    $.each(other_data,function(key,input){
       fd.append(input.name,input.value);
    });
    $.ajax({
       url: 'mail.php',
       data: fd,
       contentType: false,
       processData: false,
       type: 'POST',
       success: function(data){
           console.log(data);
           // console.log(file_data);
       }, 
       error: function(data){
        console.log(data);
       }
    });
  });

     
</script>
</html>