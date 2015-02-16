<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="image-upload" id="image-upload">
		<input type="button" value="Upload Image" name="submit" id="submit">
	</form>
</body>
<script src="jquery.js"></script>
<script type="text/javascript">

	$("#submit").click(function(){
		var file = document.getElementById('image-upload').files[0];
		var formData = new FormData();
		formData.append('image-upload', file, file.name);
		var xhr = new XMLHttpRequest();
	    xhr.open('post', 'upload.php', true);
	    xhr.send(formData);
	});
</script>
</html>