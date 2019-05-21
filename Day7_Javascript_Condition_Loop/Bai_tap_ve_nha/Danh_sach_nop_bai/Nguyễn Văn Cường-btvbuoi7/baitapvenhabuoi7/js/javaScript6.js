function test() {
    var a=document.getElementById("string1").value;
    var a=a.toString();
    console.log(typeof (a));
    var b=document.getElementById("string2").value;
    var b=b.toString();
    var stringa=a.bold();
    var stringb=b.bold();
    var ketQua=document.getElementById("ketqua");
    if(a.indexOf(b)==-1){
        ketQua.innerHTML="chuỗi "+stringb+" không tồn tại trong chuỗi "+stringa;
    }else {
        ketQua.innerHTML="chuỗi "+stringb+" tồn tại trong chuỗi "+stringa;
    }
}