<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.form{
			position:absolute;
			border:1px solid green;
			height:200px;
			width:300px;
			right:550px;
			margin:20px;
			padding:10px;
			background-color:gray;

		}
	</style>
	<title></title>
</head>
<body>
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

	<form class="form"method="POST">
		MOBILE NO:<input type="num"name="mobile"><br><br>
		PASSWORD:<input type="num"name="pass"><br><br><br>
		<input type="submit"name="submit">
	
	</form>
<?php 
session_start();


$conn=mysqli_connect("localhost","root","");
if(!$conn){
	//echo " NOT CONNECT TO THE SERVER";
}
$db=mysqli_select_db($conn,"ecommerce");
if(!$db){
	echo "NOT SELECT TO THE DATABASE";
}else{
	//echo "DATABASE SE;ECT SUCCESSFULLY";
}
If(isset($_POST['submit'])){
$password=$_POST['pass'];

$sql="SELECT * FROM cutomerdata WHERE password=$password";
$result=mysqli_query($conn,$sql); //or die ("successfully selected");
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_array($result);
	$_SESSION['cname']=$row['customer'];
    header('location:sellpage.php'); 
 ?> 

 <?php 
}else{
	 echo "<p calss style='position:absolute;right:700px;top:320px;color:red'>PASSWORD WRONG</p>";

}

}

 ?> 
</body>
</html>