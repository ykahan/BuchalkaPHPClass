<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP With HTML</title>
	<link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">

	<meta name="NetsparkQuiltingResult" total-length="795" removed="0" rules-found="w3089,w2339,w5493" />
</head>
<body>
	<?php $names = ["Yehoshua", "Kahan", "Abba", "Me"]; ?>
	<div id="root"></div>

	<!-- here's a short echo tag -->
	<p>Here's a paragraph <?="that contains some PHP with a \"short echo tag\""; ?></p>
	<p>Here's a list of names</p>
	<ol>
		  <?php
		      foreach ($names as $name)
		        {
			          echo "<li>Current name: $name</li>";
		        }
      ?>
	</ol>
	<ul>
		  <?php
		      for ($i = 0;$i < count($names);$i++)
		{
			echo "<li>Current name: $names[$i]</li>";
		}
		?>
	</ul>
	<script src="main.js" type="text/javascript"></script>
</body>
</html>
