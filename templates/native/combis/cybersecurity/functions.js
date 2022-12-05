// Load main functions...
// Can also be included with a regular script tag

var i = 0;
var txt = 'KLIK ZA SIGURNOST'; /* The text */
var speed = 200; /* The speed/duration of the effect in milliseconds */
function typeWriter() {
    if (i < txt.length) {
      document.getElementById("main-title").innerHTML += txt.charAt(i);
      i++;
      setTimeout(typeWriter, speed);
    }
}

/*var j = 0;
var speed = 200; 
function upnumbercounter(element) {
    var target = parseInt(element.attr("data-target"));
    if (j < target) {
        element.innerHTML = j;
        j = j + parseInt(target/10);
        setTimeout(upnumbercounter, speed);
    }
}*/

jQuery(document).ready(function () {
    typeWriter();
});