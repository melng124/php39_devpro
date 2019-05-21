function checkmaxmin() {
    var number1=document.getElementById("input-1").value;
    var a=parseInt(number1);
    var number2=document.getElementById("input-2").value;
    var b=parseInt(number2);
    var number3=document.getElementById("input-3").value;
    var c=parseInt(number3);
    var max=a;
    var min=a;
    var text=document.getElementById("result")
    if (number1==""||number2==""||number3==""||isNaN(a)==true||isNaN(b)==true||isNaN(c)==true){
        text.innerHTML="Tham số nhập vào không đúng";
        return false;
    }
    else {
        if (b>max) max=b;
        if (c>max) max=c;
        if (b<min) min=b;
        if (c<min) min=c;
        text.innerHTML="<span style='font-weight: normal'>Số lớn nhất: </span>" +max +"<br>"+"<span style='font-weight: normal'>Số nhỏ nhất: </span>"+min;
    }
}