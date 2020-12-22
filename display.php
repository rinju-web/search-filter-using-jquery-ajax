<?php
$name = htmlspecialchars($_POST["name"]);
$id = htmlspecialchars($_POST["id"]);
$dob=htmlspecialchars($_POST["dob"]);
echo "Hi, $name. Your id $id and DOB $dob has been received successfully." . "";
?>