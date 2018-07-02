function changeColor() {

	var randomNumberColumn = Math.floor(Math.random() * 6); 

	var colors = [
	['#0141f1','#5884fe','#012589','#c4d4ff'], //blue
	['#e71523','#f26e77','#950e17','#fac9cc'], //red
	['#61a62f','#95d468','#335819','#dff2d1',], //green
	['#fefe25','#fefe8a','#bcbc01','#ffffc4',], //yellow
	['#9a0794','#f415ed','#3a0339','#fdddfc',], //purple
	['#fc600a','#fe9f6d','#9d3802','#ffe8dc',]]; //orange

	var header = document.getElementById('header');
	var spanColor = document.getElementById('spanColor');
	header.style.background = colors[randomNumberColumn][0];

	var footerYazi = document.getElementById('footerYazi');
	footerYazi.style.color = colors[randomNumberColumn][2];

	document.body.style.backgroundColor = colors[randomNumberColumn][1];

	var footer = document.getElementById('footer');
	footer.style.background = colors[randomNumberColumn][0];

	var logo = document.getElementById('logo');
	logo.style.background = colors[randomNumberColumn][2];

	var btn = document.getElementById('btnRefresh');
	btn.style.backgroundColor = colors[randomNumberColumn][0];
	btn.style.border = '2px solid' + colors[randomNumberColumn][3];

	if (randomNumberColumn == 3) {
		header.style.color = 'black';
		footer.style.color = 'black';
		spanColor.style.color = 'black';
		btn.style.color = 'black';
	}else{
		header.style.color = 'white';
		footer.style.color = 'white';
		spanColor.style.color = 'white';
		btn.style.color = 'white';
	}
}

function changeColor1() {

	var randomNumberColumn = Math.floor(Math.random() * 6); 

	var colors = [
	['#0141f1','#5884fe','#012589','#c4d4ff'], //blue
	['#e71523','#f26e77','#950e17','#fac9cc'], //red
	['#61a62f','#95d468','#335819','#dff2d1',], //green
	['#fefe25','#fefe8a','#bcbc01','#ffffc4',], //yellow
	['#9a0794','#f415ed','#3a0339','#fdddfc',], //purple
	['#fc600a','#fe9f6d','#9d3802','#ffe8dc',]]; //orange

	var header = document.getElementById('header');
	var spanColor = document.getElementById('spanColor');
	header.style.background = colors[randomNumberColumn][0];

	var footerYazi = document.getElementById('footerYazi');
	footerYazi.style.color = colors[randomNumberColumn][2];

	document.body.style.backgroundColor = colors[randomNumberColumn][1];

	var footer = document.getElementById('footer');
	footer.style.background = colors[randomNumberColumn][0];

	var btn = document.getElementsByClassName('btn')[0];
	btn.style.backgroundColor = colors[randomNumberColumn][0];
	btn.style.border = '2px solid' + colors[randomNumberColumn][3];

	// class veya tag elementi kullanırsak birden fazla oldugundan index numarası girilirmesi gerekir hepsine uygulamak için for döngüsü kullanıldı
	var kanalYazi = document.getElementsByClassName('kanalYazi');
	for (var i = 0; i <= kanalYazi.length - 1; i++) {	
			kanalYazi[i].style.border = '3px solid' + colors[randomNumberColumn][3];
		}
	
	if (randomNumberColumn == 3) {
		for (var i = 0; i <= kanalYazi.length - 1; i++) {	
			kanalYazi[i].style.color = 'black';
		}
		header.style.color = 'black';
		footer.style.color = 'black';
		spanColor.style.color = 'black';
		btn.style.color = 'black';
	}else{
		for (var i = 0; i <= kanalYazi.length - 1; i++) {	
			kanalYazi[i].style.color = 'white';
		}
		header.style.color = 'white';
		footer.style.color = 'white';
		spanColor.style.color = 'white';
		btn.style.color = 'white';
	}
}

function page() {
	var otherPage = location.href;
	var explode = otherPage.split('/');

	//burada digerSiteler.php sayfasında olup olmadığını bakıyoruz.
	var url;
	for(var i = 0; i <= explode.length; i++){
		var x = explode[i];
		if(x == 'digerSiteler.php')
		{
			url = explode[i];
			break;
		}
	}

	//eger digerSiteler.php sayfasındaysak changeColor1() fonkiyonu cagılıyor degılse changeColor.
	if (url == 'digerSiteler.php') {
		changeColor1();
	}else{
		changeColor();
	}
}

page();