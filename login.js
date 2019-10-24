function login(){
    //placeholder for actual login
    //pass values to server, go to the room, login token should be passed to keep login
    var login=true;//true if login successful
    var uname = document.getElementById("username").value;
    var pass =  document.getElementById("password").value;
    if(login){
        window.location.href="room.html";
    }
} 