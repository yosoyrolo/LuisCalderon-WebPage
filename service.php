<?php 

include('conexion.php');

include('headerNav.php');

 ?>

<?php 

	$thisId =  $_GET['id'];

		$sql_leer = 'SELECT * FROM `Services`';
		$gsent = $pdo->prepare($sql_leer);
		$gsent->execute();

		$Services = $gsent->fetchAll();

		$thisService = $Services[$thisId];
	 ?>


<div id="About">
			<div style="grid-template-columns: 50% 50%;">
				<div id="PhotoContainer">
					<img src=<?php echo $thisService['photo'] ?>>
				</div>
				<div style="text-align: justify; position: relative;padding: 15%; padding-left: 5%">
					<div style="position: relative;min-height: 64px;padding: 0;width: 100%; text-align: right; line-height: height; color: #6C6C6C; font-size: 20pt" >
						<h1 style="position: absolute;padding: 0; bottom: 0; right: 0;width: auto;height: auto;"><?php echo $thisService['name'] ?></h1>
					</div>
					<div >
						<p style="display: inline-block; width: 100%; margin: 0; line-height: 1.8;font-size: 16pt;text-indent: 50px;"><?php echo $thisService['description'] ?></p>
					</div>
				</div>
			</div>



<?php 

include('gallery.php');

include('contactform.php');

include('footer.php');

include('disconexion.php');

 ?>