<?php
header("Content-type: text/html; charset=utf-8");

require "../includes/settings.php";
require "../includes/global.inc.php";

$dbh = get_dbh();

$sql = "SELECT * FROM ntisitedb ORDER BY username DESC";
$stmt = $dbh->prepare($sql);

$stmt->execute();

while($user=$stmt->fetch()){
    var_dump($user);
}