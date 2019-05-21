function test() {
    var a=document.getElementById("number1").value;
    var soa= parseInt(a);
    var ketQua=document.getElementById("ketqua");
    if(Number.isNaN(a)){
        var baoloi=document.getElementById("thongBao");
        baoloi.innerHTML="Bạn phải nhập số";

    }else {
        var count = 0;
        for(var i = 2; i <= Math.sqrt(soa); i++){
            if(a % i == 0){
                count++;
            }
        }
        if(count==0){
            ketQua.innerHTML="số "+a+" là số nguyên tố";
            var baoloi=document.getElementById("thongBao");
            baoloi.innerHTML="";
        }else {
            ketQua.innerHTML="số "+a+" không phải là số nguyên tố";
            var baoloi=document.getElementById("thongBao");
            baoloi.innerHTML="";
        }

    }
}