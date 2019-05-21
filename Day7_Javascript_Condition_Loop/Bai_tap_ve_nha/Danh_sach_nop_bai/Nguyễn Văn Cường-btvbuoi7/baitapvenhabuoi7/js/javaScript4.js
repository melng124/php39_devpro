function checkA() {
    var numbera = document.getElementById('number1').value;
    var a = parseInt(numbera);
    var numberb = document.getElementById('number2').value;
    var b = parseInt(numberb);
    var numberc = document.getElementById('number3').value;
    var c = parseInt(numberc);
    var pt = document.getElementById("phuongTrinh");
    if (numbera == "" || numbera == 0) {
        pt.innerHTML = b + "x " + " + " + c + " = 0";
    } else {
        pt.innerHTML = a + "x<sup>2</sup>" + "=" + "0";
    }
}

function check() {
    var numbera = document.getElementById('number1').value;
    var a = parseInt(numbera);
    var numberb = document.getElementById('number2').value;
    var b = parseInt(numberb);
    var numberc = document.getElementById('number3').value;
    var c = parseInt(numberc);
    var pt = document.getElementById("phuongTrinh");

    if (a != 0 && b != 0 && (c == 0 || numberc == "")) {
        pt.innerHTML = a + "x<sup>2</sup>" + " + " + b + "x" + "=" + "0";
    }

    else if (a != 0 && (b == 0 || numberb == "") && c != 0) {
        pt.innerHTML = a + "x<sup>2</sup>" + " + " + c + "=" + "0";
    }

    else if ((a == 0 || numbera == "") && b != 0 && c != 0) {
        pt.innerHTML = b + "x" + " + " + c + "=" + "0";
    }

    else if (a != 0 && (b == 0 || numberb == "") && (c == 0 || numberc == "")) {
        pt.innerHTML = a + "x<sup>2</sup>" + "=" + "0";
    }

    else  if ((a == 0 || numbera == "") && b != 0 && (c == 0 || numberc == "")) {
        pt.innerHTML = b + "x" + "=" + "0";
    }

    else if (a != 0 && b != 0 && c != 0) {
        pt.innerHTML = a + "x<sup>2</sup>" + " + " + b + "x" + " + " + c + "=" + "0";
    }
}

function test() {
    var numbera = document.getElementById('number1').value;
    var a = parseInt(numbera);
    var numberb = document.getElementById('number2').value;
    var b = parseInt(numberb);
    var numberc = document.getElementById('number3').value;
    var c = parseInt(numberc);
    var ketQua = document.getElementById("ketqua");
    if(numbera==""||numberb==""||numberc==""){
        var baoLoi=document.getElementById("thongBao");
        baoLoi.innerHTML="Bạn phải nhập đủ dữ liễu";
    }else {
    var dental = b * b - (4 * a * c);
    console.log(dental);
    if (dental == 0) {
        ketQua.innerHTML = "phương trình có 2 nghiệm kép:x1=x2= " + (-b / (2 * a));
    } else {
        if (dental < 0) {
            ketQua.innerHTML = "phương trình vô nghiệm";
        } else {
            var y = Math.sqrt(dental);
            var x1 = ((-b) + y) / (2 * a);
            var x2 = ((-b) - y) / (2 * a);
            ketQua.innerHTML = "phương trình có 2 nghiệm: " + "x1= " + x1 + "; " + "x2= " + x2;
        }
    }
    }
}

