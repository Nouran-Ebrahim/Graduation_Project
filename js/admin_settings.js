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

