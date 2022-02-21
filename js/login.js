// show icon for password
function see(){
    var pass=document.getElementById("pass");
    if(pass.type==="password"){
        pass.type="text"
    }
    else{
        pass.type="password"
    }
}