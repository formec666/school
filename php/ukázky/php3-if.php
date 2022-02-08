<!DOCTYPE HTML>
<html>
<head>
	<title>Prikaz IF</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
<?php
$prom1=1;
$prom2=5;
if ($prom1 > $prom2) {echo ("prom1 je vetsi");} 
	elseif ($prom1==$prom2) {echo ("jsou stejne");}
	 else {echo ("prom2 je vetsi");};
	 
($prom2 %2) ==0 ? $odp="je sude" : $odp="neni sude";
echo ("<br>Prom2: ".$odp); 	 
?>	
</body>
</html>