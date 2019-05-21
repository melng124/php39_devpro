function solution() {
    var number1=document.getElementById("input-a").value;
    var a=parseInt(number1);
    var number2= document.getElementById("input-b").value;
    var b=parseInt(number2);
    var warning=document.getElementById("output-equation");
    var result=document.getElementById("output-x");
    if(number1==""||number2==""||isNaN(a)==true||isNaN(b)==true){
        warning.innerHTML="Các hệ số nhập vào không hợp lệ";
    }
    else {
        warning.innerHTML=+a+"x + " +b +" = 0"
        result.innerHTML="x = " +(-b/a);
    }
}