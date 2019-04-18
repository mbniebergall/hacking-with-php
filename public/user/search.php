<?php


$sql = "SELECT * FROM user WHERE username = '" . $_POST['username'] . "'";

echo $sql . PHP_EOL;
