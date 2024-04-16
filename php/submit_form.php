<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = "zsentosa198@gmail.com"; // Ganti dengan alamat email Anda
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\n$message";
    if(mail($to, $subject, $body)){
        echo "<p>Thank you for your message. We will get back to you soon!</p>";
    } else{
        echo "<p>Sorry, there was an error sending your message. Please try again later.</p>";
    }
}
?>
