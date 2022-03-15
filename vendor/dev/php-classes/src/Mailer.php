<?php 

namespace Dev;

use Rain\Tpl;
use PHPMailer\PHPMailer;
use PHPMailer\SMTP;
use PHPMailer\Exception;

class Mailer {

	const USERNAME = "";
	const PASSWORD = "";
	const NAME_FROM = "Michael Ti";

	private $mail;

	public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
	{		

		$config = array(
			"tpl_dir" 	=> $_SERVER["DOCUMENT_ROOT"]."/views/email/",
			"cache_dir"	=> $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"		=> false
		);

		Tpl::configure( $config );

		$tpl = new Tpl;

		foreach ($data as $key => $value) {
			$tpl->assign($key, $value);
		}

		$html = $tpl->draw($tplName, true);

		//Create a new PHPMailer instance
		$this->mail = new \PHPMailer(true);

		//Tell PHPMailer to use SMTP
		$this->mail->isSMTP();

		//Enable SMTP debugging
		//SMTP::DEBUG_OFF/* = off (for production use)*/
		//SMTP::DEBUG_CLIENT = client messages
		//SMTP::DEBUG_SERVER = client and server messages

		//Set the hostname of the mail server
		$this->mail->Host = 'smtp.gmail.com';

		//$this->mail->SMTPDebug = SMTP::DEBUG_OFF;

		$this->mail->SMTPSecure = "tls";
		//Use `$mail->Host = gethostbyname('smtp.gmail.com');`
		//if your network does not support SMTP over IPv6,
		//though this may cause issues with TLS

		//Set the SMTP port number:
		// - 465 for SMTP with implicit TLS, a.k.a. RFC8314 SMTPS or
		// - 587 for SMTP+STARTTLS
		$this->mail->Port = 587;

		//Set the encryption mechanism to use:
		// - SMTPS (implicit TLS on port 465) or
		// - STARTTLS (explicit TLS on port 587)


		//Whether to use SMTP authentication
		$this->mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$this->mail->Username = Mailer::USERNAME;
		$this->mail->Password = Mailer::PASSWORD;

		//Set the subject line
		$this->mail->Subject = $subject;
		//Set who the message is to be sent from
		//Note that with gmail you can only use your account address (same as `Username`)
		//or predefined aliases that you have configured within your account.
		//Do not use user-submitted addresses in here
		$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);

		$this->mail->Body = "This is plain text email body";
		//Set an alternative reply-to address
		//This is a good place to put user-submitted addresses
		//$mail->addReplyTo('replyto@example.com', 'First Last');

		//Set who the message is to be sent to
		$this->mail->addAddress($toAddress, $toName);

		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$this->mail->msgHTML($html);

		//Replace the plain text body with one created manually
		//$mail->AltBody = 'This is a plain-text message body';

		//Attach an image file
		//$mail->addAttachment('images/phpmailer_mini.png');
		}

		public function send()
		{
			return $this->mail->send();
		}

		//$this->mail->smtpClose();
	

}

?>