<?php
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
			$human = $_POST['human'];
			$from = 'Van: Hooiservice';
			$to = 'jcz.kooijman@hetnet.nl';
			$subject = 'Hooi, Stro, Vlas';
			$body = "From: $name\n E-mail: $email\n $message";
			if ($_POST['submit'] && $human == '4') {
				if (mail ($to, $subject, $body, $from)) {
					echo '<p>Your message has been sent!</p>';
					} else { 
					echo '<p>Something went wrong, go back and try again!</p>';
				}
			}; 
		?>