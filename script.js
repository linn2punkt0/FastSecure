//Fade in function
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

// Function for isElementInViewport
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


//Move the pil to the right on mouseover:
  const readMoreButton = document.querySelectorAll('.read-more-button')
  const pil = document.querySelectorAll('.pil')

  readMoreButton.forEach((button) => {
    button.addEventListener('mouseover', () => {
    pil.forEach((p) => {
        p.classList.add('active');
      });
    });
  });

readMoreButton.forEach((button) => {
  button.addEventListener('mouseout', () => {
  pil.forEach((p) => {
      p.classList.remove('active');
      });
    });
});

//Move the arrow up on mouseover:
const arrowUp = document.querySelector('.to-top')
const arrow = document.querySelector('.arrow')

arrowUp.addEventListener('mouseover', () => {
  arrow.classList.add('move');
});


//Move arrow down (newsletter-button) + change arrow color to black:
const arrowDownBlack = document.querySelector('.newsletter-button')
const down = document.querySelector('.pil-ner')
const newsImg = document.querySelector('.newsletter-button img')

arrowDownBlack.addEventListener('mouseover', () => {
  newsImg.setAttribute("src", "iconer/pil-ner-svart.svg");
});

arrowDownBlack.addEventListener('mouseout', () => {
  newsImg.setAttribute("src", "iconer/pil-ner.svg");
});

//Move arrow right(sign-up) + change arrow color to black:
const arrowRightBlack = document.querySelector('.sign-up')
const right = document.querySelector('.pil-hoger-bottom')
const arrowSvg = document.querySelector('.sign-up img.pil-hoger-bottom');

arrowRightBlack.addEventListener('mouseover', () => {
  arrowSvg.setAttribute("src", "iconer/pil-hoger-bottom-svart.svg");
});

arrowRightBlack.addEventListener('mouseout', () => {
  arrowSvg.setAttribute("src", "iconer/pil-hoger-bottom.svg");
});
