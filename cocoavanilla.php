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
		<!-- 
			- fitur include dibawah bisa disederhanakan lagi untuk tujuan security.     
			- bisa menggunakan fitur function sebagai trigger untuk fetch blog.php, footer.php, features.php dan java_script.php

			contoh : 
			1. buat file dengan nama content.php   
            2. didalam content.php, syntax nya bisa seperti berikut : 
			
			public function(content)
			{
				if($page == "blog")
				{
					include "/blog/blog 2/blog.php";
					include "/main page/footer.php";
					include "/main page/features.php";
					include "/vendors/blog.php";
				}
				elseif ($page == "home")
				{
					include "link/to/page.php";
					include "link/to/page.php";
					include "link/to/page.php";
					include "link/to/page.php";
				}
				............................. dan seterusnya. 
				else
				{
					return exit;
				}
			}
			
			tujuannya, jika ada update membuat halaman baru, yg perlu diupdate hanya 1 file saja yaitu content.php
			tanpa mengabaikan securitynya. 
		-->
		<?php include "./product/cocoa & vanilla/cocoavanilla.php"?>
		<?php include "./main page/footer.php"?>
		<?php include "./main page/features.php"?>
		<?php include "./vendors/java_script.php"?>
	</body>
</html>