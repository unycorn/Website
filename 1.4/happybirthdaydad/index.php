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
	<title>Happy Bday!</title>
	<link rel="stylesheet" href="/stylesheets/HappyBirthdayDad.css">

</head>

<h1>
	Happy Birthday Dad!
</h1>

<body>
	Dear Dad,
	<br>
	<br> You have always been one of the most influential people
	<br> in my life. I love you so much for being so many things.
	<br> A father, a role model, a teacher, and overall a great dad.
	<br> I will always love you, Happy Birthday.
</body>

</html>
