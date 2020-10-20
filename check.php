<?php
require 'database.php';

    $name=$_POST['name'];
    $day=$_POST['day'];

$pdo=connect();
insertText($pdo,$name,$day);

?>