
<?php include("site-header.php");?> 

<?php

	if($page == "home"){
		include("pages/home.php");
	}

	if($page == "projects"){
		include("pages/projects/template.php");
	}

	if($page == "contact"){
		include("pages/contact/template.php");
	}

	if($page == "goals"){
		include("pages/goals/template.php");
	}

	if($page == "resume"){
		include("pages/resume/template.php");
	}

	if($page == "layout-garden"){
		include("pages/layout-garden/template.php");
	}

	if($page == "forms"){
		include("pages/projects/forms/index.php");
	}

	if($page == "form"){
		include("pages/projects/forms/detail.php");
	}
?>

<?php include('modules/site-footer.php'); ?>


