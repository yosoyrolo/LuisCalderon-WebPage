<?php 

			$sql_leer = 'SELECT * FROM `WebInfo`';
			$gsent = $pdo->prepare($sql_leer);
			$gsent->execute();

			$WebInfo = $gsent->fetch();?>

		<div>	
				<div id="Contact">
					<div id="ContactForm">

						<h1>Contact Us</h1>

							<form id="Form">
								<div style="padding: 15px;">
									<h2>Name</h2>
									<input type="text" name="name">
									<h2>Email</h2>
									<input type="text" name="email">
									<h2>Phone</h2>
									<input type="text" name="phone">
								</div>
								<div style="padding: 15px;">
									<h2>Subject</h2>
									<input type="text" name="subject">
									<h2>Message</h2>
									<textarea name="Text1" cols="40" rows="5" style="width: 100%;"></textarea>
									<button type="submit">Send</button>
								</div>
							</form>

					</div>
					<div style="position: relative; text-align: left;"><h1>Contact</h1>
						<div id="contactInfo">
							<?php echo $WebInfo['number']?>
						</div>
						<div id="contactInfo">
							<?php echo $WebInfo['email']?>
						</div>

						<img  style="width: 128px; position: absolute; bottom: 0; right: 0;" src="Assets/LogoGrayTransparent.png">
					</div>
			</div>
		</div>