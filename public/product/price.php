<?php

$sql = "SELECT * FROM product WHERE id = " . $_POST['id'];

echo $sql . PHP_EOL;