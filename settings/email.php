<?php
/*
@Page : email.php
@Author : Renjith VR
@Author URL: https://renjithvr.in
@Date : Dec 18 2016
@Descrption: email settings page.
*/

error_reporting(E_ALL);
// require_once('PHPMailer/class.phpmailer.php');
// include("PHPMailer/class.smtp.php");
if(!isset($_SERVER['REQUEST_METHOD']) || !isset($_SERVER['REQUEST_URI']))
{
        error_log('HTTP Method or request URI is not set');
}

$method = $_SERVER['REQUEST_METHOD'];
$request = $_SERVER['REQUEST_URI'];

if($method!='POST')
{
        error_log('HTTP Method not allowed');
}

$email = sendMail($request);
print json_encode($email);

function sendMail($request)
{

        $parts = parse_url($request);
	$path_parts = pathinfo($parts['path']);
	$id = $path_parts['filename'];

	if(!isset($_POST['name']) || !isset($_POST['email']) || !isset($_POST['subject']) || !isset($_POST['message']))
	{
                $error = "Missing Parameters";
                error_log($error);
                print $error;
		return array("error" => $error);
	}

        if (!filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL))
        {
           $error = "invalid email";
           error_log($error);
           print $error;
           return array("error" => $error);

        }


        $to      = 'contact@renjithvr.in';
        $subject = htmlentities(trim($_POST['subject']));
        $message = htmlentities(trim($_POST['message']));

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $header.= "X-Priority: 1\r\n";
        $headers = 'From:'.trim($_POST["name"]).'<'.trim($_POST["email"]).'>'. "\r\n" .
        // $headers .= 'From:'. trim($_POST["email"]). "\r\n" .
            'Reply-To:'. trim($_POST["email"]) . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        $email = mail($to, $subject, $message, $headers);

        // $mail             = new PHPMailer();
        //
        // $body =  htmlentities(trim($_POST['message']));
        // $mail->IsSMTP(); // telling the class to use SMTP
        // $mail->Host       = "contact@renjithvr.in"; // SMTP server
        // $mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
        //                                            // 1 = errors and messages
        //                                            // 2 = messages only
        // $mail->SMTPAuth   = true;                  // enable SMTP authentication
        // $mail->SMTPSecure = "tls";                 // sets the prefix to the servier
        // $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        // $mail->Port       = 587;                   // set the SMTP port for the GMAIL server
        // $mail->Username   = "renjithvr.official@gmail.com";  // GMAIL username
        // $mail->Password   = "renjualmighty4";            // GMAIL password
        //
        // $mail->SetFrom('name@yourdomain.com', 'First Last');
        //
        // $mail->AddReplyTo("name@yourdomain.com","First Last");
        //
        // $mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";
        //
        // $mail->MsgHTML($body);
        //
        // $address = trim($_POST['email']);
        // $mail->AddAddress($address, trim($_POST['name']));

        // if($mail->Send())
        if($email)
        {
                header("HTTP/1.1 200 success");
                return array("success" => "email sent sucessfully");
        }
        else
        {
                header("HTTP/1.1 400 Not Found");
                return array("error" => $mail->ErrorInfo);

        }
}



exit(0);

?>
