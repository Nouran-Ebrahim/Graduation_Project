const chngButton = document.getElementById("change");
const txts = document.getElementsByClassName("in");
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
