// functions
// アコーディオン
// slideUp
const slideUp = (el, duration = 300) => {
    el.style.height = el.offsetHeight + "px";
    el.offsetHeight;
    el.style.transitionProperty = "height, margin, padding";
    el.style.transitionDuration = duration + "ms";
    el.style.transitionTimingFunction = "ease";
    el.style.overflow = "hidden";
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    setTimeout(() => {
      el.style.display = "none";
      el.style.removeProperty("height");
      el.style.removeProperty("padding-top");
      el.style.removeProperty("padding-bottom");
      el.style.removeProperty("margin-top");
      el.style.removeProperty("margin-bottom");
      el.style.removeProperty("overflow");
      el.style.removeProperty("transition-duration");
      el.style.removeProperty("transition-property");
      el.style.removeProperty("transition-timing-function");
    }, duration);
};  

// slideDown
const slideDown = (el, duration = 300) => {
    el.style.removeProperty("display");
    let display = window.getComputedStyle(el).display;
    if (display === "none") {
      display = "block";
    }
    el.style.display = display;
    let height = el.offsetHeight;
    el.style.overflow = "hidden";
    el.style.height = 0;
    el.style.paddingTop = 0;
    el.style.paddingBottom = 0;
    el.style.marginTop = 0;
    el.style.marginBottom = 0;
    el.offsetHeight;
    el.style.transitionProperty = "height, margin, padding";
    el.style.transitionDuration = duration + "ms";
    el.style.transitionTimingFunction = "ease";
    el.style.height = height + "px";
    el.style.removeProperty("padding-top");
    el.style.removeProperty("padding-bottom");
    el.style.removeProperty("margin-top");
    el.style.removeProperty("margin-bottom");
    setTimeout(() => {
      el.style.removeProperty("height");
      el.style.removeProperty("overflow");
      el.style.removeProperty("transition-duration");
      el.style.removeProperty("transition-property");
      el.style.removeProperty("transition-timing-function");
    }, duration);
}; 

// slideToggle
const slideToggle = (el, duration = 300) => {
    if (window.getComputedStyle(el).display === "none") {
      return slideDown(el, duration);
    } else {
      return slideUp(el, duration);
    }
};
// アコーディオン(終了)

const header = document.querySelector('.header');
window.addEventListener('scroll', function(){
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    header.classList.add('active');
  } else {
    header.classList.remove('active');
  }
});
// header

const headerNavlnk = document.querySelectorAll('.pc-header-nav-link');
for (let i = 0; i < headerNavlnk.length; i++) {
  headerNavlnk[i].addEventListener("click", linkSwitch);
}

function linkSwitch() {
  document.querySelectorAll(".link-active")[0].classList.remove('link-active');
  this.classList.add('link-active');
}


const humbtn = document.querySelector('.hum-btn');
const humlist = document.querySelector('.hum-list');
humbtn.addEventListener('click', () => {
  slideToggle(humlist, 300);  
  humbtn.classList.toggle('active');
});

humlist.addEventListener('click', () => {
  slideToggle(humlist, 300);  
  humbtn.classList.toggle('active');
});
// バーガーメニュー