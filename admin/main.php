<?php
session_start();
$_SESSION['a'] = 'b';
if(isset($_POST['logout'])){
	session_destroy();
}
?>