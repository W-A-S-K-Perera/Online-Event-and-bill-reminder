

var state= false;
function toggle()
{
    if(state){
        document.getElementById("password").setAttribute("type","password");
        document.getElementById("eye").style.color='#7a797e'
        state=false;
    }
    else{
        document.getElementById("password").setAttribute("type","text");
        state=true;
    }
}