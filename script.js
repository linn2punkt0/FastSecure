function isElementInViewport(el) {
  let rect = el.getBoundingClientRect();
  return (
    rect.right >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}



let items = document.querySelectorAll(".content li");

// code for the isElementInViewport function

function callbackFunc() {
  for (let i = 0; i < items.length; i++) {
    if (isElementInViewport(items[i])) {
      items[i].classList.add("in-view");
    }
  }
}

window.addEventListener("load", callbackFunc);
window.addEventListener("scroll", callbackFunc);
