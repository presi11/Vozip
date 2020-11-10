#!/usr/bin/php -q
<?php
set_time_limit(30);
$param_error_log = '/tmp/notas.log';
$param_debug_on = 1;
require('phpagi.php');
$agi = new AGI();
$agi->answer();
sleep(1);
$agi->exec_agi("googletts.agi,\"Bienvenido a inodoros Juancho nuestro catalogo es el siguiente\",es");

require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("SELECT nombre,precio,color FROM inodoros", $link); 

while ($row = mysql_fetch_array($result)){ 
	$agi->exec_agi("googletts.agi,\"".$row['nombre']."\",es");
	sleep(1);
	$agi->exec_agi("googletts.agi,\"Cuesta\",es");
	$agi->exec_agi("googletts.agi,\"".$row['precio']."\",es");
	$agi->exec_agi("googletts.agi,\"Su color es\",es");
	$agi->exec_agi("googletts.agi,\"".$row['color']."\",es");
} 

$agi->goto_dest('ivr-6');

$agi->exec_agi("googletts.agi,\"A continuacion podra comprar cualquiera de los inodoros\",es");

$agi->exec_agi("googletts.agi,\"Si desea comprar el inodoro de los dioses marque 1\",es");

$agi->exec_agi("googletts.agi,\"Si desea comprar el inodoro regular marque 2\",es");

$agi->exec_agi("googletts.agi,\"Si desea comprar el inodoro economico marque 3\",es");

$agi->exec_agi("googletts.agi,\"Si desea ser atentido por un asesor marque 0\",es");





