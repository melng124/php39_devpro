function KiemTraSoa() {
    var a = document.getElementById("a").value;
    if(a=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu nhập vào không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(0<=a && a<=10)
        {
            document.getElementById("show-result").innerHTML=a+" trong khoảng từ 0 đến 10";
        }else if(10<a && a<=50)
        {
            document.getElementById("show-result").innerHTML=a+" trong khoảng từ 10 đến 50";
        }else if(50<a && a<=100){
            document.getElementById("show-result").innerHTML=a+" trong khoảng từ 50 đến 100";
        }else {
            document.getElementById("show-result").innerHTML=a+" ngoài khoảng 100";
        }
    }
    if(isNaN(a)){
        document.getElementById("error").innerHTML = "Gía trị nhập vào không phù  hợp";
    }
    return false;
}