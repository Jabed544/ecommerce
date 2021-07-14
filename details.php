<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"href="style.css">
	<style type="text/css">
		.productimage{
			position:absolute;
			margin:50px;
			border:1px solid white;
			height:380px;
			width:340px;
			left:20px;
			text-align:center;
			color:green;
		}
		
	</style>
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
$idd=$_GET['id'];
$sql="SELECT *FROM products WHERE id=$idd";
$result=mysqli_query($conn,$sql) ;//or die ("successfully selected");
if(mysqli_num_rows($result)>0){

	while($row=mysqli_fetch_array($result)){

?>
<div class="productimage">
   <img src="<?php echo $row['pimage']; ?>"height="200"width="200">
   <p>NAME OF THE PRODUCT: <?php echo $row['pname']; ?></p>
	<p>PRICE OF PRODUCT:$ <?php echo $row['pprice']; ?></p>

		<form action="insertorder.php"method="POST">
	<input type="num" name="qty"size="10"placeholder="QUANTITY"><br>
	<input type="hidden"name="product"value='<?php echo $row['pname']?>'>
	<input type="hidden"name="price"value='<?php echo $row['pprice']?>'><br>
	<input type="submit"name="submit"value="BUY NOW">
</form>
</div>

<?php
}
}
 ?>

</body>
</html>