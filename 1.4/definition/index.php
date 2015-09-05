<link rel="stylesheet" href="/stylesheets/def.css">
<title>Definitions</title>

<?php
$string = "";

$fp = fopen("IPlist.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'] . "\n";

fwrite($fp, $ip);
fclose($fp);
?>

<br>
<br>
<body>

  Bigger than the biggest thing ever and then some.
  <br> Much bigger than that in fact, really amazingly immense, a
  <br> totally stunning size, real 'wow, that's big', time. Infinity is
  <br> just so big that by comparison, bigness itself looks really titchy.
  <br> Gigantic multiplied by colossal multiplied by staggeringly
  <br> huge is the sort of concept we're trying to get across here.

</body>
<br>
<br>
<a href="/index.php"><h1>Home</h1></a>
