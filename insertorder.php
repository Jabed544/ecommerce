<?php 
$conn=mysqli_connect("localhost","root","");
if(!$conn){
	echo "Not connect to the server";
}
$dbase=mysqli_select_db($conn,"ecommerce");
if(!$dbase){
	echo "Not select database";
}else{
	//echo "database select successfully";
}

$pname=$_POST['product'];
$price=$_POST['price'];
$quanty=$_POST['qty'];

$sql="INSERT INTO demo(productname,productprice,quantity )
VALUES('$pname','$price','$quanty')";
if(! mysqli_query($conn,$sql)){
	echo "DATA NOT INSERTED";
}else{
	echo "<h1 style='color:green'>ORDER SUBMITED SUCCESSFULLY</h1>";
}
?>






