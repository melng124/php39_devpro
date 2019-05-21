function KiemTra() {
    var a = document.getElementById("a").value;
    if(a=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(0<=a<=10)
        {
            document.getElementById("kq").innerHTML=a+" trong khoảng từ 0 đến 10";
        }else if(10<a<=50)
        {
            document.getElementById("kq").innerHTML=a+" trong khoảng từ 10 đến 50";
        }else if(50<a<=100){
            document.getElementById("kq").innerHTML=a+" trong khoảng từ 50 đến 100";
        }else {
            document.getElementById("kq").innerHTML=a+" ngoài khoảng 100";
        }
    }
    if(isNaN(a)){
        document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";
    }
    return false;
}