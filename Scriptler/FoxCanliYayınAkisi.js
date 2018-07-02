//https://www.fox.com.tr/yayin-akisi


$(document).ready(function(){
  
    var list= [];
    var today; 
    var programs = [];
    
    
    var elements = $('.streamingTabContent');
    
    $.each(elements, function(item,data){
      if($(data).css('display') == 'block'){
        today = data;
      }
    });
    
    
    console.log(today);
                     
    list = $(today).children();
    
     $.each(list, function(item,data){
  
       var column = $(data).children();     
       
       var programInfo = {Time: $(column[0]).text().trim(), Name:  $(column[2]).text().trim()};
      programs.push(programInfo);
       
    });
    
    
    console.log(programs);
    
    
    
  });