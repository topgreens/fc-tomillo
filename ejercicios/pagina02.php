<?php
require("functions.php");

if(isset($_POST["send"])){
    if(sendMail($_POST["from"],$_POST["text"],$_POST["message"])){
         echo "<pMessage sent.</p>";
} else {
    echo "<pMessage not sent.</p>";
}   
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Caja</title>
</head>
<body>
    <h2>pagina que permita introducir un destinatario</h2>
    <form class="myform mt-3" name="contact" action="pagina02.php" method="POST">
    From: <input type="email" name="from" autocomplete="off"><br><br>
  
    Subject: <input type="text"><br>

    message: <textarea name="text" id="message" cols="30" rows="10"></textarea><br>
      <button type="submit" class="btn btn-primary btn-xl" name="send">Send</button>
    </form>


 
      
    
</body>
</html>