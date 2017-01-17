<?php
    $destino="emmanuelestrada544@gmail.com";
    $name= $_POST["name"];
    $email= $_POST["email"];
    
    $message= $_POST["message"];
    $content= "Name: " . $name . "\n E-mail: " . $email .  "\nMessage: " . $message;
    mail($destino,"Contact 'Web page'", $content);
    header("Location:index.html");
    
?>