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
$name=$_POST['name'];
$price=$_POST['price'];	
$image=$_FILES['image'];

//print_r($image);

$filename=$image['name'];
$filepath=$image['tmp_name'];
$fileerror=$image['error'];

if($fileerror==0){
$destination='upload/'.$filename;

//echo "$destination";

move_uploaded_file($filepath,$destination);
}
}

$sql="INSERT INTO shgmember(pname,pprice,pimage)
VALUES('$name','$price','$destination')";
if(!mysqli_query($conn,$sql)){
	echo "DATA NO INSERTED";
}else{
	echo "DATA INSERTED SUCCESSFULLY";
}
?>