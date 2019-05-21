function cong() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    console.log(typeof a);
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b))
        {
            document.getElementById("error").innerHTML="Gía trị nhập vào ko hợp";

        }else {

            c = parseInt(a)+parseInt(b);
            document.getElementById("kq").innerHTML=a + " + " +b+" = "+c;
        }
    }


}
function tru() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";
        }else
        {
            c = parseInt(a)-parseInt(b);
            document.getElementById("kq").innerHTML=a + " - " +b+" = "+c;
        }
    }

}
function nhan() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";
        }else
        {
            c = parseInt(a)*parseInt(b);
            document.getElementById("kq").innerHTML=a + " * " +b+" = "+c;
        }
    }

}
function chia() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";
        }else
        {
            c = parseInt(a)/parseInt(b);
            document.getElementById("kq").innerHTML=a + " / " +b+" = "+c;
        }
    }

}
function chiadu() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";
        }else
        {
            c = parseInt(a)%parseInt(b);
            document.getElementById("kq").innerHTML=a + " % " +b+" = "+c;
        }
    }

}
function tang() {
    var a = document.getElementById("a").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=a++;
        document.getElementById("kq").innerHTML="a++"+" = "+c;
    }
    
}
function tang1() {
    var a = document.getElementById("a").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=++a;
        document.getElementById("kq").innerHTML="++a"+" = "+c;
    }

}
function giam() {
    var a = document.getElementById("a").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=a--;
        document.getElementById("kq").innerHTML="a--"+" = "+c;
    }

}
function giam1() {
    var a = document.getElementById("a").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=--a;
        document.getElementById("kq").innerHTML="--a"+" = "+c;
    }

}