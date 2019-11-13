var puzzle="puzzle";
class roomclass {
    constructor(puzzleType, special,page) {
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
function travel(currRoom, nextRoom) {
    if (room[currRoom] || room[nextRoom]) {
        window.location.href = "../views/"+currRoom+".html";
    }
}
function solved(currRoom) {
    //placeholder;  Replace with function to set value on server
    room[currRoom]=true;
}

function hide(element) {
    var ele = document.getElementById(element);
    ele.classList.toggle("Active");
    ele.classList.toggle("Inactive");
}

// window.onload=function(){
//     var hidebtn = document.getElementById("hide");
//     hidebtn.addEventListener("click",function(){
//         hide("navbar");
//         if(hidebtn.innerHTML=="v"){
//             hidebtn.innerHTML="^";
//         }
//         else{
//             hidebtn.innerHTML="v";
//         }
//     },false);
// };
room1 = new roomclass("cipher", false, "roomno");
room1.codeGenerate();
console.log(room1.code);