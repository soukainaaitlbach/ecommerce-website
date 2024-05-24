 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
   <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace d'admin</title>
 </head>
 <body>
     <div class="card">
        <center>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <h1>ADD PLANT</h1>
        <input type="text" name="name" placeholder="Nom de plante"><br>
        <input type="text" name="description" placeholder="Description" ><br>
        <input type="text" name='price' placeholder="Price"><br>
        <input type="file" id="file" name='image' style='display:none;' ><br><br>
        <label for="file" >choise a photo</label>
        <button name="send">Send</button>
    </form></center>
    </div>
 </body>
 </html>