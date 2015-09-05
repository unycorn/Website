<!DOCTYPE html>
<html>

<?php
$string = "";

$fp = fopen("IPlist.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'] . "\n";

fwrite($fp, $ip);
fclose($fp);
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="/stylesheets/infin.css">

  <title>David's Junk</title>

</head>

<script src="https://cdn.firebase.com/js/client/2.2.7/firebase.js"></script>
<audio id="audio1" src="01.wav"></audio>

<body>
  This is a branch of my website where you can learn all about infinity.
  <br>
</body>

<img src="/img/infin.png" alt="Infinity">
<br>
<a href="/definition">Definition</a>
<br>
<br>
<a href="/index.php"><h1>Home</h1></a>

</html>
