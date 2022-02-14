const chngButton = document.getElementById("change-bt");
const txts = document.getElementsByClassName("in3");
var counter = true;

txts.forEach((txt)=>{
    if(txt.value === ""){
        counter = false;
    }
})
if(counter === true){
    chngButton.addEventListener("click",() =>{
        alert("Data Changed Successfully");
    })
}
