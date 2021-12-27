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
    $("#Switches").click(function(){
      $(".main-pg").hide("slide",function(){
        $("#sw-btns").show("slide");
      });
    });
    $("#sw-btns .R").click(function(){
      $("#sw-btns").hide("slide",function(){
        $(".main-pg").show("slide");
      });
    });

    $("#Routers").click(function(){
      $(".main-pg").hide("slide",function(){
        $("#rt-btns").show("slide");
      });
      
    });
    $("#rt-btns .R").click(function(){
      $("#rt-btns").hide("slide",function(){
        $(".main-pg").show("slide");
      });
    });

})

