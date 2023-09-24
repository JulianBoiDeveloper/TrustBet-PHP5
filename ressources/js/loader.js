window.onload = function(){
  document.querySelector(".preloader").style.display = "none";
  document.getElementById("page-pronostics").style.display = "block";
  document.getElementById("page-statistics").style.display = "none";
  document.getElementById("page-poster").style.display = "none";
}

window.onscroll = function () {
  if(document.documentElement.scrollTop > 10){
    document.getElementById("navbar").style.position = "fixed";
    document.getElementById("navbar").style.width = "100%";
    document.getElementById("navbar").style.zIndex = "100";
    document.getElementById("navbar").style.top = "0px";
  }else{
      document.getElementById("navbar").style.position = "static";
      document.getElementById("navbar").style.width = "";
      document.getElementById("navbar").style.zIndex = "";
      document.getElementById("navbar").style.top = "";
  }
}
function showMenu(nameMenu,id) {
  var menu = document.getElementById(nameMenu);
  document.getElementById("page-pronostics").style.display = "none";
  document.getElementById("page-statistics").style.display = "none";
  document.getElementById("page-poster").style.display = "none";
  if(nameMenu == "page-pronostics"){
      menu.style.display = "block";
  }
  if(nameMenu == "page-statistics"){
     menu.style.display = "block";
  }
  if(nameMenu == "page-poster"){
    menu.style.display = "block";
  }
  var menu_general = document.getElementsByClassName("menu_active");
  if(id == '1'){
    menu_general[0].classList.add('active-menu');
    menu_general[1].classList.remove('active-menu');
    menu_general[2].classList.remove('active-menu');
  }
  if(id == '2'){
    menu_general[0].classList.remove('active-menu');
    menu_general[1].classList.add('active-menu');
    menu_general[2].classList.remove('active-menu');
  }
  if(id == '3'){
    menu_general[0].classList.remove('active-menu');
    menu_general[1].classList.remove('active-menu');
    menu_general[2].classList.add('active-menu');
  }
}
// Menu up down
$(document).ready(function() {
  $(".set > button.accordion-stats").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > button.accordion-stats i")
        .removeClass("fa-sort-up")
        .addClass("fa-sort-down");
    } else {
      $(".set > button.accordion-stats i")
        .removeClass("fa-sort-up")
        .addClass("fa-sort-down");
      $(this)
        .find("i")
        .removeClass("fa-sort-down")
        .addClass("fa-sort-up");
      $(".set > button.accordion-stats").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });
});
// Menu up down prono
$(document).ready(function() {
  $(".set > button.accordion-prono").on("click", function() {
    if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this)
        .siblings(".content")
        .slideUp(200);
      $(".set > button.accordion-prono i")
      .removeClass("fa-minus")
      .addClass("fa-plus");
    } else {
      $(".set > button.accordion-prono i")
        .removeClass("fa-minus")
        .addClass("fa-plus");
      $(this)
        .find("i")
        .removeClass("fa-plus")
        .addClass("fa-minus");
      $(".set > button.accordion-prono").removeClass("active");
      $(this).addClass("active");
      $(".content").slideUp(200);
      $(this)
        .siblings(".content")
        .slideDown(200);
    }
  });
});
