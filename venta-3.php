#!/usr/bin/php -q
<?php
set_time_limit(30);
$param_error_log = '/tmp/notas.log';
$param_debug_on = 1;
require('phpagi.php');
$agi = new AGI();
$agi->answer();
sleep(1);
$agi->exec_agi("googletts.agi,\"Pasarela de compras Inodoro economico\",es");

require("definiciones.inc");
$link = mysql_connect(MAQUINA, USUARIO,CLAVE); 
mysql_select_db(DB, $link); 
$result = mysql_query("INSERT INTO ventainodoros ( nombre, material, color, tipo) VALUES ('Inodoro economico', 'Ceramica',  'Blanco', 'Descarga tradicional');",$link); 
$agi->exec_agi("googletts.agi,\"usted compro un Inodoro economico\",es");
sleep(1);
$agi->exec_agi("googletts.agi,\"Hasta pronto\",es");

$agi->hangup();
