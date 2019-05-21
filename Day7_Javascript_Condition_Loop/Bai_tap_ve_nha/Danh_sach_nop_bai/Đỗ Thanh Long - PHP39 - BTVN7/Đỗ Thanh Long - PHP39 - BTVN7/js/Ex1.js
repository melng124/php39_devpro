function checking() {
    var showwarning=document.getElementById("warning");

    var number1=document.getElementById("input-a").value;
    var numbera=parseInt(number1);
    var number2=document.getElementById("input-b").value;
    var numberb=parseInt(number2);
    if (number1==""){
        showwarning.innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else if(number2==""){
        showwarning.innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else if (isNaN(numbera)==true){
        showwarning.innerHTML="Cần nhập dữ liệu là số";
        return false;
    }
    else if (isNaN(numberb)==true){
        showwarning.innerHTML="Cần nhập dữ liệu là số";
        return false;
    }
    else return true;
}
function geta() {
    var inputa=document.getElementById("input-a").value;
    var a=parseInt(inputa);
    return a;
}
function getb() {
    var inputb=document.getElementById("input-b").value;
    var b=parseInt(inputb);
    return b;
}

function addition() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a+b=" +(a+b);
    }
}
function subtraction() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a-b=" +(a-b);
    }
}
function multiplication() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a*b=" +(a*b);
    }

}
function division() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a/b=" +(a/b);
    }

}
function surplus() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a%b=" +(a%b);
    }

}
function aPlusPlus() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a++=" +(a++);
    }

}
function PlusPlusa() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="++a=" +(++a);
    }

}
function aMinusMinus() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="a--=" +(a--);
    }

}
function MinusMinusa() {
    checking();
    if (checking()==true){
        var showresult=document.getElementById("result");
        var a=geta();
        var b=getb();
        showresult.innerHTML="--a=" +(--a);
    }

}
