
<!DOCTYPE html>
<html>
<head>
	<title>Camagru 42</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Administration</h1>
	<div class="navigation">
		<ul>
			<li><a href="<?php echo WEBROOT ?>admin/">HOME</a></li>
			<li><a href="<?php echo WEBROOT ?>logout">Log out</a></li>
		</ul>
		<ul>
			<li><a href="all_creations.php"> View all creations</a></li>
			<li><a href="my_creations.php"> View my creations</a></li>
			<li><a href="new_creation.php"> Create new creation</a></li>
			<li><a href="category.php">Categories</a></li>
			<li><a href="work.php">Work</a></li>
		</ul>
	</div>	
	<?php echo flash();