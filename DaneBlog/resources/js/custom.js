
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-40px";
  }
  prevScrollpos = currentScrollPos;
}

window.onbeforeunload = function () {
  window.scrollTo(0, 0);
}


