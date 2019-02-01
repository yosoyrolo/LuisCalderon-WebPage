<div id="Services" style="color: white"><h1>Our past <?php echo $Services[$thisId]['name']?> projects</h1>

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