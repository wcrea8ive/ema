<?php 

if (isset($_REQUEST['email'])){
    $to = "emad@emacpa.com";// this is your Email address emad@emacpa.com  emad_cpa@hotmail.com
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $subject = "Form submission";
    $message = $_POST['message'];
    $subject2 = "We have recieved your response for contact";
    $message1 = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message1,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Success! You entered: ".$message." We will contact you shortly, ".$first_name;
    //header('Location: contact.html');
    //header("location:contact.html");
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
   
?>