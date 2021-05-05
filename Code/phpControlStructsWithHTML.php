<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  $hour = 12;
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boilerplate</title>
  <link rel="stylesheet" type="text/css" title="Cool stylesheet" href="style.css">
</head>
<body>
  <div id="root"></div>
  <?php if($hour < 12): ?>
    G'mornin!
  <?php elseif($hour < 18) : ?>
    G'afternoon!  Hiya!
  <?php elseif($hour < 22): ?>
    G'evenin'!
  <?php else: ?>
  G'night!
<?php endif; ?>

  <script src="main.js" type="text/javascript"></script>
</body>
</html>
