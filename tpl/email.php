<?php 

require_once("vendor/autoload.php");

use Rain\Tpl;

$config = array(
	"tpl_dir"=>"tpl/",
	"cache_dir"=>"cache/"
);

Tpl::configure ( $config );

$tpl = new Tpl;

$tpl->assign( "name", "Michael" );
$tpl->assign( "version", PHP_VERSION );

$html = $tpl->draw( "index", true);

///////////////////////
$mail = New PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 0;

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.gmail.com';

$mail->Port = 465;

$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;

$mail->Username = "michael.dtna@gmail.com";

$mail->Password = "plmoknijb2@";

$mail->setFrom('michael.dtna@gmail.com', 'Michael');

$mail->addAddress('michael.dtna@yahoo.com.br', 'Contato');

$mail->Subject = 'Testando a classe PHPMailer com Gmail';

$mail->msgHTML($html);

$mail->AltBody = 'This is a plain-text message body';

if (!$mail->send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "Message sent!";
}



 ?>