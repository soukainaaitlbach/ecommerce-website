<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
  .profil{position:absolute;  background-color:white; box-shadow:1px 1px 10px silver;border: 2px solid silver; width:30%; left:40%; top:10rem;}
  .profil input{position:relative;width:70%; margin-bottom:0.4rem; border-radius:10px 10px ; padding:0.5rem;}
</style>
<body>
  <div class="profil">
<?php
     include('admin/config.php');
     session_start();
     $user_id= $_SESSION['user_id'];
     if(isset($user_id)){
 $select="SELECT * FROM users where id='$user_id'";
$re=mysqli_query($connect,$select);
  $ro=mysqli_fetch_assoc($re);
echo"
  
        <img src='.jpg'>
<center>

   <input class='price' name='product_price' value='$ro[email]'>
   <input class='price' name='product_price' value='$ro[password]'>
<center>
<p><a href='index.php' class='link-underline-warning'>Back</a></p> </center></center>
</form>
</div> 
";
  }
  else{header('location:login.php');}?>  </div>
</body>
</html>
