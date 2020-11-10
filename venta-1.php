#!/usr/bin/php -q
<?php
set_time_limit(30);
$param_error_log = '/tmp/notas.log';
$param_debug_on = 1;
require('phpagi.php');
$agi = new AGI();
$agi->answer();
sleep(1);
$agi->exec_agi("googletts.agi,\"Pasarela de compras inodoro de los dioses\",es");

require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("INSERT INTO ventainodoros (nombre, material, color, tipo) VALUES ('Inodoro de los dioses', 'oro puro', 'Oro', 'Descarga Ecologica');", $link);  


$agi->exec_agi("googletts.agi,\"usted compro un inodoro de los dioses\",es");
sleep(1);
$agi->exec_agi("googletts.agi,\"Hasta pronto\",es");

$agi->hangup();
