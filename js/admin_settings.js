const chngButton = document.getElementById("change-bt");
const txts = document.getElementsByClassName("in3");
var counter = true;



chngButton.addEventListener("click",() =>{
    for (const txt of txts) {
        if(txt.value === ""){
            counter = false;
        }
    }
    //if(counter === true){
      //  alert("Data Changed Successfully");
    //}
   
})
function see(){
    var pass=document.getElementById("pass");
    if(pass.type==="password"){
        pass.type="text"
    }
    else{
        pass.type="password"
    }
}
function see1(){
    var npass=document.getElementById("npass");
    if(npass.type==="password"){
        npass.type="text"
    }
    else{
        npass.type="password"
    }
}

