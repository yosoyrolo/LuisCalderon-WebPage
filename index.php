<?php 

include('conexion.php');

include('headerNav.php');

 ?>

		<div id="logoLandingPage" style="position: relative;">


			<?php 

				$sql_leer = 'SELECT * FROM `TopPhotos`';
				$gsent = $pdo->prepare($sql_leer);
				$gsent->execute();

				$TopPhotos = $gsent->fetchAll();
				?>
			
			<img src="<?php echo $TopPhotos[1]['url'] ?>" style="width: 100%; position: absolute; left: 0; top: 0;">
			<div style="position: absolute;left: 0;top: 0;background-color: rgba(0.0,0.0,0.0,0.5); z-index: 1; width: 100%;height: 100%; text-align: center;">
				
				<div id="logoTitle">
					<div>
						<img src="Assets/LogoWhite.png" style="height: 256px">
					</div>
					<div style="position: relative; width: 100%; padding: 0; margin: 0;">
						<div style="-webkit-transform: translate(-50%, -50%); position: absolute; top: 50%; left: 50%; width: 100%">
							<h1>LUIS CALDERON</h1><br>
							<h2>HANDYMAN WORK AND GENERAL MAINTENANCE</h2>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div id="About">


		<?php 

			$sql_leer = 'SELECT * FROM `WebInfo`';
			$gsent = $pdo->prepare($sql_leer);
			$gsent->execute();

			$WebInfo = $gsent->fetch();?>


			<div style="grid-template-columns: 50% 50%;">
				<div id="PhotoContainer">
					<img src=<?php echo $WebInfo['photo']?>>
				</div>
				<div style="text-align: justify; position: relative;padding: 15%; padding-left: 5%">
					<div style="position: relative;min-height: 64px;padding: 0;width: 100%; text-align: right; line-height: height; color: #6C6C6C; font-size: 20pt" >
						<h1 style="position: absolute;padding: 0; bottom: 0; right: 0;width: auto;height: auto;">About us</h1>
					</div>
					<div >
						<p style="display: inline-block; width: 100%; margin: 0; line-height: 1.8;font-size: 16pt;text-indent: 50px;">  
								<?php echo $WebInfo['aboutUs']?>
				 </p>
					</div>
				</div>
			</div>
		</div>
		<div id="Services" style="color: white"><h1>Services</h1>

			<div id="ServicesContainer">

				<?php 

					$sql_leer = 'SELECT * FROM `Services`';
					$gsent = $pdo->prepare($sql_leer);
					$gsent->execute();

					$Services = $gsent->fetchAll();
				 ?>

				 <?php foreach ($Services as $Service): ?>


				 	<a class="Service" href=<?php echo 'service.php?id='.(intval($Service['id'])-1) ?>>

				 		<img src=<?php echo $Service['photo'] ?>>
				 		<div class="ServiceName"> <b><?php echo $Service['name'] ?></b> </div>
				 		
				 	</a>



				<?php endforeach ?>

			</div>

		</div>




<?php 

include('contactform.php');

include('footer.php');

include('disconexion.php');

 ?>