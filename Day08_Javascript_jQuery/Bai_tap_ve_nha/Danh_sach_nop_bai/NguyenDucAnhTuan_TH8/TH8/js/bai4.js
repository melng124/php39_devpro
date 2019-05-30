function check(d, r) {
    var showInfor = document.getElementById("showInfor");
    var showResult = document.getElementById("showResult");
    if(d == ""||r == ""){
        showInfor.innerHTML=("Không được để trống dữ liệu");
        showResult.innerHTML=("");
        return false;
    }
    else if(isNaN(d)||isNaN(r)){
        showInfor.innerHTML=("Cần nhập dữ liệu là số");
        showResult.innerHTML=("");
        return false;
    }
    showInfor.innerHTML=("");
    return true;
}
function fnc() {
    var d = document.getElementById("inputA").value;
    var r = document.getElementById("inputB").value;
    if(check(d, r)== true){
        var cv = (parseInt(d)+parseInt(r))*2;
        var dt = parseInt(d)*parseInt(r);
        document.getElementById("showInfor").innerHTML=("");
        document.getElementById("showResult").innerHTML=("Chu vi = "+cv+"m<br/>Diện tích = "+dt+"m<sup>2</sup>");
    }
    return false;
}