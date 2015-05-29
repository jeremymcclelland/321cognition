function animateCircles(){
	document.getElementById("logo").className = "animated";
	document.getElementById("colorBar").className = "colorBar-anim";

	var circles = document.getElementsByClassName("circle");
	if (circles) {
  	// Run in reverse because we're
  	// modifying the result as we go:
  		for (var i=circles.length; i-- >= 0;) {
   		circles[i].className += ' anim-circle';
  		}
	}
}

window.onload = function(){ 
	animateCircles();
}