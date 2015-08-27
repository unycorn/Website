<!DOCTYPE html>
<html>

<?php

$theCode = "southjapan";
$theFile = fopen("C:\apache\htdocs\chat.txt", "r+");
$theWords = file_get_contents($theFile);

echo $theWords;

if ($_POST["code"] == $theCode) {

}

?>

<body>
  <title> About </title>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="/chat/chat.css">

</body>



<form Name="form1" Method="POST" ACTION="/chat/index.php">

  <p>Enter Code:</p>

  <input id="code" name="code" style="width: 200; height: 80;" type="code" name="type code here">
  <button type="submit" name="codebutton" value="login">Submit</button>

</form>

<p>Enter Text:</p>
<input id="submit" style="width: 200; height: 80;" type="text" name="type text here">
<br>

<button type="button" onclick="enter()">Send</button>
<button type="button" onclick="clearchat()">Clear</button>

<br>
<br>

<textarea id="words"><?php echo $theWords; ?></textarea>


<br>
<br>
<a href="/index.php">
  <h1>Home</h1>
</a>

</html>
