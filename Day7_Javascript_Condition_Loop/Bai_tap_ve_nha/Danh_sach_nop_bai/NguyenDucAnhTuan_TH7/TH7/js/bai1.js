
function fnc1() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A+B;
    }
    showResult.innerHTML=("a + b = "+x);
}
function fnc2() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A-B;
    }
    showResult.innerHTML=("a - b = "+x);
}

function fnc3() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A*B;
    }
    showResult.innerHTML=("a * b = "+x);
}

function fnc4() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A/B;
    }
    showResult.innerHTML=("a / b = "+x);
}

function fnc5() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A%B;
    }
    showResult.innerHTML=("a % b = "+x);
}

function fnc6() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A++;
    }
    showResult.innerHTML=("a ++ = "+x);
}

function fnc7() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = ++A;
    }
    showResult.innerHTML=("++ a = "+x);
}

function fnc8() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = A--;
    }
    showResult.innerHTML=("a -- = "+x);
}

function fnc9() {
    var a = document.getElementById("inputA").value;
    var b = document.getElementById("inputB").value;
    var A=parseInt(a);
    var B=parseInt(b);
    if (a == "" && b == "") {
        document.getElementById("error").innerHTML="Không được để trống dữ liệu";
        return false;
    }
    else{
        if (isNaN(a)|| isNaN(b)){
            document.getElementById("error").innerHTML="Cần nhập dữ liệu là số";
            return false;
        }
        else
            var x = --A;
    }
    showResult.innerHTML=("-- a = "+x);
}