<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			background-color:gray;
		}
	table{
		border-collapse:collapse;
         width:100%;
         font-size:monospace;
         font-size:18px;
         text-align:center;
          background-color:white;
		}
	th{
		height:40px;
      
	}
	td{
		height:40px;
		color:blue;
      
	}		
	</style>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="nav">
	<h1 style="color:white;line-height:30px;left:70px;position:absolute;font-size:45px">JIO MART</h1>
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
$sql="SELECT *FROM demo";
$result=mysqli_query($conn,$sql) or die ("successfully selected");
if(mysqli_num_rows($result)>0){

?>
<hr>
<table border=1>
	<tr>
		<td>PRODUCT NAME</td>
		<td>PRODUCT PRICE</td>
	    <td>QUANRITY</td>
		<td>PRINT</td>
		
	</tr>
<?php 
while($row=mysqli_fetch_array($result)){
echo "<tr>";
echo "<th>".$row['productname']."</th>";
echo "<th>".$row['productprice']."</th>";
echo "<th>".$row['quantity']."</th>";
echo '<th><a href ="makepdf.php?id='.$row['id'].'"style="color:green">VIEW</a></th>';
echo "</tr>";
}
?>
</table>

<?php 
}
?>
</body>
</html>