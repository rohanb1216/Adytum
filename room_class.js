class room{
    constructor(u,r,d,l){
        this.uRoom=u;
        this.rRoom=r;
        this.dRoom=d;
        this.lRoom=l;
        this.state=false;
    }
    doorNum(num){
        switch (num) {
            case 1: return this.uRoom;
            case 2: return this.rRoom;
            case 3: return this.dRoom;
            case 4: return this.lRoom;
            default:
                break;
        }
    }
}
function travel(currRoom, doorNum) {
    if(currRoom.state||currRoom.doorNum(doorNum).state){
        return currRoom.doorNum(doorNum);
    }
}
function solved(currRoom){
    currRoom.state=true;
}
room1 = new room("none","none","none","none");
room2 = new room(room1,"none","none","none");
room3 = new room(room1,room2,"none","none");
room4 = new room(room1,room2,room3,"none");
room5 = new room(room1,room2,room3,room4);
room1.uRoom = room5;
room1.rRoom = room4;
room1.dRoom = room3;
room1.lRoom = room2;
room2.rRoom = room5;
room2.dRoom = room4;
room2.lRoom = room3;
room3.dRoom = room5;
room3.lRoom = room4;
room4.lRoom = room5;
solved(room5);
solved(room4);
console.log(room5.rRoom.state);
console.log(room4.lRoom.state);
console.log(room3.lRoom.state);
