
function cong() {
    var a = document.getElementById("nameSoa").value;
    var b = document.getElementById("nameSob").value;
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b))
        {
            document.getElementById("error").innerHTML="Gía trị nhập vào ko phù hợp";

        }else {

            c = parseInt(a)+parseInt(b);
            document.getElementById("show-result").innerHTML=a + " + " +b+" = "+c;
        }
    }


}
function tru() {
    var a = document.getElementById("nameSoa").value;
    var b = document.getElementById("nameSob").value;
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
            document.getElementById("show-result").innerHTML=a + " - " +b+" = "+c;
        }
    }

}
function nhan() {
    var a = document.getElementById("nameSoa").value;
    var b = document.getElementById("nameSob").value;
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
            document.getElementById("show-result").innerHTML=a + " * " +b+" = "+c;
        }
    }

}
function chia() {
    var a = document.getElementById("nameSoa").value;
    var b = document.getElementById("nameSob").value;
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
            document.getElementById("show-result").innerHTML=a + " / " +b+" = "+c;
        }
    }

}
function chiadu() {
    var a = document.getElementById("nameSoa").value;
    var b = document.getElementById("nameSob").value;
    if(a=="" || b=="")
    {
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML=""
        if(isNaN(a) || isNaN(b)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào phù ko hợp";
        }else
        {
            c = parseInt(a)%parseInt(b);
            document.getElementById("show-result").innerHTML=a + " % " +b+" = "+c;
        }
    }

}
function tang() {
    var a = document.getElementById("nameSoa").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=a++;
        document.getElementById("show-result").innerHTML="a++"+" = "+c;
    }

}
function tang1() {
    var a = document.getElementById("nameSoa").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=++a;
        document.getElementById("show-result").innerHTML="++a"+" = "+c;
    }

}
function giam() {
    var a = document.getElementById("nameSoa").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=a--;
        document.getElementById("show-result").innerHTML="a--"+" = "+c;
    }

}
function giam1() {
    var a = document.getElementById("nameSoa").value;
    if(a==""){
        document.getElementById("error").innerHTML="Dữ liệu không đủ";
    }else {
        document.getElementById("error").innerHTML="";
        c=--a;
        document.getElementById("show-result").innerHTML="--a"+" = "+c;
    }

}