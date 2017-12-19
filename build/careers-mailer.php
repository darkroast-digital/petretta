<?php 

$captcha = "";
if (isset($_POST["g-recaptcha-response"]))
    $captcha = $_POST["g-recaptcha-response"];

if (!$captcha)
    echo "not ok";

$secret = "6LfIzx8UAAAAAGPHDR7snofwntNUI5qpPEHQzBOM";

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER["REMOTE_ADDR"]), true);

if ($response["success"] != false) {

if(isset($_FILES['file'])){
  $errors= array();
  $file_name = $_FILES['file']['name'];
  $file_size = $_FILES['file']['size'];
  $file_tmp = $_FILES['file']['tmp_name'];
  $file_type = $_FILES['file']['type'];
      
  $expensions= array("jpeg","jpg","png","pdf");
      
  if($file_size > 2097152) {
     $errors[]='File size must be excately 2 MB';
  }
      
  if(empty($errors)==true) {
     move_uploaded_file($file_tmp,"assets/uploads/".$file_name); //The folder where you would like your file to be saved
     echo "Success";
  }else{
     print_r($errors);
  }
}

require 'phpmailer/PHPMailerAutoload.php';

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$position = $_POST['position'];
$message = $_POST['message'];

$mail = new PHPMailer;

$mail->setFrom($email, $name);
$mail->addAddress('info@petcon.net');     // Add a recipient
$mail->addReplyTo($email, $name);

$mail->addAttachment('assets/uploads/'.$file_name);         // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'A new resume from ' . $name;
$mail->Body    = "Name: $name <br>" . "Phone Number: $phone <br>" . "Email: $email <br>" . "Position: $position <br>" . $message;
$mail->AltBody = "Name: $name\r\n" . "Phone Number: $phone\r\n" . "Email: $email\r\n" . $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

} else {
    echo "not ok";
}
