map = document.getElementById("map");
var block_arr = [];
for(let i=0;i< map.childElementCount;i++){
    block_arr.push(map.children[i]);
}

currRoom = Number(room.PlayerRoom.replace('room',''));
console.log(currRoom);


room_arr = [room.room1 ,room.room2,room.room3,room.room4,room.room5,room.room6,room.room7,room.room8,room.room9];

for(let i =0;i< block_arr.length;i++){
    if(room_arr[i]==true){
        block_arr[i].classList.toggle("open-block");
    }
}
block_arr[currRoom-1].classList.remove("open-block");
block_arr[currRoom-1].classList.toggle("curr-block");