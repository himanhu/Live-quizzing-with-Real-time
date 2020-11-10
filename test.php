<?php

		$subject = 'Email Verification';
		$message = '<BR><BR>
		Thanks for signing up';
		$header = "From:priyankap435@gmail.com \r\n";
		$header .= "MIME-Version: 1.0\r\n";
		$header .= "Content-type: text/html\r\n";
		if(mail("singh.sh.shivam@gmail.com", $subject, $message, $header))// Send our email
		{
         echo"send";			
		}
		else
		{
			echo "not";
			mail("singh.sh.shivam@gmail.com", $subject, $message, $header);
		}

?> 