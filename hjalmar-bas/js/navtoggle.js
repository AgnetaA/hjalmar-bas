
var screenwidth = screen.width;

var menuButton = document.getElementById("mobile-nav-icon");
var navbar = document.getElementById("navbar");
var menubutton = document.getElementById("menubutton");

var toggle = 0;


menuButton.addEventListener("click",function() {

		if (toggle == 0) {
			
			navbar.style.display = "block";
			menubutton.style.boxShadow = "inset 0px 0px 15px -4px rgba(31,31,31,1)";
			
			toggle = 1;
		}	
		else if (toggle == 1) {
			
			navbar.style.display = "none";
			menubutton.style.boxShadow = "none";
			
			toggle = 0;
		}		
});


window.onresize = function() {
	var windowwidth = window.innerWidth;

    if (screenwidth >= 901 && windowwidth >= 901) {
    	navbar.style.display = "block";
    }   
} 
        