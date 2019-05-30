function check(a) {
    var showInfor = document.getElementById("showInfor");
    var showResult = document.getElementById("showResult");
    if(a == ""){
        showInfor.innerHTML = ("Không được để trống dữ liệu");
        showResult.innerHTML = ("");
        return false;
    }
    else if(isNaN(a)){
        showInfor.innerHTML = ("Cần nhập dữ liệu là số");
        showResult.innerHTML = ("");
        return false;
    }
    else
        return true;
}
function fnc() {
    var a = document.getElementById("inputA").value;
    var chan = "";
    var le = "";
    if(check(a) == true){
        for(var i=1 ; i<= parseInt(a) ; i++){
            if(i % 2 == 0){
                chan += i + ", ";
            }
            else{
                le += i + ", ";
            }
        }
        document.getElementById("showInfor").innerHTML = ("");
        document.getElementById("showResult").innerHTML = ("Các số chẵn từ 1-"+a+" là: "+chan+"<br/>Các số lẻ từ 1-"+a+" là: "+le);
    }
    return false;
}