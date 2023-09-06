
<!doctype html>

<?php

	$page = "home";
	if ( isset($_GET["page"]) ) {
		$page = $_GET["page"];
	}

?>

<html lang="en">
	<?php include("head.php"); ?>
<body>
	
<header class="site-header">
<inner-column>
	
	<site-header> 
		<a href="#" class='link logo'>
		<svg viewBox='0 0 10 3'>
		<rect width='10' height='3' />
		</svg>
		</a>
		<nav>
			<ul>
				<li> <a href="?page=home">Home</a></li>
				<li> <a href="?page=updates">Updates</a></li>
				<li> <a href="?page=services">Services</a></li>
				<li> <a href="?page=features">Features</a></li>
				<li> <a href="?page=about">About Us</a></li>
		</nav>	

			<a href="#" class='link login'>
		<svg viewBox='0 0 10 3'>
		<rect width='10' height='3' />
		</svg>
		</a>
		
	</site-header>
	
</inner-column>
</header>

<main>

