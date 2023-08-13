<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "imtiazafzal@yahoo.com"; // Replace with the recipient's email address
    $subject = "Hydrogeomatic - Message from Website!";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
        echo '<script>
            setTimeout(function(){
                window.location.href = "https://hydrogeomatics.com.pk/"; // Replace with the actual URL of your page
            }, 3000); // Redirect after 3 seconds
        </script>';
    } else {
        echo "Error sending email.";
    }
} else {
    echo "Something went wrong.";
}
?>
