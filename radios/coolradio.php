<?php
$model=[
'active'=>'radios', 
'title'=>'Cool Radio',
'description'=>'Escuchar Cool Radio por internet en vivo las 24hs toda la programaci&oacute;n online y sin l&iacute;mites.',
'player'=> basename($_SERVER["PHP_SELF"], ".php")];
include_once'../controller/prepare.php';	
?>