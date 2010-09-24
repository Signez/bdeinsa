$(document).ready(function(){
  $("footer nav > ul > li > a").click(function(event){
    if($(this).next("ul").is(":visible")){
      $(this).next("ul").slideUp();
    } else {
      $(this).parent().parent().find("ul").slideUp();
      $(this).next("ul").slideDown();
      event.preventDefault();
    }
  });
  $("header nav > ul > li > a").hover(function(){
    $(this).parent().parent().find("ul").not(".social ul").hide();
    $("nav .current").removeClass("current");
    $(this).addClass("current");
    $(this).next("ul").fadeIn();
  }, function(){ });
});