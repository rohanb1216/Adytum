var room;   
$.ajax({
    url:"../cgi-bin/get_player_data.php",
    type:"GET",
    async:false,
    success:function(data){
        room=JSON.parse(data);
    }
});
room.PlayerRoom=currRoom;
console.log(room);
var puzzle="puzzle";


class roomclass {
    constructor() {
        this.code = "";
    }
    codeGenerate() {
        var str = '';
        var res = '';
        for (var j = 0; j < 2; j++) {
            var randByte = parseInt(Math.random() * 16, 10).toString(16);
            res += randByte;
        }
        str += res;
        str += "\n";
        this.code = str;
    }
}

// function assignPlayer(playerobj){
//     var username = document.getElementById("dropdownMenuButton");
//     playerobj.username = username.innerText;
//     // for(let i =0 ;i<)
//     // roomUnlockStatus = []

// }

function travel(currRoom, nextRoom) {
    if (room[currRoom] || room[nextRoom]) {
        room.PlayerRoom=nextRoom;
        $.ajax({
            url:"../cgi-bin/update_player_data.php",
            type:"GET",
            user_data :JSON.stringify(room),
            success:function(data){
                console.log(room);
                window.location.href = "../views/"+nextRoom+".html";
            }
        });
        
    }
}
function solved(currRoom) {
    //placeholder;  Replace with function to set value on server
    room[currRoom]=true;
    $.get("../cgi-bin/update_player_data.php",{"user_data": JSON.stringify(room)}).done(function(data){
        console.log(room);
    });
}

function hide(element) {
    var ele = document.getElementById(element);
    ele.classList.toggle("Active");
    ele.classList.toggle("Inactive");
}


room1 = new roomclass("cipher", false, "roomno");
room1.codeGenerate();
console.log(room1.code);



