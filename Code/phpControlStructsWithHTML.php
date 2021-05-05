<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boilerplate</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
  <div id="root"></div>
  <?php
  $hour = 12;
  if($hour < 12){
    echo "G'mornin!";
  } elseif($hour < 18){
    echo "G'afternoon!";
  } elseif($hour < 22){
    echo "G'evenin'!";
  } else {
    echo "G'night!";
  }
  ?>
  <script src="main.js" type="text/javascript"></script>
  </body>
  </html>
