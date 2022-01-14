<?php 

if (isset($_POST['email']) && $_POST['email'] !="") {

     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    //submit the form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userMessage = $_POST['message'];
             
        $to = "susan@susanoptimumhealthgoals.com";
        $header = "New Form Submitted";
        $body = "";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Email: ".$userEmail. "\r\n";
        $body .= "Message: ".$userMessage. "\r\n";

        mail($to, $header, $body);

        echo "Thank you $userName, I will be in touch shortly.";	  
        
    } else {

	  echo 'Please provide your name and email address.';
    }

}

?>

