$(document).ready(function(){

  $("button").mouseover(function() {
    $(this).css("background-color", "#990000");
  });
  $("button").mouseout(function() {
    $(this).css("background-color", "#b36b00");
  });

  $(".projImg").mouseover(function() {
    $(this).css("opacity", ".5");
  });
  $(".projImg").mouseout(function() {
    $(this).css("opacity", "1");
  });

  $("i").mouseover(function() {
    $(this).css("color", "black");
    $(this).css("border-bottom", "1px black solid")
  });
  $("i").mouseout(function() {
    $(this).css("color", "#800000");
    $(this).css("border-bottom", "none")
  });

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 40) {
      $("nav").css("margin-top", "0");
      $("nav h1").css("top", "-22px");
    }
    if (scroll <= 40) {
      $("nav").css("margin-top", "33px");
      $("nav h1").css("top", "10px");
    }
  });

});
