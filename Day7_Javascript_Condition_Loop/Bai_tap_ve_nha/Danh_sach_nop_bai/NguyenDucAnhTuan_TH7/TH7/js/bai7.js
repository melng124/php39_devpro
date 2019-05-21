function fnc() {
    var a = parseInt(document.getElementById("inputA").value);
    var b = parseInt(document.getElementById("inputB").value);
    var c = parseInt(document.getElementById("inputC").value);
    var MAX=a;
    var MIN=a;
    if(b>MAX){
        MAX=b;
    }
    if(c>MAX){
        MAX=c;
    }
    if(b<MIN){
        MIN=b;
    }
    if(c<MIN){
        MIN=c;
    }
    showResult.innerHTML=("Số lớn nhất: <b>"+MAX+"</b><br/>Số nhỏ nhẩt: <b>"+MIN+"</b>");
    return false;
}