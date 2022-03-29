$(document).ready(function(){ 
    
    var picWidth = 200; 
    var poz = 0;		
    var slideDiv = document.getElementById("slide_id");
    var slideImg = document.getElementById("slide_img");

    $("li").each(function() {    
            poz += picWidth;
            $(this).css("left", poz);   
    }); 

    $("img").click(function(){
       var img = $(this).attr('src');
       slideDiv.style.display = 'block';
       slideImg.src = img; 
       $("li").clearQueue(); 
       $("li").stop(); 
    });

    slideImg.onclick = function() {
    slideDiv.style.display = 'none';  
    slide();
    } 

    
    function slide() {  
        $("li").animate({"left":"+=15px"}, 'fast', repeat); 
    } 
    function repeat() { 
        var left =  $(this).offset().left; 
        if (left >= 1600) {
            $(this).css("left",left - 1600); 
        } 
        slide();
    }

    slide();
});