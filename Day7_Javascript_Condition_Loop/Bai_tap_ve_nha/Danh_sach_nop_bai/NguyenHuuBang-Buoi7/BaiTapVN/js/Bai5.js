function KiemTra() {
    var a = document.getElementById("a").value;
    var dem =0;
    for(i=2;i<a-1;i++){
        if(a%i==0)
        {
            dem++;
        }
    }
    if(dem==0){
        document.getElementById("kq").innerHTML=a +" là số nguyên tố";
    }else {
        document.getElementById("kq").innerHTML=a+" Không phải số nguyên tố";
    }
    return false;
}