
var divWidth = document.getElementById("contact-info-box").offsetWidth;
var text = document.getElementById("contact-e-mail-link");
var fontsize = 16;


while (text.offsetWidth > divWidth){
  text.style.fontSize = fontsize - 1 + "px";
  fontsize--;
}


