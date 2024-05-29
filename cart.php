<?php
if(isset($_POST['update_cart'])){
  $update_quantity = $_POST['cart_quantity'];
  $update_id = $_POST['cart_id'];
  mysqli_query($connect, "UPDATE `cart` SET quantity = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
  $message[] = 'Edite successfuly!';
}

if(isset($_GET['remove'])){
  $remove_id = $_GET['remove'];
  mysqli_query($connect, "DELETE FROM `cart` WHERE id = '$remove_id'") or die('query failed');
  
}
 
if(isset($_GET['delete_all'])){
  $user_id= $_SESSION['user_id'];
  mysqli_query($connect, "DELETE FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
  header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   
<style>
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
}
</style>
   <body>
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
   session_start();
   include('admin/config.php');
     $user_id= $_SESSION['user_id'];
     if(isset($user_id)){
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
      }}else{
         header('location:login.php');
      }
   ?>
   <tr class="table-bottom">
      <td colspan="4">total price:</td>
      <td><?php echo $grand_total; ?>$</td>
      <td><a href="index.php?delete_all" onclick="return confirm('delete all products?');" class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">Clear Cart</a></td>
   </tr>
</tbody>
</table>

  </body>

</html>
