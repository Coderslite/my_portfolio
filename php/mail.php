<?php
// require 'composer/vendor/autoload.php';
// use PHPMailer\PHPMailer\PHPMailer;


// $mail = new PHPMailer();
// $mail->isSMTP();
// $mail->Host = 'stmp.gmail.com';
// $mail->SMTPAuth = true;
// $mail->Username = 'abrahamgreatebele@gmail.com'; // your mail address
// $mail->Password = 'Mesomorph'; // your mail passwor
// $mail->addReplyTo('abrahamgreatebele@gmail.com', 'Your Name');
// $mail->addAddress('abrahamgreatebele@gmail.com', 'Great');
// $mail->SMTPSecure = 'ssl';
// $mail->Port =  465;
// // Sender info 
// $mail->setFrom('abrahamgreatebele@gmail.com', 'Coderslite');


// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];


// // Add a recipient 
// // $mail->addAddress('abrahamgreatebele@gmail.com');
// // Set email format to HTML 
// $mail->isHTML(true); 

// // Mail subject 
// $mail->Subject = 'Login Successful';

// // Mail body content 
// $bodyContent = 
// '<html>
// <head></head>
// <body>
// <h1>Login Detection</h1>
// <h2>we detected a login activity on your dashboard</h2>
// <h2>If not you, login and change your password immediately</h2>
// <body>
// </html>';
// // $bodyContent .= $template; 
// $mail->Body = $bodyContent;
// if (!$mail->send()) {
//     $data = 'failed';
// } else {
//     $data = 'success';
// }
$data = "success";
header('content-Type: application/json');
echo json_encode($data);

?>