<h1>
<?php
$string = "";

$fp = fopen("IPlist.txt", "a");
$ip = "\n" . $_SERVER['REMOTE_ADDR'];

fwrite($fp, $ip);
fclose($fp);

if($ip == "\n192.168.1.3"){
  $string = $ip . " - Admin";
} else {
  $string = $ip . " - User";
}
echo $string;

?>
</h1>
