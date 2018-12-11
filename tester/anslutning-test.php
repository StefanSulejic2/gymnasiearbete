<?php
header("Content-type: text/html; charset=utf-8");
$dbh = new PDO('mysql:host=localhost;dbname=ntisitedb', 'phpuser', 'tjenahejsan');

if(! $dbh){
    echo "Kontakt ej etablerad";
    exit;
}
echo "Kontakt etablerad. Hurra!";

$sql = "SELECT * FROM ntisitedb ORDER BY username DESC";
$stmt = $dbh->prepare($sql);

$stmt->execute();

while($user=$stmt->fetch()){
    var_dump($user);
}