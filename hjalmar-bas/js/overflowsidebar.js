
var divWidth = document.getElementById("contact-info-box").offsetWidth;
var text = document.getElementById("contact-e-mail-link");
var fontsize = 16;


while (text.offsetWidth > divWidth){
  text.style.fontSize = fontsize - 1 + "px";
  fontsize--;
};


var contentWidth = document.getElementById("content-wrap").offsetWidth;
var upperimagetext = document.getElementById("upper-image-text");
var fontsize2 = 70;




var logo = document.querySelector(".custom-logo");
var logoheight = 150;
var header = document.getElementById("header");



while (logo.offsetWidth > header.offsetWidth){
 	logo.style.height = logoheight - 1 + "px";
 	logoheight--;
};




while (upperimagetext.offsetWidth > contentWidth){
  upperimagetext.style.fontSize = fontsize2 - 1 + "px";
  fontsize2--;
};