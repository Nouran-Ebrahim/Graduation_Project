
$(".R").click(function () {
  $(".R").removeClass("active");
  $(this).addClass("active");
  let deviceName= $(this).text();
  if ($(this).attr('name')==="router"){
    $("#router").text("Router ID : "+deviceName);
  }
  else{
    $("#switch").text("Switch ID : "+deviceName);
  }
});
$(".btns").click(function () {
  $(".btns").removeClass("active");
  $(this).addClass("active");
});




$(".filters").on("keyup", function () {
  let text = $(this).val().toLowerCase();
  $(".btns-container button").each(function () {
    if ($(this).text().toLowerCase().search(text) > -1) {
      $(this).show();
    } else {
      $(this).hide();
    }
  });
});
$(".viewButton").click(function(){
  
const txts = document.getElementsByClassName("txts");
var counter = true;
    for (const txt of txts) {
        if(txt.value === ""){
            counter = false;
        }
    }
    if(counter === true){
      console.log("false")
      $(".mainInfo").css("display","flex");
    }
   
})
$(".close-bt").click(function(){
  $(".mainInfo").css("display","none");
})





const canvToNav = () => {
  if ($(window).width() < 768) {
    if ($("#navigation").hasClass("navbar")) {
      $("#navigation").toggleClass("navbar navbar-nav navbar-light Radius offcanvas offcanvas-start")
    }
  }
  else {
    if ($("#navigation").hasClass("offcanvas")) {
      $("#navigation")
        .toggleClass("navbar navbar-nav navbar-light Radius offcanvas offcanvas-start")
        .removeAttr('style');
    }
  }
}

canvToNav();

$(window).resize(canvToNav)

// select the router page 



