<?php
header("Access-Control-Allow-Origin:*");
header('Access-Control-Allow-Methods:POST');
header("content-type:text/html;charset=utf-8");
$str=$_POST['json'];
//save to file
$arr=json_decode($str,true);
$id=$arr['survey']['id'];
$title=$arr['survey']['title'];
$jsonfile="jsonfile/" . $title . "_" . $id . ".json";
file_put_contents($jsonfile,$str);
$fileurl="http://localhost:8080/" . $jsonfile;
echo "The server saved " . $fileurl;
exit();
?>