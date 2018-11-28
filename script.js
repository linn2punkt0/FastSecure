function isElementInViewport(el) {
  let rect = el.getBoundingClientRect();
  return (
    rect.right >= 0 &&
    rect.left >= 0 &&
    rect.bottom <=
      (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

let items = document.querySelectorAll(".content li");

// code for the isElementInViewport function

function callbackFunc() {
  for (let i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    } else {
      items[i].classList.remove("in-view");
    }
  }
}

window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);

let menuIsOpen = false;

// Burger-animation
$(document).ready(function() {
  $("#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4").click(function() {
    $(this).toggleClass("open");
    console.log("click");
    $(".menu-selector").toggleClass("display");
    menuIsOpen = !menuIsOpen;
  });
});

// Navbar visible when scrolling up
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  if (menuIsOpen) {
    document.querySelector(".navbar").style.top = "0";
  } else {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.querySelector(".navbar").style.top = "0";
    } else {
      document.querySelector(".navbar").style.top = "-56px";
    }
    prevScrollpos = currentScrollPos;
  }
};
