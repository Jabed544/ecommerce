<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="nav">
	<a href="http://localhost/myproject/ecommerce/login.php" style="position:absolute;right:10px;line-height:120px;color:yellow">LOGIN</a>

	<a href="http://localhost/myproject/ecommerce/registration.php" style="position:absolute;right:80px;line-height:120px;color:orange">REGISTRATION</a>

	<h1 style="color:white;line-height:30px;left:70px;position:absolute;font-size:45px">JIO MART</h1>
	<div style="position:absolute;right:50px;line-height:60px;font-size:20px;color:red">

	<?php 
    session_start();
    echo $_SESSION['cname'];
	?>
    </div>
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
<?php
error_reporting();
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
$sql="SELECT *FROM products";
$result=mysqli_query($conn,$sql) or die ("successfully selected");
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_array($result)){

		
?>

<div class="products">
      <a href="details.php?id= <?php echo $row['id'] ?> ">
	 <img src="<?php echo $row['pimage']; ?>"height="150"width="150">
      </a>

	<h3 style="color:green"><?php echo $row['pname']; ?></h3>
    <h3 style="color:green">PRICE:$<?php echo $row['pprice']; ?></h3>
</div>


<?php 
}
}
?>


</body>
</html>