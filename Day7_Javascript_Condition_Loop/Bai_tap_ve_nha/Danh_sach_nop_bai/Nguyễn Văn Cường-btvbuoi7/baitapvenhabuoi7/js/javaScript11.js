function test1() {
    var a=document.getElementById("number1").value;
    var n=parseInt(a);
    a=a.bold();
    // alert(typeof a);
    var ketQua=document.getElementById("ketqua");
    var ketQua1=document.getElementById("ketqua1");
    var so1="";
    var sum=1;
    for (var i=1;i<n+1;i++){
        sum*=i;
        so1+=+i+"+";
    }
    document.getElementById("so").innerHTML=so1;
    ketQua.innerHTML=a+"! ";
    ketQua1.innerHTML=" = " +sum;
}