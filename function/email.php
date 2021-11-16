<?php
// FOOTER FORM -- SEND US A MESSAGE
if(isset($_POST['send_msg'])) {
    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 25);
    $mailto = "";
    $from = $_POST['email']; //Sender's email
    $name = $_POST['name']; //Sender's name
    $sbj = $_POST['subject'];
    $sbj2 = "We've received your message, and will get in touch with you shortly."; //Message to the client's email
    $msg = $name ." sent the following message\n\n" . $_POST['message'];
    $msg2 = "Dear " .$name .",\nThank you for contacting us at TMAutos";
    $headers = "From: ". $from; //Sender's email address
    $headers2 = "From: ". $mailto; //Sender's email address
    $result = mail($mailto, $sbj2, $msg, $headers); //Sends email to owner
    $result2 = mail($mailto, $sbj2, $msg2, $headers2); //Sends email to user
    if($result) {
        echo "<script>alert('Message sent successfully')</script>";
    } else {
        echo "<script>alert('Message failed\nPlease try again')</script>";
    }
}
// SELL A CAR REQUEST
if(isset($_POST['sell_btn'])) {
    ini_set('SMTP', 'smtp.gmail.com');
    ini_set('smtp_port', 25);
    $mailto = "";
    $from = $_POST['email']; //Sender's email
    $name = $_POST['name']; //Sender's name
    $phone = $_POST['phone']; //Sender's phone
    $address = $_POST['address']; //Sender's address
    $car_type = $_POST['car_type']; //Sender's car_type
    $car_color = $_POST['car_color']; //Sender's car_color
    $car_name = $_POST['car_name']; //Sender's car_name
    $price = $_POST['price']; //Sender's price
    $car_info = $_POST['car_info']; //Sender's car_info
    $file = $_POST['file']; //Sender's file
    $sbj = "Sell A Car Request";
    $sbj2 = "We've received your message, and will get in touch with you shortly."; //Message to the client's email
    $msg = $name ." sent the following message\n\n" . $_POST['message'];
    $msg2 = "Dear " .$name .",\nThank you for contacting us at TMAutos";
    $headers = "From: ". $from; //Sender's email address
    $headers2 = "From: ". $mailto; //Sender's email address
    $result = mail($mailto, $sbj, $msg, $headers); //Sends email to owner
    $result2 = mail($mailto, $sbj2, $msg2, $headers2); //Sends email to user
    if($result) {
        echo "<script>alert('Message sent successfully')</script>";
    } else {
        echo "<script>alert('Message failed\nPlease try again')</script>";
    }
}

?>
