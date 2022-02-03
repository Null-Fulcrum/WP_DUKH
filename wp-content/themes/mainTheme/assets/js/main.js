//let prevScrollpos = window.pageYOffset;
//window.onscroll = function() {
//  let currentScrollPos = window.pageYOffset;
//  if (prevScrollpos > currentScrollPos) {
//    setTimeout(() => {
//        document.getElementById("dukh__header").style.top = "0";
//}, 1000);
//  } else {
//    setTimeout(() => {
//        document.getElementById("dukh__header").style.top = "-110px";
//    }, 1000);
//  }
//  prevScrollpos = currentScrollPos;
//  document.getElementById("dukh__header").style.position = "fixed";
//}

$(document).ready(function() {
  $('.header__button-menu').click(function(event) {
      $('.header__button-menu, .header__menu').toggleClass('active');
      $('body').toggleClass('lock');
  });
});
