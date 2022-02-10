$(document).ready(function(){
    $(".R").click(function(){
      $(".R").removeClass("active");
      $(this).addClass("active");
    });
    $(".btns").click(function(){
      $(".btns").removeClass("active");
      $(this).addClass("active");
    });

    $(".filters").on("keyup",function(){
      var text = $(this).val().toLowerCase();
      $(".btns-container button").each(function(){
        if($(this).text().toLowerCase().search(text) > -1){
          $(this).show();
        } else{
          $(this).hide();
        }
      });
    });

    const canvToNav = ()=>{
      if($(window).width() < 768){
        if($("#navigation").hasClass("navbar")){
          $("#navigation").toggleClass("navbar navbar-nav navbar-light Radius offcanvas offcanvas-start")
        }
      }
      else{
        if($("#navigation").hasClass("offcanvas")){
          $("#navigation")
          .toggleClass("navbar navbar-nav navbar-light Radius offcanvas offcanvas-start")
          .removeAttr('style');
        }
      }
    }

    canvToNav();

    $(window).resize(canvToNav)
})

