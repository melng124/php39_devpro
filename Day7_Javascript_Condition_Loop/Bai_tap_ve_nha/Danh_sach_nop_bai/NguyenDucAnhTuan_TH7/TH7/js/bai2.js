function fnc() {
    var a = parseInt(document.getElementById("inputA").value);
    if((a>=1&&a<=10)||(a>=20&&a<=100)){
        document.getElementById("showResult").innerHTML=a + "&nbsp nằm trong khoảng 20 - 100 hoặc 1 -10";
    }
    else
        document.getElementById("showResult").innerHTML=a+"&nbsp không nằm trong khoảng 20 - 100 hoặc 1 -10";
    return false;
}