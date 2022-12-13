// Load main functions...
function ready(fn) {
  if (document.readyState != 'loading'){
      AOS.init();
      console.log("aayy lmao");
  } else {
    document.addEventListener('DOMContentLoaded', fn);
  }
}
ready();
  