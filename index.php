<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">

    
</head>
<body  <?php
   echo "style=\"background-color:".sprintf('#%06X', mt_rand(0, 0xFFFFFF)).";\"";
  ?>>
  <div class="container">
    <div id="quote-box">

      <?php
      include 'inc/functions.php';
      printQuote($quotes);
      ?>
      </div>
    <!-- Replaced the original on-click event and added an <a> Tag -->
    <a href="index.php"><button id="loadQuote"  >Show another quote</button></a>

    
  </div>
</body>
</html>