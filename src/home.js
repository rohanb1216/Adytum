var room;
$.ajax({
    url:"../cgi-bin/get_player_data.php",
    type:"GET",
    async:false,
    success:function(data){
        room=JSON.parse(data);
    }
});
function play(){
    window.location.href="../views/"+room.PlayerRoom+".html";
}

function redirect(){
    var l = document.getElementById("login-logout-button");
    if(l.value == " Login "){
        window.location.href="../cgi-bin/login.php";
    }
    else{
        play();
    }
}

var x = document.getElementById("get-started");
x.addEventListener("click",redirect);