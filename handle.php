<?php
	$to = "ndt8895@gmail.com";
	$subject = "Subject";
	$name = $_POST['name'];
	$email =  $_POST['email'];

	$message = '********************\r\n'.
				'Message form your website \r\n'.

				'***************************'.
				'Name: '.$name.'\n'.
				'Email : '.$email.'\n'.
				'Message : ' .$message. '\r\n';
	$header = 'From: '. $name .'<'.$email.'> \r\n'.
				'Reply to:  '.$email.'\r\n'.
				'MINE-Version: 1.0 '. '\r\n'.
				'Content-type:text/html;charset=UTF-8'.'\r\n';
	mail($to, $subject,$message,$header);

?>