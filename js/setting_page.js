
$(".R").click(function (e) {
  $(".R").removeClass("active");
  $(this).addClass("active");
  const deviceName = $(this).text();
  if ($(this).attr('name') === "router") {
    $("#router").text("Router ID : " + deviceName);

    $(".nameDevice").text(deviceName + " information");

    $("#adds").css("display", "none");

    const thiss = $(this).attr('id')[1];

    $('#hiddr').val(thiss);

    console.log(thiss);

    $('#run_button').attr('name','router');
     document.getElementById('hid_subr').submit();
  }
  else {
    $("#switch").text("Switch ID : " + deviceName);

    $(".nameDevice").text(deviceName + " information");

    $("#addr").css("display", "none");

    const thiss = $(this).attr('id');

    $('#hiddsw').val(thiss.slice(1, thiss.length));

    console.log($('#hiddsw').val());

    $('#run_button').attr('name','switch');
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
    var txts = document.getElementsByClassName("txtRouter");
    $(".sw").css("display", "none");
    $(".rout").css("display", "block");

  } else {
    var txts = document.getElementsByClassName("txtSwitch");
    $(".sw").css("display", "block");
    $(".rout").css("display", "none");
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
      // console.log(data[i]);
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

const runButton = document.getElementById('run_button');

runButton.addEventListener('click', function (e) {
  if(e.target.name === "router"){
    const frm = document.getElementById('r_frm');
    frm.submit();
  } else{
    const frm = document.getElementById('sw_frm');
    frm.submit();
  }
})


