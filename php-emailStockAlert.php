<?php include('function.php'); ?>
<?php
header("Access-Control-Allow-Origin: *");

if(isset($_POST["submit"])){
	$user_email = $_POST["email"];
}

include 'Mailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
                          
$mail -> isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               	// Enable SMTP authentication

$mail->Username = "neess.jf@gmail.com";          	// SMTP username
$mail->Password = "12345678//";                       // SMTP password

$mail->SMTPSecure = 'ssl';                            	// Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    	// TCP port to connect to

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->setFrom('admin@admin.com', 'Do Not Reply');
$mail->addReplyTo("admin@admin.com", "No reply");

// User address   	 			
$mail->addAddress($user_email);							// Add a recipient

$mail->IsHTML(true);									//Specify that the content contains html

$mail->Subject = "PASSWORD";

$mail->Body    = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<title></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<!--[if !mso]><!-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<!--<![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>
	
	<body>

		<h1>
			<p style="color: #9CDFD6">This is your Password</p>
		</h1>

		<div style = "padding: 20px; background-color: #ECECEC; width: 600px; margin: 0 auto">
			<h3>
				<blockquote>
					Hi $r->name, nn you or someone else have requested your account details. nn Here is your account information please keep this as you may need this at a later stage. nnYour username is $r->username nn your password is $password nn Your password has been reset please login and change your password to something more rememberable.nn Regards Site Admin";
				</blockquote>
			</h3>
		</div>
	</body>

</html>

	';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;

} else {
	header("Location: login.php");
}

?>