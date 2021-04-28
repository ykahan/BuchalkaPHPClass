<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP With HTML</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
  <?php $names = ["Yehoshua", "Kahan", "Abba", "Me"]; ?>
  <div id="root"></div>
  <p>Here's a paragraph <?php echo "that contains some PHP"; ?></p>
  <p>Here's a list of names</p>
  <ul>
    <?php foreach($names as $name){
      echo "<li>Current name: $name</li>";
    }?>
  </ul>
  <script src="main.js" type="text/javascript"></script>
</body>
</html>
