<?php 

include('conexion.php');

include('headerNav.php');

 ?>

 <div id="About">


		<?php 

			$sql_leer = 'SELECT * FROM `WebInfo`';
			$gsent = $pdo->prepare($sql_leer);
			$gsent->execute();

			$WebInfo = $gsent->fetch();?>


			<div style="grid-template-columns: 50% 50%;">
				<div id="PhotoContainer">
				</div>
				<div style="text-align: justify; position: relative;padding: 15%; padding-left: 5%">
					<div style="position: relative;min-height: 64px;padding: 0;width: 100%; text-align: right; line-height: height; color: #6C6C6C; font-size: 20pt" >
						<h1 style="position: absolute;padding: 0; bottom: 0; right: 0;width: auto;height: auto;">Gallery</h1>
					</div>
					<div >
						<p style="display: inline-block; width: 100%; margin: 0; line-height: 1.8;font-size: 16pt;text-indent: 50px;">  
								We are proud of what we do, that's why we want to show our work in this gallery. Here you can find pictures of all our past projects.
				 </p>
					</div>
				</div>
			</div>
		</div>

 <div id="Services" style="color: white"><h1>Gallery</h1>

			<div id="ServicesContainer">

				<?php 

					$sql_leer = 'SELECT * FROM `Gallery`';
					$gsent = $pdo->prepare($sql_leer);
					$gsent->execute();

					$Gallery = $gsent->fetchAll();
				 ?>

				 <?php foreach ($Gallery as $photoItem): ?>
				 	<a class="Service" href="galleryPage.php">
				 		<img src="<?php echo $photoItem['photo'] ?>">
				 	</a>

				<?php endforeach ?>

			</div>

</div>

<?php 

include('contactform.php');

include('footer.php');

include('disconexion.php');

 ?>