let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () => {
    menu.classList.remove('fa-times')
    navbar.classList.remove('active')

};

var swiper = new Swiper(".home-slider", {
  loop:true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});



var swiper = new Swiper(".reviews-slider", {
  slidesPerView: 3,
  spaceBetween:30,
  slidesPerGroup:3,
  loop:true,
  loopFillGroupWithBlank: true,
  pagination: {
    el:".swiper-pagination",
    clickable:true,
  },
  navigation: {
    nextEl:".swiper-button-next",
    prevEl:".swiper-button-prev",
  },
});
  


