<?php
include ('admin/config.php');
session_start();

if(isset($_GET['logout'])){
  $user_id=$_SESSION['user_id'];
  unset($user_id);
  session_destroy();
  header('location:login.php');
}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
      .s {
    color:  rgb(37, 172, 37); font-weight:bold; font-size:29px; font-style:'italic';
}
.ss{color:white;font-weight:bold; font-size:23px; font-style:'cairo'}
.sss {
    color:  rgb(37, 172, 37); font-weight:bold; font-size:23px; font-style:'cairo';
}
.cardd{float:left;box-shadow:1px 1px 10px silver; background-color:white; position:absolute;margin-bottom:2rem; border-radius:10px 10px; width:230px;margin-right:2rem;position:relative; height:310px; margin-top:3rem;}
.cardd input{width:16%;  padding-left:5px;margin-bottom:0.5rem; border-radius:10px 10px;  position:relative; left:11rem; }
    
.cardd img{position:relative;width:70%; height:160px;top:1rem; }
.cardd button{width:70%; position:relative; top:0rem; background-color:green; border-radius:10px 10px  ;}
    h1{font-size:22px; margin-left:0.4rem; margin-top:0.9rem;}
    .cardd p{ margin-left:0.3rem; position:relative; }
   
    /* Table Styles */
.table-container {
  width: 100%;
  margin: 20px auto;
  border-collapse: collapse;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 12px 15px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

.table th {
  background-color: #f8f9fa;
  font-weight: bold;
  color: #333;
}

.table tbody tr:hover {
  background-color: #f1f1f1;
}

/* Optional: Striped rows */
.table tbody tr:nth-child(even) {
  background-color: #f9f9f9;
}

/* Optional: Hover effect on rows */
.table tbody tr:hover {
  background-color: #f1f1f1;
}

/* Optional: Responsive */
@media screen and (max-width: 600px) {
  .table th,
  .table td {
    padding: 8px;
    font-size: 14px;
  }
}.mainn{position:absolute; 
}
.cardd h1{color:red;}
.price{color:grey; left:6px; position:relative; margin-top:0.3rem;}
.zz{background-color:white; padding-left:2rem;
}

    </style>
  </head>
  <body>
    <div id="all">
    <div class="main">
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><span class="ss">  <span class="s">B</span>USTAN<span class="s">I</span></a></span>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>

              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inde.php?logout=<?php echo $user_id; ?>" onclick=" return confirm('are you sure!');">Logout</a>
              </li>
 
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="cart.php">
                  <i class="fa-solid fa-cart-shopping "></i>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="profil.php">
                  <i class="fa-solid fa-user" onclick="profil()"></i>
                </a>
              </li>
              
             
            </ul>
            
          </div>
        </div>
      </nav>

      <!-- Section 1 start -->
      <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 mt-4 ">
                <h3>Best Quality Plants</h3>
                <h1 class="mainfont">Amazing Variety <br> Of Plants Starting <br> Just $56</h1>
               <a href="#mainn"> <button type="button" class="btn btn-danger redcolorbtn">Shop Now</button></a>

            </div>
            <div class="col-md-6">
                <img src="alvera2.png" class="img-fluid animated " alt="...">
            </div>
        </div>
      </div>
      <!-- Section 1 end -->
    </div>
<!-- Details plan -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <div class="text-center mb-2">
                <i class="fa-solid fa-sun-plant-wilt fa-2xl" style="color: #3dd912;"></i>

            </div>
            <h6 class="mx-3 fw-bold">Plants Collection</h6>
            <p class="mx-5">Any Plants for You Space</p>

                </div> 
        <div class="col-md-4 text-center">
            <div class="text-center mb-2">
                <i class="fa-solid fa-truck-fast fa-2xl" style="color: #30ec22;"></i>
            </div>
            <h6 class="mx-3 fw-bold">Free Shipping</h6>
            <p class="mx-5">Free Shipping in order</p>

        </div>
        <div class="col-md-4 text-center">
            <div class="text-center mb-2">
                <i class="fa-solid fa-award fa-2xl" style="color: #19e61d;"></i>
            </div>
            <h6 class="mx-3 fw-bold">100% Money Back</h6>
            <p class="mx-5">If the iteam did not suit you</p>

        </div>
  


<?php
include ('admin/config.php');


if(isset($_POST['add'])){
    $user_id= $_SESSION['user_id'];
    if(isset($user_id)){
   

$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$product_image = $_POST['product_image'];
$product_quantity = $_POST['product_quantity'];

$select_cart = mysqli_query($connect, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") ;
if($select_cart){
if(mysqli_num_rows($select_cart) > 0){
   $message[] = 'alredy inthe panel';
  
}else{
   mysqli_query($connect, "INSERT INTO `cart`(user_id, name, price, image, quantity) VALUES('$user_id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
   $message[] = 'good';
}

 }}
else{header('location:login.php');
}}


if(isset($_POST['update_cart'])){
  $update_quantity = $_POST['cart_quantity'];
  $update_id = $_POST['cart_id'];
  mysqli_query($connect, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
  $message[] = 'تم تحديث كمية سلة التسوق بنجاح!';
}

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($connect, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
  
}
 
if(isset($_GET['delete_all'])){
  $user_id= $_SESSION['user_id'];
  mysqli_query($connect, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
  header('location:inde.php');
}
?>

<div class="main" id="mainn">
<div class="zz">
<?php
     include('admin/config.php');
 $select="SELECT * FROM products";
$re=mysqli_query($connect,$select);
  while($row=mysqli_fetch_assoc($re)){
echo"
<div class='cardd'> 
<form action='insert.php' method='Post'>
<center>
   <img src='adimn/$row[image]'  ></center>
         <h1 class='name'> $row[name]</h1>
         <div class='price'> $row[price] </div
   <input type='hidden' name='product_image' value=' $row[image] '>
   <input type='hidden' name='product_name' value='$row[name] '>
   <input type='hidden' class='price' name='product_price' value='$row[price]'>
<input type='number' min='1' value='1' name='product_quantity'>
<center>
<button name='add'>add to cart</button> </center>
</form>
</div> 
";
  }?>
</div></div></div></div>
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
<div class="shopping" id ="ca">
<center>
 <h1 class="heading"> Shooping Cart</h1></center>
<div class="table-container">
  <table class="table">
   <thead>
      <th>Image</th>
      <th>Name</th>
      <th>Price</th>
      <th>Quantity</th>
      <th>Total price</th>
      <th></th>
   </thead>
   <tbody>
   <?php
     $user_id= $_SESSION['user_id'];
      $cart_query = mysqli_query($connect, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
      $grand_total = 0;
      if(mysqli_num_rows($cart_query) > 0){
         while($fetch_cart = mysqli_fetch_assoc($cart_query)){
   ?>
      <tr>
         <td><img src="admin/<?php echo $fetch_cart['image']; ?>" height="75" alt=""></td>
         <td><?php echo $fetch_cart['name']; ?></td>
         <td><?php echo $fetch_cart['price']; ?>$ </td>
         <td>
            <form action="" method="post">
               <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
               <input type="number" min="1" name="cart_quantity" value="<?php echo $fetch_cart['quantity']; ?>">
               <input type="submit" name="update_cart" value="Update" class="option-btn">
            </form>
         </td>
         <td><?php echo $sub_total = ($fetch_cart['price'] * $fetch_cart['quantity']); ?>$</td>
         <td><a href="inde.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn" onclick="return confirm('remove this product from card?);">Remove</a></td>
      </tr>
   <?php
      $grand_total += $sub_total;
         }
      }else{
         echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6"> empty card/td></tr>';
      }
   ?>
   <tr class="table-bottom">
      <td colspan="4">total price:</td>
      <td><?php echo $grand_total; ?>$</td>
      <td><a href="inde.php?delete_all" onclick="return confirm('delete all products?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Clear Cart</a></td>
   </tr>
</tbody>
</table>

</div>
<div class="profil" id="profil">

</div></div></div><br>

<div class="op">
<div class="container-fluid mt-5 pt-5 pb-5" style="background-color: rgb(228, 220, 207);">
  <div class="row">
    <div class="col-md-3">
      <h3>Simply Natural</h3>
      <a href="jsdjl"><i class="fa-brands fa-square-instagram fa-2xl"></i></a>
      <a href="jsdjl"><i class="fa-brands fa-square-facebook fa-2xl"></i></a>
      <a href="jsdjl"><i class="fa-brands fa-square-twitter fa-2xl"></i></a>
      <a href="jsdjl"><i class="fa-brands fa-linkedin fa-2xl"></i></a>
    </div>
    <div class="col-md-3">
      <h3>Quick Links</h3>
  <p>Introduction</p>
  <p>Know More About US</p>
  <p>Visit Store</p>
  <p>Lets Connect</p>

    </div>
    <div class="col-md-3">
      <h3>Important Links</h3>
      <p>Introduction</p>
      <p>Know More About US</p>
      <p>Visit Store</p>
      <p>Lets Connect</p>
    

    </div>
    <div class="col-md-3 ">
      
    </div>
  </div>
</div>
</div>
<!-- Footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
  document.getElementById('ca').style.display='none';
  document.getElementById('profil').style.display='none';
  function card(){
    document.getElementById('ca').style.display='block';
    document.getElementById('mainn').style.display='none';
    document.getElementById('profil').style.display='none';
  document.getElementById('all').style.display='none'
  }
  function profil(){
    document.getElementById('ca').style.display='none';
    document.getElementById('mainn').style.display='none';
    document.getElementById('profil').style.display='block';
  }
</script>
  </body>

</html>