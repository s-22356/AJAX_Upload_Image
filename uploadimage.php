<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>
<body>
	Enter Name:<input type="text" id="name"><br>
	UploadImage:<input type="file" name="uploadimage"><br>
	<input type="submit" id="submit" value="submit">
	<div id="p1"></div>
<script type="text/javascript">
	$("document").ready(function(){
		$("#submit").click(function(){
			var nme=$("#name").val();
			var uploadimage=$("input[name='uploadimage']")[0].files[0];
			// document.write(uploadimage);
			// document.write(nme);

			var formdata=new FormData();
			formdata.append("Name",nme);
			formdata.append("Image"uploadimage);
			$.ajax({
				type:"post",
				url:"uploadimageaction.php",
				data:formdata,
				contentType:false,
				processData:false

			}).done(function(data){
				$("#p1").html(data);
			});
	    });
    });
</script>
</body>
</html>