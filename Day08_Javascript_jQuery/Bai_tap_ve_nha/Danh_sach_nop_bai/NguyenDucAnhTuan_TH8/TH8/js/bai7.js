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
function kt(n) {
    if(n < 2){
        return 0;
    }
    for(var i = 2 ; i <= Math.sqrt(n) ; i++){
        if(n % i == 0)
            return 0;
    }
    return 1;
}
function fnc() {
    var a = document.getElementById("inputA").value;
    var nt = "";
    if(check(a) == true){
        for (var i = 1 ; i < parseInt(a) ; i++){
            if(kt(i) == 1){
                nt += i + ", ";
            }
        }
        document.getElementById("showInfor").innerHTML = ("");
        document.getElementById("showResult").innerHTML = ("Các số nguyên tố từ 1-"+a+" là: "+nt);
    }
    return false;
}