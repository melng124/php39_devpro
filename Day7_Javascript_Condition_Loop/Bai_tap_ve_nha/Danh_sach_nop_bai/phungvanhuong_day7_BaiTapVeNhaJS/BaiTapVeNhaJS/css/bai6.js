function KiemTra() {
    var str1 = document.getElementById("str1").value;
    var str2 = document.getElementById("str2").value;
    for(i=0;i<str2.length;i++)
    {
        document.getElementById("show-result").innerHTML= str1.indexOf(i);

    }

    return false;
}