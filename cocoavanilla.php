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
	
	<body>
		<header id="home2">
			<?php include "./product/cocoa & vanilla/title_cocoavanilla.php"?>
			<?php include "./main menu/main_menu_product_2.php"?>
			<?php include "./product/cocoa & vanilla/header_cocoavanilla.php"?>
		</header>
		
		<?php include "./product/cocoa & vanilla/cocoavanilla.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>