<?php

include ('admin/config.php');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 0){
      $message[] = 'user already exist!';
   }else{
      mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
      $message[] = 'registered successfully!';
      header('location:login.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      input{
         text-align: center;
         position:relative; width:70%;  margin-bottom:1rem;top:4rem;
         border-radius:10px 10px ;padding: 0.3rem;
      }
      span{position:absolute; width:50%;}
      .form-container{ border:2px solid black; position:absolute; width:40%; left:30%;top:5rem; border-radius:10px 10px ;}
   h3{top:1.7rem;position:relative;}
   </style>
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   <center>
<div class="form-container">

   <form action="" method="post">
      <h3>sign up</h3>
   
      <input type="text" name="name" required placeholder=Name class="box"><br>
      <input type="email" name="email" required placeholder="Email" class="box"><br>
      <input type="password" name="password" required placeholder="Password" class="box"><br>
      <input type="password" name="cpassword" required placeholder="Password" class="box"><br>
      <input type="text" name="ville" required placeholder="City" class="box"><br>
      <input type="number" name="number" required placeholder="Phone Number" class="box"><br>
      <button class="btn btn-primary" style='width:200px; margin-top:5rem;position:relative;' name="submit" type="submit">Button</button>
      <p>you ready have an account?<a href="login.php"> Login in</a></p>
   </form>

</div></center>


</body>
</html>