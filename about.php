<?php
	session_start();

	include "include/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<?php include "./vendors/mouse_click.php"?>	
		<?php include "./main page/website title/title.php"?>
		<?php include "./vendors/component.php"?>
	</head>
	
	<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
		<header>
			<?php include "./main menu/main_menu_about.php"?>
		</header>
		<?php include "./about us/about.php"?>

		<?php include "./about us/aboutus_customer_details.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>