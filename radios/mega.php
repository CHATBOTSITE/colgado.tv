<?php
$model=[
'active'=>'radios', 
'title'=>'Mega',
'description'=>'Escuchar Mega por internet en vivo las 24hs toda la programaci&oacute;n online y sin l&iacute;mites.',
'schedule'=>'http://www.fm-mega983.com.ar/',
'player'=>'<script type="text/javascript" src="/view/js/player.js"></script>
<object type="application/x-shockwave-flash" data="http://p.jwpcdn.com/6/8/jwplayer.flash.swf" width="600" height="30" id="player_421" name="player_421">
<param name="allowfullscreen" value="true" />
<param name="wmode" value="opaque" /></object>
<script type="text/javascript">
jwplayer("player_421").setup({
file: "http://server5.stweb.tv:1935/mega983/live/playlist.m3u8",
title: "Mega - colgado.TV",width: "600",height: "30",stretching: "exactfit",autostart: "true"});
</script>'];
include_once'../controller/prepare.php';	
?>

