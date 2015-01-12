<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST"){

			$name = $_POST["name"];
			$email = $_POST["email"];
			$msg = $_POST["msg"];
			$phn = $_POST["phone"];

			if(!is_numeric($phn)){
				print 'Please review the phone number you entered. There seems to be a problem';
				exit;
			}

			$namePattern = '/^[a-z()\/\'":\*+|,.; \- !?&#$@]{2,75}$/i';
			if (!preg_match($namePattern, $name)){
				print 'Please review the name you entered. There seems to be a problem';
				exit;
			}

			foreach( $_POST as $value ){
 				if( stripos($value,'Content-Type:') !== FALSE ){
 					echo "There was a problem with the values you entered";
 					exit;
 				}
  			}

			require 'PHPMailer/PHPMailerAutoload.php';

			//Create a new PHPMailer instance
			$mail = new PHPMailer;
			//Tell PHPMailer to use SMTP
			$mail->isSMTP();
			//Enable SMTP debugging
			// 0 = off (for production use)
			// 1 = client messages
			// 2 = client and server messages
			$mail->SMTPDebug = 0;
			//Ask for HTML-friendly debug output
			$mail->Debugoutput = 'html';
			//Set the hostname of the mail server
			$mail->Host = "smtp.postmarkapp.com";
			//Set the SMTP port number - likely to be 25, 465 or 587
			$mail->Port = 25;
			//Whether to use SMTP authentication
			$mail->SMTPAuth = true;
			//Username to use for SMTP authentication
			$mail->Username = "4cb8eb51-0539-4248-b3d2-7b7741857ad0";
			//Password to use for SMTP authentication
			$mail->Password = "4cb8eb51-0539-4248-b3d2-7b7741857ad0";
			//Set who the message is to be sent from
			$mail->setFrom('ktbt10@gmail.com', $name);
			//Set an alternative reply-to address
			$mail->addReplyTo($email,$name);
			//Set who the message is to be sent to
			$mail->addAddress('jcbhatt@supplyzone.in', "J. C. Bhatt");
			//Set the subject line
			$mail->Subject = "Enquiry from $name on SupplyZone.in";
			//Read an HTML message body from an external file, convert referenced images to embedded,
			//convert HTML into a basic plain-text alternative body
			$mail->msgHTML($msg);

			//send the message, check for errors
/*			if (!$mail->send()) {
			    echo "Mailer Error: " . $mail->ErrorInfo;
			    exit;
			} else {
				header("Location: #?status=thanks");
				exit;
			}	*/

			header("Location:./response.php?status=thanks");
			exit;

		}
?>
			<form method="POST" action="#">	
				<div class = "contact">
					<div class = "container">
						<h2> Get in Touch Now </h2>
						<div class="contact-col-1">
							<div class="c1">
							<input type = "text" name = "name" id="name" placeholder = "Full Name*" autocomplete="name" maxlength="30" required="true"/> 
							<input type = "email" name = "email" id="email" placeholder = "Email ID*" autocomplete="email" required="true"/> 
							<input type = "tel" name = "phone" id="phone" placeholder = "Phone No." maxlength="12" autocomplete="tel"/> 
						</div></div>
						<div class="contact-col-2">
							<textarea name ="msg" id="msg" rows=4 column=30 placeholder="Query/feedback" maxlength="300" required="true">
							</textarea>
						</div>
						<p style="display:none;">
							<label for="address">Address</label>
							--Humans please leave this field blank--
							<input type="text" name="address" id="address">
						</p>
						<div style="clear:both;"></div>
						<input type="submit" name="submit" value="Submit">
					</div>
				</div>	
			</form>