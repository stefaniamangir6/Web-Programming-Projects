
var dragelem = document.getElementById("item"); 
dragelem.addEventListener ("mousedown" , elemMouseDown , false); 


function elemMouseDown(ev) {
    ev.preventDefault(); 
    document.addEventListener ("mousemove" , elemMouseMove , false); 
}

function elemMouseMove(ev) { 
    var pX = ev.pageX;
    var pY = ev.pageY;
    dragelem.style.left = pX + "px"; 
    dragelem.style.top = pY + "px";
    document.addEventListener ("mouseup" , elemMouseUp , false);
}

function elemMouseUp() {
    document.removeEventListener ("mousemove" , elemMouseMove , false);  
    document.removeEventListener ("mouseup" , elemMouseUp , false);
}

