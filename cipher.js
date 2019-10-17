function cipher(text){
    var len = text.length;
    for(var i = 0; i<len;i++){
        text.replace(text.charAt(i)+3); 
    }
}

function caesarCipher(str, key){
    return str.toUpperCase().replace(/[A-Z]/g, c => String.fromCharCode((c.charCodeAt(0)-65 + key ) % 26 + 65));
  }

function showText(text){
    document.getElementById("cipherText").innerHTML=text;
}