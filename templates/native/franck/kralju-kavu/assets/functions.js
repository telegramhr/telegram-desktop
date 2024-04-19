// Load main functions...

jQuery(document).ready(function () {
  AOS.init({
    duration: 1000,
    delay: 250
  });
});

/* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.left = "0px";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.left = "-70vw";
}




