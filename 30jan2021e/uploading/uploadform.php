<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta charset="UTF-8"> 
	<title>File Upload Form</title> 
</head> 
<body> 
	<form action="processfileupload.php" method="post" enctype="multipart/form-data"> 
	<!--multipart/form-data ensures that form data is going to be encoded as MIME data-->
		<h2>Upload File</h2> 
		<label for="fileSelect">Filename:</label> 
		<input type="file" name="photo" id="fileSelect"> 
		<!-- <input type="file" name="photo1" id="fileSelect1">  -->
		<input type="submit" name="submit" value="Upload"> 
		<!-- name of the input fields are going to be used in our php script-->
		<p><strong>Note:</strong>Only .jpg, .jpeg, .png formats allowed to a max size of 2MB.</p> 
	</form> 
</body> 
</html> 
