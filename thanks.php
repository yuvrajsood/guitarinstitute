<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "guitarinstitute";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if(isset($_POST['submit']))
{
	 $name = $_POST['name'];
	 $age = $_POST['age'];
	 $city = $_POST['city'];
	 $email = $_POST['email'];
	 $phoneno = $_POST['phoneno'];
	 $sql = "INSERT INTO contact (name,age,city,email,phoneno)
	 VALUES ('$name','$age','$city','$email','$phoneno')";
	 if (mysqli_query($conn, $sql)) {
		//echo "New record created successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanks</title>
</head>
<body style="background-image:url('images/thanksbackgroundimage.jpg')">
	<div class="container-fluid"><br />
		<div class="row">
			<div class="col-sm-4">
				<figure>
					<h1 style="text-align: center;font-family:Arial;margin:20px 20px 20px 20px;color:white;">Thanks</h1>
				</figure>
			</div>
			
			<div class="col-sm-4">
				<figure>
					<h2 style="text-align: center;font-family:Arial;margin:20px 20px 20px 20px;color:white;">We received your query and will call you shortly</h2>
				</figure>
			</div>
		</div>
	</div>


</body>
</html>
