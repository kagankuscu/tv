<?php 

$kanal360 = file_get_contents('http://www.canlitvlive.io/izle/sky-turk.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $kanal360,$kanal360baslik);

$kanal360title = $kanal360baslik[1];

function atv($day, $date, $min)
{

	$atv = array('pazartesi' => array('6' => 'Beni Bırakma','8' => 'Kahvaltı Haberleri' ,'10' => 'Müge Anlı' , '13' => 'Gün Ortası' ,'14' => 'Beni Bırakma' ,'16' => 'Esra Erol' ,'19' => 'Atv Ana Haber', '20' => 'Kim Milyoner Olmak İster' , '23' => 'Nihat Hatipoğlu' ),  
		'salı' => array('6' => 'Beni Bırakma','8' => 'Kahvaltı Haberleri' ,'10' => 'Müge Anlı' , '13' => 'Gün Ortası' ,'14' => 'Beni Bırakma' ,'16' => 'Esra Erol' ,'19' => 'Atv Ana Haber', '20' => 'Eşkiya Dünyaya Hükümdar Olamaz' , '23' => 'Kim Milyoner Olmak İster' ),
		'carsamba' => array('6' => 'Beni Bırakma','8' => 'Kahvaltı Haberleri' ,'10' => 'Müge Anlı' , '13' => 'Gün Ortası' ,'14' => 'Beni Bırakma' ,'16' => 'Esra Erol' ,'19' => 'Atv Ana Haber', '19:45' => 'Nihat Hatipoğlu', '21' => 'Sen Anlat Karadeniz' , '23' => 'Kim Milyoner Olmak İster'),
		'persembe' => array('6' => 'Beni Bırakma','8' => 'Kahvaltı Haberleri' ,'10' => 'Müge Anlı' , '13' => 'Gün Ortası' ,'14' => 'Beni Bırakma' ,'16' => 'Esra Erol' ,'19' => 'Atv Ana Haber', '19:45' => 'Nihat Hatipoğlu', '21' => 'Kanatsız Kuşlar' ),
		'cuma' => array('6' => 'Beni Bırakma','8' => 'Kahvaltı Haberleri' ,'10' => 'Müge Anlı' , '13' => 'Gün Ortası' ,'14' => 'Beni Bırakma' ,'16' => 'Esra Erol' ,'19' => 'Atv Ana Haber', '19:45' => 'Nihat Hatipoğlu', '21' => 'Aşk Ve Mavi'),
		'cumartesi' => array('6' => 'Beni Bırakma','7:30' => 'Atvde Hafta Sonu' ,'10' => 'Cennet\'in Gözyaşları' ,'13' => 'Eşkıya Dünyaya Hükümdar Olmaz' ,'15:30' => 'Aşk Ve Mavi' ,'19' => 'Hafta Sonu Atv Ana Haber', '19:45' => 'Nihat Hatipoğlu', '21' => 'Kim Milyoner Olmak İster'),
		'pazar' => array('7:30' => 'Atvde Hafta Sonu' ,'10' => 'Nihat Hatipoğlu İle Kuran','12' => 'Yerli Dizi' ,'13' => 'Eşkıya Dünyaya Hükümdar Olmaz' ,'15:30' => 'Yerli Dizi' ,'19' => 'Hafta Sonu Atv Ana Haber', '19:45' => 'Nihat Hatipoğlu', '21' => 'Cennet\'in Gözyaşları'),

	);

	switch ($day) {
		case '1':
		if ($date ==  6 or $date == 7) {
			echo $atv['pazartesi']['6'];
		}elseif ($date == 8 or $date == 9 ) {
			echo $atv['pazartesi']['8'];
		}elseif ($date == 10 or $date == 11 ) {
			echo $atv['pazartesi']['10'];
		}elseif ($date == 13 ) {
			echo $atv['pazartesi']['13'];
		}elseif ($date == 14 or $date == 15 ) {
			echo $atv['pazartesi']['14'];
		}elseif ($date == 16 or $date == 17 ) {
			echo $atv['pazartesi']['16'];
		}elseif ($date == 19) {
			echo $atv['pazartesi']['19'];
		}elseif ($date == 20 or $date == 21 or $date == 22) {
			echo $atv['pazartesi']['20'];
		}elseif ($date == 23) {
			echo $atv['pazartesi']['23'];
		}
		break;

		case '2':
		if ($date ==  6 or $date == 7) {
			echo $atv['salı']['6'];
		}elseif ($date == 8 or $date == 9 ) {
			echo $atv['salı']['8'];
		}elseif ($date == 10 or $date == 11 ) {
			echo $atv['salı']['10'];
		}elseif ($date == 13 ) {
			echo $atv['salı']['13'];
		}elseif ($date == 14 or $date == 15 ) {
			echo $atv['salı']['14'];
		}elseif ($date == 16 or $date == 17 ) {
			echo $atv['salı']['16'];
		}elseif ($date == 19) {
			echo $atv['salı']['19'];
		}elseif ($date == 20 or $date == 21 or $date == 22) {
			echo $atv['salı']['20'];
		}elseif ($date == 23) {
			echo $atv['salı']['23'];
		}
		break;

		case '3':
		if ($date ==  6 or $date == 7) {
			echo $atv['carsamba']['6'];
		}elseif ($date == 8 or $date == 9 ) {
			echo $atv['carsamba']['8'];
		}elseif ($date == 10 or $date == 11 ) {
			echo $atv['carsamba']['10'];
		}elseif ($date == 13 ) {
			echo $atv['carsamba']['13'];
		}elseif ($date == 14 or $date == 15 ) {
			echo $atv['carsamba']['14'];
		}elseif ($date == 16 or $date == 17 ) {
			echo $atv['carsamba']['16'];
		}elseif ($date == 19 and $min < 45) {
			echo $atv['carsamba']['19'];
		}elseif ($date == 19 and $min >= 45 or $date == 20) {
			echo $atv['carsamba']['19:45'];
		}elseif ($date == 21 or $date == 22) {
			echo $atv['carsamba']['21'];
		}elseif ($date == 23) {
			echo $atv['carsamba']['23'];
		}
		break;

		case '4':
		if ($date ==  6 or $date == 7) {
			echo $atv['persembe']['6'];
		}elseif ($date == 7 and $min == 30 ) {
			echo $atv['persembe']['8'];
		}elseif ($date == 10 or $date == 11 ) {
			echo $atv['persembe']['10'];
		}elseif ($date == 13 ) {
			echo $atv['persembe']['13'];
		}elseif ($date == 14 or $date == 15 ) {
			echo $atv['persembe']['14'];
		}elseif ($date == 16 or $date == 17 ) {
			echo $atv['persembe']['16'];
		}elseif ($date == 19 and $min < 45) {
			echo $atv['persembe']['19'];
		}elseif ($date == 19 and $min >= 45 or $date == 20) {
			echo $atv['persembe']['19:45'];
		}elseif ($date == 21 or $date == 22 or $date == 23) {
			echo $atv['persembe']['21'];
		}
		break;

		case '5':
		if ($date ==  6 or $date == 7) {
			echo $atv['cuma']['6'];
		}elseif ($date == 8 or $date == 9 ) {
			echo $atv['cuma']['8'];
		}elseif ($date == 10 or $date == 11 ) {
			echo $atv['cuma']['10'];
		}elseif ($date == 13 ) {
			echo $atv['cuma']['13'];
		}elseif ($date == 14 or $date == 15 ) {
			echo $atv['cuma']['14'];
		}elseif ($date == 16 or $date == 17 ) {
			echo $atv['cuma']['16'];
		}elseif ($date == 19 and $min < 45) {
			echo $atv['cuma']['19'];
		}elseif ($date == 19 and $min >= 45 or $date == 20) {
			echo $atv['cuma']['19:45'];
		}elseif ($date == 21 or $date == 22 or $date == 23) {
			echo $atv['cuma']['21'];
		}
		break;

		case '6':
		if ($date ==  6 or $date == 7 and $min < 30) {
			echo $atv['cumartesi']['6'];
		}elseif ($date == 10 or $date == 11 or $date == 12 or $date == 13 or $date == 14 or $date == 15 and $min < 30) {
			echo $atv['cumartesi']['10'];
		}elseif ($date == 15 and $min >= 30 or $date == 16 or $date == 17 or $date == 18) {
			echo $atv['cumartesi']['15:30'];
		}elseif ($date == 19 and $min < 45) {
			echo $atv['cumartesi']['19'];
		}elseif ($date == 19 and $min >= 45 or $date == 20) {
			echo $atv['cumartesi']['19:45'];
		}elseif ($date == 21 or $date == 22 or $date == 23) {
			echo $atv['cumartesi']['21'];	
		}
		break;

		case '7':
		if ($date == 7 and $min >= 30) {
			echo $atv['pazar']['7:30'];
		}elseif ($date == 10 or $date == 11) {
			echo $atv['pazar']['10'];
		}elseif ($date == 12) {
			echo $atv['pazar']['12'];
		}elseif ($date == 13 or $date == 14 or $date == 15 and $min < 30) {
			echo $atv['pazar']['13'];
		}elseif ($date == 15 and $min >= 30 or $date == 16 or $date == 17 or $date == 18) {
			echo $atv['pazar']['15:30'];
		}elseif ($date == 19 and $min < 45) {
			echo $atv['pazar']['19'];
		}elseif ($date == 19 and $min >= 45 or $date == 20) {
			echo $atv['pazar']['19:45'];
		}elseif ($date == 21 or $date == 22 or $date == 23) {
			echo $atv['pazar']['21'];	
		}
		break;
	}
}

$beyaz = file_get_contents('http://www.canlitvlive.io/izle/beyaz-tv.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $beyaz,$beyazbaslik);

$beyaztitle = $beyazbaslik[1];

$flash = file_get_contents('http://www.canlitvlive.io/izle/flash-tv.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $flash,$flashbaslik);

$flashtitle = $flashbaslik[1];

$fox = file_get_contents('http://www.canlitvlive.io/izle/fox-tv-turkiye-kanal.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $fox,$foxbaslik);

$foxtitle = $foxbaslik[1];

// $kanald = file_get_contents('http://www.radyotv.live/kanal-d');

// preg_match('@<a href="http://www.radyotv.live/kanal-d" title="Kanal D"><img class="logokucuk" src="http://www.radyotv.live/kanallar/kucuk/kanal-d.png" alt="Kanal D">(.*?)</a>@si', $kanald,$kanaldbaslik);

// $kanaldtitle = $kanaldbaslik[1];

$show = file_get_contents('http://www.canlitvlive.io/izle/show-turk-canli.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $show,$showbaslik);

// $showtitle = $showbaslik[1];

$star = file_get_contents('http://www.canlitvlive.io/izle/hd-star-tv-izle.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $star,$starbaslik);

$startitle = $starbaslik[1];

// $teve2 = file_get_contents('http://www.radyotv.live/teve2');

// preg_match('@<a href="http://www.radyotv.live/teve2" title="Teve2"><img class="logokucuk" src="http://www.radyotv.live/kanallar/kucuk/teve2.png" alt="Teve2">(.*?)</a>@si', $teve2,$teve2baslik);

// $teve2title = $teve2baslik[1];

$trt1 = file_get_contents('http://www.canlitvlive.io/izle/trt-1.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $trt1,$trt1baslik);

$trt1title = $trt1baslik[1];

$trtbelgesel = file_get_contents('http://www.canlitvlive.io/izle/trt-belgesel.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $trtbelgesel,$trtbelgeselbaslik);

$trtbelgeseltitle = $trtbelgeselbaslik[1];

$trtmuzik = file_get_contents('http://www.canlitvlive.io/izle/trt-muzik.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $trtmuzik,$trtmuzikbaslik);

$trtmuziktitle = $trtmuzikbaslik[1];

$tv8 = file_get_contents('http://web.canlitvlive.io/izle/kanal-8-tr-yayin.html');

preg_match('@<div class="scr-sag">(.*?)</div>@si', $tv8,$tv8baslik);

// $tv8title = $tv8baslik[1];
$tv8title = '';
?>

