function check(a) {
    var showInfor = document.getElementById("showInfor");
    var showResult = document.getElementById("showResult");
    if(a == ""){
        showInfor.innerHTML=("Không được để trống dữ liệu");
        showResult.innerHTML=("");
        return false;
    }
    else if(isNaN(a)){
        showInfor.innerHTML=("Cần nhập dữ liệu là số");
        showResult.innerHTML=("");
        return false;
    }
    showInfor.innerHTML=("");
    return true;
}
function fnc() {
    var a = document.getElementById("inputA").value;
    if(check(a)== true){
        var cv = parseInt(a)*4;
        var dt = parseInt(a)*parseInt(a);
        document.getElementById("showInfor").innerHTML=("");
        document.getElementById("showResult").innerHTML=("Chu vi = "+cv+"m<br/>Diện tích = "+dt+"m<sup>2</sup>");
    }
    return false;
}