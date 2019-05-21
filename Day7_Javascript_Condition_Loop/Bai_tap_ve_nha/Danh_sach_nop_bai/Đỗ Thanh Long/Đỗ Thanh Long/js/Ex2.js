function checking() {
    var number=document.getElementById("input").value;
    var a=parseInt(number);
    var text=document.getElementById("result");
    if (number=="") {
        text.innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else if (isNaN(a)==true){
        text.innerHTML="Cần nhập vào 1 số";
        return false;
    }
    else if ((a>=1&&a<=10)||(a>=50&&a<=100)){
        text.innerHTML="a nằm trong 1 trong 2 khoảng";
        return false;
    }
    else {
        text.innerHTML="a không nằm trong 1 trong 2 khoảng"
    }
}