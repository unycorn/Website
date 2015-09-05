<!DOCTYPE html>
<html>

<?php

$theCode = "southjapan";
$theWords;

echo $theWords;

if ($_POST["code"] == $theCode) {
  $theWords = $theWords . $_POST["words"];
}

?>

<body>
  <title> About </title>

  <meta charset="UTF-8">
  <link rel="stylesheet" href="/stylesheets/chat.css">

</body>



<form Name="form1" Method="POST" ACTION="/chat/index.php">

  <p>Enter Code:</p>

  <input id="code" name="code" style="width: 200; height: 80;" type="code" name="type code here">
  <button type="submit" name="codebutton" value="login">Submit</button>

</form>


<form Name="form2" Method="POST" ACTION="/chat/index.php">
  <p>Enter Text:</p>
  <input id="submit" style="width: 200; height: 80;" type="text" name="type text here">
  <br>

  <button type="submit" name="words">Send</button>
  <button type="button" onclick="clearchat()">Clear</button>

</form>

<br>
<br>

<textarea id="words"><?php echo $theWords; ?></textarea>


<br>
<br>
<a href="/index.php">
  <h1>Home</h1>
</a>

</html>
