<?php 
$db = mysql_connect('localhost','root','');
mysql_select_db($db.'db1');
mysql_query($db, 'db1');
//comment
$username = htmlentities(addslashes($_POST['username']),ENT_QUOTES,'UTF-8');
$password = htmlentities(addslashes($_POST['password']),ENT_QUOTES,'UTF-8');
$q = "SELECT * FROM users where username = '$username' AND password = '$password'";
$r = mysql_query($db, $q);
$user = mysql_fetch_assoc($r);
if (isset($user['id']))
{
	print 'LOGIN OK';
}
else {
	print 'LOGIN FAIL';
 ?>}
