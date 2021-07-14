<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.myform{
			position:absolute;
			border:1px solid green;
			width:600px;
			height:500px;
			right:500px;
			margin:40px;
	        background-color:#F1F6F7;

		}
	</style>
	
</head>
<div class="nav">
	<h1 style="color:white;line-height:30px;left:70px;position:absolute;font-size:45px">JIO MART</h1>
</div>
<div class=nav_2>
	<ul>
		<li><a>FRUIT</a></li>
		<li><a>VEGITABLE</a></li>
		<li><a>HOME CARE</a></li>
		<li><a>GROCERRY</a></li>
		<li><a>ELECTRONIC</a></li>
		<li><a>PERSONAL CARE</a></li>
		<li><a>DRY FOOD</a></li>
		<li><a>DAIRY</a></li>
		<li><a>LEAVES</a></li>
	</ul>
</div>

<body>
	
<form class="myform"method="POST">
	<h3 style="text-align:center;color:green;">CUSTOMER REGISTRATION FORM</h3>
	CUSTOMER NAME:<input type="test"name="custoname"placeholder="CUMTOMER NAME"size="50"><br><br>
	FULL ADDRESS:<input type="text"name="address"placeholder="ADDRESS"size="50"><br><br>
	PIN CODE:<input type="num"name="pin"placeholder="PIN CODE"><br><br>
	MOBILE NO:<input type="num"name="mobile"placeholder="MOBILE NO"size="40"><br><br>
	EMAIL:<input type="text"name="email"placeholder="EMAIL"size="50"><br><br>
	PASSWORD:<input type="num"name="pword"placeholder="PASSWORD"size="50"><br><br><br><br>

	<input type="submit"name="submit"value="REGISTER"style="background-color:green">
</form>
<?php
$conn=mysqli_connect("localhost","root","");
if(! $conn){
	echo " NOT CONNECTE TO THE SERVER";
}
$dbase=mysqli_select_db($conn,"ecommerce");
if(!$dbase){
	echo "Not select database";
}else{
	//echo "database select successfully";
}
if(isset($_POST['submit'])){
$customer=$_POST['custoname'];
$address=$_POST['address'];
$pin=$_POST['pin'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['pword'];
$sql="INSERT INTO cutomerdata(customer,address,pincode,mobile,email,password)
VALUES('$customer','$address','$pin','$mobile','$email','$password')";
if(!mysqli_query($conn,$sql)){
	echo "DATA NOT INSERTED";
}else{
	echo "DATA DATA INSERTED SUCCESSFULLY ";
}
}	
?>

</body>
</html>
