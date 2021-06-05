<?php
//get data from form
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "shakilahmmed9990@gmail.com";

    
    $subject ="Mail From website";

    $txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\n Message =" . $message; 
    $headers = "From:noreply@shakil-ahmmed.github.io/.aacom" . \r\n .
    "CC: somebodyelse@example.com";
    if($email!=NULL){
        mail($to,$subject,$txt,$headers);
    }
    //redirect
    header("Location:thankyou.html");
    ?>