
const hostName = document.getElementsByClassName('r-hostname')[0];
const enablePass = document.getElementsByClassName('r-enable')[0];
const message = document.getElementsByClassName('r-massage')[0];
const consolePass = document.getElementsByClassName('r-console')[0];
const telnetPass = document.getElementsByClassName('r-telnet')[0];
const loopInter = document.getElementsByClassName('r-loopback')[0];
const mask = document.getElementsByClassName('r-mask')[0];
const ip = document.getElementsByClassName('r-ip')[0];

hostName.value = allData[0].Hostname;
enablePass.value = allData[0].Enable_pass;
message.value = allData[0].Welcom_mess;
consolePass.value = allData[0].Console_pass;
telnetPass.value = allData[0].Telnet_pass;
loopInter.value = allData[0].Interface_loopback;
mask.value = allData[0].Mask;
ip.value = allData[0].Ip;


function getData(){
  const hostName = document.getElementsByClassName('r-hostname')[0];
    const enablePass = document.getElementsByClassName('r-enable')[0];
    const message = document.getElementsByClassName('r-massage')[0];
    const consolePass = document.getElementsByClassName('r-console')[0];
    const telnetPass = document.getElementsByClassName('r-telnet')[0];
    const loopInter = document.getElementsByClassName('r-loopback')[0];
    const mask = document.getElementsByClassName('r-mask')[0];
    const ip = document.getElementsByClassName('r-ip')[0];

    hostName.value = allData[thiss - 1].Hostname;
    enablePass.value = allData[thiss - 1].Enable_pass;
    message.value = allData[thiss - 1].Welcom_mess;
    consolePass.value = allData[thiss - 1].Console_pass;
    telnetPass.value = allData[thiss - 1].Telnet_pass;
    loopInter.value = allData[thiss - 1].Interface_loopback;
    mask.value = allData[thiss - 1].Mask;
    ip.value = allData[thiss - 1].Ip;
}


$(".R").click(function (e) {
  $(".R").removeClass("active");
  $(this).addClass("active");
  const deviceName = $(this).text();
  if ($(this).attr('name') === "router") {

    const thiss = $(this).attr('id')[1];

    $('#hiddr').val(thiss);


    const hostName = document.getElementsByClassName('r-hostname')[0];
    const enablePass = document.getElementsByClassName('r-enable')[0];
    const message = document.getElementsByClassName('r-massage')[0];
    const consolePass = document.getElementsByClassName('r-console')[0];
    const telnetPass = document.getElementsByClassName('r-telnet')[0];
    const loopInter = document.getElementsByClassName('r-loopback')[0];
    const mask = document.getElementsByClassName('r-mask')[0];
    const ip = document.getElementsByClassName('r-ip')[0];

    hostName.value = allData[thiss - 1].Hostname;
    enablePass.value = allData[thiss - 1].Enable_pass;
    message.value = allData[thiss - 1].Welcom_mess;
    consolePass.value = allData[thiss - 1].Console_pass;
    telnetPass.value = allData[thiss - 1].Telnet_pass;
    loopInter.value = allData[thiss - 1].Interface_loopback;
    mask.value = allData[thiss - 1].Mask;
    ip.value = allData[thiss - 1].Ip;


    $("#router").text(deviceName+" Building" );

    $(".nameDevice").text(deviceName + " information");

    $("#adds").css("display", "none");

    console.log(thiss);

    $('#run_button').attr('name', 'router');
  }
  else {
    $("#switch").text(deviceName+" Floor" );

    $(".nameDevice").text(deviceName + " information");

    $("#addr").css("display", "none");

    let thiss = $(this).attr('id');
    thiss = thiss.slice(1, thiss.length);

    $('#hiddsw').val();

    const hostName = document.getElementsByClassName('sw-hostname')[0];
    const enablePass = document.getElementsByClassName('sw-en')[0];
    const message = document.getElementsByClassName('sw-welcom')[0];
    const consolePass = document.getElementsByClassName('sw-cons')[0];
    const telnetPass = document.getElementsByClassName('sw-tel')[0];
    const loopVlan = document.getElementsByClassName('sw-vlan')[0];
    const mask = document.getElementsByClassName('sw-mask')[0];
    const ip = document.getElementsByClassName('sw-ip')[0];

    hostName.value = allData_sw[thiss - 1].Hostname;
    enablePass.value = allData_sw[thiss - 1].Enable_pass;
    message.value = allData_sw[thiss - 1].Welcom_mess;
    consolePass.value = allData_sw[thiss - 1].Console_pass;
    telnetPass.value = allData_sw[thiss - 1].Telnet_pass;
    loopVlan.value = allData_sw[thiss - 1].Interface_vlan;
    mask.value = allData_sw[thiss - 1].Mask;
    ip.value = allData_sw[thiss - 1].Ip;

    console.log($('#hiddsw').val());

    $('#run_button').attr('name', 'switch');
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
  if (e.target.name === "router") {
    const frm = document.getElementById('r_frm');
    frm.submit();
  } else {
    const frm = document.getElementById('sw_frm');
    frm.submit();
  }
})

// select the router page 

