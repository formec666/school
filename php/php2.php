<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
$array=array(1,4,5,3,8,6,7,5,4,4);
prohozeni($array);
function prohozeni($array){
    $first=$array[0];
    $array[0]=$array[9];
    $array[9]=$first;
    foreach ($array as $number) {
        echo($number);# code...
    }
}
echo("\nprvní člen se opakuje ".kolikrat(array_slice($array, 1), $array[0])." krát;-)");
function kolikrat($array, $seeked){
    foreach ($array as $key => $value) {
        if ($value==$seeked) {
            return 1+kolikrat(array_slice($array, $key+1), $seeked);
        }# code...
    }
    return 0;
}
?>	
</body>
</html>