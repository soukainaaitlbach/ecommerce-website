<?php
include('config.php');
if(isset($_POST['send'])){
 $name=$_POST['name'] ;
 $description=$_POST['description'] ;
 $price=$_POST['price'] ; 
 $IMAGE = $_FILES['image'];
 $image_location = $_FILES['image']['tmp_name'];
 $image_name = $_FILES['image']['name'];
 move_uploaded_file($image_location,'soukaina/'. $image_name);
 $image_up = $image_name;

 $insert="INSERT INTO `products`(name,description,price,image) VALUES (' $name','$description','$price',' $image_up')" or die("query field");
mysqli_query($connect,$insert);
header('location:index.php');
}


?>