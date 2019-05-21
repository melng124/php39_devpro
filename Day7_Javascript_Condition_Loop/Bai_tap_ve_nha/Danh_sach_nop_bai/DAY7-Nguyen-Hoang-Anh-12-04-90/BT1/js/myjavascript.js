function sum() {
    var a = document.getElementById('num-a').value;
    var b = document.getElementById('num-b').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (a == "" || b == "") {
        alert("Xin hãy nhập đủ thông tin 2 số a và b!!!")
    }
    else if (isNaN(a) == true || isNaN(b) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        b = parseInt(b);
        showResult.innerHTML = "a+b=" + (a + b);
    }
}

function sub() {
    var a = document.getElementById('num-a').value;
    var b = document.getElementById('num-b').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (a == "" || b == "") {
        alert("Xin hãy nhập đủ thông tin 2 số a và b!!!")
    }
    else if (isNaN(a) == true || isNaN(b) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        b = parseInt(b);
        showResult.innerHTML = "a-b=" + (a - b);
    }
}

function multi() {
    var a = document.getElementById('num-a').value;
    var b = document.getElementById('num-b').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (a == "" || b == "") {
        alert("Xin hãy nhập đủ thông tin 2 số a và b!!!")
    }
    else if (isNaN(a) == true || isNaN(b) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        b = parseInt(b);
        showResult.innerHTML = "a*b=" + (a * b);
    }
}

function div() {
    var a = document.getElementById('num-a').value;
    var b = document.getElementById('num-b').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (a == "" || b == "") {
        alert("Xin hãy nhập đủ thông tin 2 số a và b!!!")
    }
    else if (isNaN(a) == true || isNaN(b) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        b = parseInt(b);
        showResult.innerHTML = "a/b=" + (a / b);
    }
}

function percent() {
    var a = document.getElementById('num-a').value;
    var b = document.getElementById('num-b').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (a == "" || b == "") {
        alert("Xin hãy nhập đủ thông tin 2 số a và b!!!")
    }
    else if (isNaN(a) == true || isNaN(b) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        b = parseInt(b);
        showResult.innerHTML = "a%b=" + (a % b);
    }
}

function aPlus() {
    var a = document.getElementById('num-a').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (isNaN(a) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        showResult.innerHTML = "a++=" + (a++);
    }
}

function plusA() {
    var a = document.getElementById('num-a').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (isNaN(a) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        showResult.innerHTML = "++a=" + (++a);
    }
}

function aMinus() {
    var a = document.getElementById('num-a').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (isNaN(a) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        showResult.innerHTML = "a--=" + (a--);
    }
}

function minusA() {
    var a = document.getElementById('num-a').value;
    var showNotice = document.getElementById('notice');
    var showResult = document.getElementById('result');
    if (isNaN(a) == true) {
        showNotice.innerHTML = "Cần nhập dữ liệu là số";
    }
    else {
        a = parseInt(a);
        showResult.innerHTML = "--a=" + (--a);
    }
}