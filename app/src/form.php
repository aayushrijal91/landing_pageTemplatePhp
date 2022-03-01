<?php
include __DIR__ . '/../functions.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);
    
        try {
          if ($recaptcha->score < 0.5) {
              throw new Exception('Low Score');
          }  

            $to = $admin_email;
            $subject = "Message from ".$site;
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $comment = $_POST['message'];
            
            $message = '<!DOCTYPE html><html><body>' .
                    'Name: ' . strip_tags($name) . '<br/>' .
                    'Phone: ' . strip_tags($phone) . '<br/>' .
                    'Email Address: ' . strip_tags($email) . '<br/>'.
                    'message:' .strip_tags($comment). '</br>';
            
            $headers .= "From:".$site." ".$admin_email."\r\n";  
            $headers .= "Reply-To:".$email."\r\n";
            // $headers .= 'Bcc: tracking+24_hour_power_electrical_services_landing_contact@api.aiims.com.au\r\n';
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
            $result = mail($to, $subject, $message, $headers);

            if($result){
                header('location:thankyou.php');
            } else {
                echo '<script language="javascript">alert("Failed, please submit form again or call us directly.")</script>';
                echo '<script language="javascript">history.go(-1);</script>';
            }
        }
        catch (Exception $e) {
            // echo $e->getMessage();
            echo '<script language="javascript">alert("'.$e->getMessage().'")</script>';
            echo '<script language="javascript">history.go(-1);</script>';
        }
}
?>





<?php       
// include __DIR__ . 'functions.php';
// if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
//    // var_dump($_POST['g-recaptcha-response']);
//    //your site secret key
// 	$secret = '6LfKepUUAAAAAPhqp_QISjkeMBcg75dZtXfHI4n9';
//    //get verify response data
// 	$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
// 	$responseData = json_decode($verifyResponse);
	
// 	if ($responseData->success && ($responseData->score >= 0.1)) {
// 		$to = 'info@jmplumbing.com.au';
// 		$subject = "=?UTF-8?B?" . base64_encode('Message from Jeff Macdonald Plumbing') . "?=";
// 		@$name=$_POST['name'];   
// 		@$phone=$_POST['phone']; 
// 		@$email=$_POST['email']; 
// 		@$detail=$_POST['detail']; 
// 		@$service=$_POST['service'];
// 		//@$detail=$_POST['detail']; 
		
// 		$headers = "MIME-Version: 1.0\r\n";
// 		$headers .= "From:Secure Plumbing Solutions <admin@jmplumbing.com.au>"."\r\n";  
// 		$headers .= "Reply-To:".$email."\r\n"; 
// 		//$headers .= "Bcc:chao@aiims.com.au"."\r\n";  
// 	    $headers .= 'Bcc: tracking+jeff_landing__contact@api.aiims.com.au\r\n';
// 		$headers .= "MIME-Version: 1.0\r\n";
// 		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// 		@$message = '<!DOCTYPE html><html><body>'.
// 		'Name: '.strip_tags($name).'<br />'.
// 		'Phone: '.strip_tags($phone).'<br />'.
// 		'Email: '.strip_tags($email).'<br />'.
// 		//'Postcode: '.strip_tags($postcode).'<br />'.
// 		'Service: '.strip_tags($service).'<br />'.
// 		'Detail: '.strip_tags($detail).'<br />'.
// 		'</body></html>'; 

// 		$result = mail($to,$subject,$message,$headers);
// 		if($result){
// 			header('Location:thankyou.php');
// 		} else {
// 			echo '<script language="javascript">alert("Failed, please submit form again or call us directly.")</script>';
// 			echo '<script language="javascript">history.go(-1);</script>';
// 		}
// 	}else{
// 		echo '<script language="javascript">alert("Failed, please click the recpatcha.")</script>';
// 		echo '<script language="javascript">history.go(-1);</script>';
// 	}
// }else{
// 	echo '<script language="javascript">alert("Failed, please click the recpatcha.")</script>';
// 	echo '<script language="javascript">history.go(-1);</script>';
// }

?>
