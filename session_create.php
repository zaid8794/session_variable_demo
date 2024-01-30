<?php
session_start();
// variables
$_SESSION['admin'] = "Admin";
$_SESSION['user'] = "Zaid";

// print session value
echo $_SESSION['admin']."<br/>";
echo $_SESSION['user'];
echo "<br/>";

// print session array
print_r($_SESSION);

