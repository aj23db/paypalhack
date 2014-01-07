<?php
require "db.php";
if((isset($_POST['oname']))&&(isset($_POST['qty'])))
{
if((!empty($_POST['oname']))&&(!empty($_POST['qty'])))
{
$name=$_POST['oname'];
$qty=$_POST['qty'];
$query="INSERT INTO `order` VALUES ('".$name."','".$qty."')";
if($result=mysql_query($query))
{
echo "Inserted";
}
else
{
echo "Could not place your order. Try Later";
}
}
else
{
echo "Fill in all the fields";
}
}
?>
