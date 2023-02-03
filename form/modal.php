<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "recipient@example.com";
    $subject = "New message from $name";
    $headers = "From: $email";
    
    if(mail($to, $subject, $message, $headers)) {
        echo "Your message was sent successfully!";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="text" name="name" placeholder="Your name">
    <input type="email" name="email" placeholder="Your email">
    <textarea name="message" placeholder="Your message"></textarea>
    <input type="submit" name="submit" value="Submit">
</form>
