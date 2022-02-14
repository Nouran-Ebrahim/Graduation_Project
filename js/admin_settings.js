const chngButton = document.getElementById("change-bt");
const txts = document.getElementsByClassName("in3");
var counter = true;

txts.forEach((txt)=>{
    if(txt.value === ""){
        counter = false;
    }
})

    chngButton.addEventListener("click",() =>{
        if(counter === true){
        alert("Data Changed Successfully");
        console.log('change')
        }
    })

console.log("loo")