<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <div id="quote-box">
      <?php
      include 'inc/functions.php';
      $quote = printQuote($quotes);
      echo "<p class='quote'>" . $quote['quote'] . "</p>";
      echo "<p class='source'>". $quote['author'] . "<br><span class='citation'><a href='https://gist.github.com/nasrulhazim/54b659e43b1035215cd0ba1d4577ee80'>thanks to: nasrulhazim on Github</a></span></p>";
      ?>
      </div>
    <button id="loadQuote" onclick="window.location.reload(true)" >Show another quote</button>
  </div>
</body>
</html>