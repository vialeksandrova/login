<?php 
session_start();
if($_SESSION['isLogged']==true){
echo 'Hello<a href="destroy.php">Log out</a>';
}
else{
if($_POST){
$username=trim($_POST['username']);
$pass=trim($_POST['pass']);
if($username=='Ivan'&& $pass=='123456'){
$_SESSION['isLogged']=true;
header('Location: session.php');
exit;}
else{
echo 'Error';
}}}
?>
<html>
<head></head>
<body>
<form method="POST">
<div>Username<input type="text" name="username"/></div>
<div>Password<input type="password" name="pass"/></div>
<div><input type="submit" value="Go"/></div>
</form>
</body></html>
