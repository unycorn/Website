<!DOCTYPE>
<html>

<?php
$string = "";

$fp = fopen("IPlist.txt", "a");
$ip = $_SERVER['REMOTE_ADDR'] . "\n";

fwrite($fp, $ip);
fclose($fp);
?>

<head>
	<title> Tic Tac Toe Three In A Row</title>

</head>

<div id="wrapper">

	<button type="button" id="1" style="width:50px;height:50px">X</button>
	<button type="button" id="2" style="width:50px;height:50px">O</button>
	<button type="button" id="3" style="width:50px;height:50px">O</button>
	<br/>
	<button type="button" id="4" style="width:50px;height:50px">_</button>
	<button type="button" id="5" style="width:50px;height:50px">X</button>
	<button type="button" id="6" style="width:50px;height:50px">O</button>
	<br/>
	<button type="button" id="7" style="width:50px;height:50px">_</button>
	<button type="button" id="8" style="width:50px;height:50px">_</button>
	<button type="button" id="9" style="width:50px;height:50px">X</button>


</div>

<script>
	var tiles = ["_", "X", "O"];
	db = {
		board: [0, 1, 2, 0, 1, 2, 0, 1, 2]
	};

	function updateBoard() {
		for (i = 0; i < 9; i++) {
			var button = document.getElementById(i + 1);
			button.innerHTML = tiles[db.board[i]];
		}
	}
	updateBoard();
</script>
<br>
<br>
<a href="/index.php"><h1>Home</h1></a>

</html>
