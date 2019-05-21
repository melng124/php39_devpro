function GiaiThua() {
    var  a = document.getElementById("a").value;
    var s=1;
    for(i=1;i<=a;i++){
        s=s*i;
        document.getElementById("kq").innerHTML=s;
    }
    return false;
}