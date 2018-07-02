function reload(){
    var container = document.getElementById("frame");
    var content = container.src;
    container.src= content; 
    
   //this line is to watch the result in console , you can remove it later  
   
   console.log('Refreshed');
}

$(function (argument) {
	$(function (argument) {
		$('#header').delay(400).fadeIn('slow');
		$('#frame').delay(100).fadeIn('slow');
		$('#logo').delay(800).fadeIn('slow');
		$('#footer').delay(1000).fadeIn('slow');
		$('#btnRefresh').delay(1200).fadeIn('slow');
	});
	$('#header').click(function (argument) {
		$('#panel').slideToggle();
	});
});