<?php 
if(isset($_POST['submit'])){
    $to = "mugrai@gmail.com"; // this is your Email address
    $from = $_POST['visitor_email']; // this is the sender's Email address
    $client_name = $_POST['visitor_name'];
    $client_email = $_POST['visitor_email'];

    $subject = "Form submission";
    $message = $client_name . " " . $client_email . " wrote the following:" . "\n\n" . $_POST['visitor_message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $client_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>