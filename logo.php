<?php
include 'kanalbaslikcekme.php';

date_default_timezone_set('Europe/Sofia');

$day = date('w');
$date = date('H');
$min = date('i');
?>

<div class="row">
	<div id="logo" class="col-lg-12">

		<a href="360.php"><img class="logoResim" alt="360 Tv" title="<?php echo $kanal360title ?>" src="png/logo_360.png"></a>
		<a href="atv.php"><img class="logoResim" alt="atv" title="<?php atv($day,$date,$min); ?>" src="png/logo_atv.png"></a>
		<a href="beyaz_tv.php"><img class="logoResim" alt="Fox" title="<?php echo $beyaztitle ?>" src="png/logo_beyaztv.png"></a>
		<a href="flash.php"><img class="logoResim" alt="Flash" title="<?php echo $flashtitle ?>" src="png/logo_flash.png"></a>
		<a href="fox.php"><img class="logoResim" alt="Fox" title="<?php echo $foxtitle ?>" src="png/logo_fox.png"></a>
		<a href="kanalD.php" target="_blank"><img class="logoResim" alt="Kanal D" title="<?php //echo ucwords(mb_strtolower($kanaldtitle,'utf8')) ?>" src="png/logo_kanalD.png"></a>
		<a href="makine_tv.php"><img class="logoResim" alt="Makine Tv" title="Makine Tv" src="png/logo_makine_tv.png"></a>
		<a href="show.php"><img class="logoResim" alt="Show" title="<?php //echo $showtitle ?>" src="png/logo_show.png"></a>
		<a href="star.php"><img class="logoResim" alt="Star" title="<?php echo $startitle ?>" src="png/logo_star.png"></a>
		<a href="teve2.php" target="_blank"><img class="logoResim" alt="Teve 2" title="<?php //echo $teve2title ?>" src="png/logo_teve2.png"></a>
		<a href="trt.php"><img class="logoResim" alt="Trt" title="<?php echo $trt1title ?>" src="png/logo_trt.png"></a>
		<a href="trtBelgesel.php"><img class="logoResim" alt="Trt Belgesel" title="<?php echo $trtbelgeseltitle ?>" src="png/logo_trtBelgesel.png" /></a>
		<a href="trtMuzik.php"><img class="logoResim" alt="Trt Müzik" title="<?php echo $trtmuziktitle ?>" src="png/logo_trtmuzik.png"></a>
		<a href="tv8.php"><img class="logoResim" alt="Tv 8" title="<?php echo $tv8title ?>" src="png/logo_tv8.png"></a>
		<a href="vatan.php"><img class="logoResim" alt="Vatan" title="Vatan" src="png/logo_vatan.png"></a>
		<a target="_blank" href="https://www.youtube.com/"><img class="logoResim" alt="Youtube" title="Youtube" src="png/logo_youtube.png"/></a>
		<a target="_blank" href="digerSiteler.php"><img class="logoResim" alt="Alternatif siteler" title="Alternatif siteler" src="png/logo_other.png"/></a>
		<a href="video.php"><img class="logoResim" alt="Video" title="Video" src="png/logo_video.png"></a>
		<a href="http://www.trt.net.tr/anasayfa/canli.aspx?y=radyo&k=trtfm"><img class="logoResim" alt="trtfm" title="trtfm" src="png/radyo.png"></a>
		<a href="https://nova.bg/live" target="_blank"><img class="logoResim" alt="Nova" title="Nova" src="png/logo_nova.png"></a>
		<a href="http://gledaibgtv.com/btv" target="_blank"><img class="logoResim" alt="bTV" title="bTV" src="png/logo_btv.png"></a>

	</div>

</div>