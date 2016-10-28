<?php
function conectarse()
{
$mysqli = new mysqli("localhost", "root", "", "bd_farmacia");	
if ($mysqli->connect_errno)
{
echo'ERROR CONECTANDO CON EL SERVIDOR' . $mysqli->connect_errno ;
exit();
}
return $mysqli;
}
conectarse();
?>
