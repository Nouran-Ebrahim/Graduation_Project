
$(".R").click(function () {
  $(".R").removeClass("active");
  $(this).addClass("active");
  let deviceName = $(this).text();
  if ($(this).attr('name') === "router") {
    $("#router").text("Router ID : " + deviceName);
    $(".nameDevice").text(deviceName + " information");

  }
  else {
    $("#switch").text("Switch ID : " + deviceName);
    $(".nameDevice").text(deviceName + " information");
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

//
$(".viewButton").click((event) => {
  if (event.target.id === "view-rt") {
    console.log('true');
    var txts = document.getElementsByClassName("txtRouter");
  } else {
    console.log('false');
    var txts = document.getElementsByClassName("txtSwitch");
  }
  var counter = true;
  for (const txt of txts) {
    if (txt.value === "") {
      counter = false;
    }
  }
  if (counter === true) {
    // showing information //
    var data = document.getElementsByClassName("data-value");
    for (let i = 0; i < data.length; i++) {
      data[i].textContent = txts[i].value;
      console.log(data[i]);
    }
    $(".mainInfo").css("display", "flex");
  } else {
    alert("Please Fill all inputs")
  }

})
$(".close-bt").click(function () {
  $(".mainInfo").css("display", "none");
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


