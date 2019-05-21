function checkA() {
    var numbera = document.getElementById('number1').value;
    // var soa = numbera.value;
    var a = parseInt(numbera);
    var pt = document.getElementById("phuongTrinh");
    var baoLoi = document.getElementById("thongBao");
    if (Number.isNaN(a)) {
        baoLoi.innerHTML = "Bạn phải nhập dữ liễu số cho a!";
        pt.innerHTML = "";

    } else {
        pt.innerHTML = a + "x " + " = 0";
        baoLoi.innerHTML = "";

    }

}

function test() {
    var numbera = document.getElementById('number1').value;
    // var soa = numbera.value;
    var a = parseInt(numbera);
    var numberb = document.getElementById('number2').value;
    // var sob = numberb.value;
    var b = parseInt(numberb);
    var pt = document.getElementById("phuongTrinh");
    var baoLoi = document.getElementById("thongBao");
    if (numberb == "" || numberb==0) {
        pt.innerHTML = a + "x " + "=" + "0";
        baoLoi.innerHTML = "";
    } else {
        if (Number.isNaN(b)) {
            baoLoi.innerHTML = "Bạn phải nhập dữ liễu số cho b!";
            pt.innerHTML = a + "x " + "=" + "0";
        } else {
            if (b < 0) {
                pt.innerHTML = a + "x " + b + " = 0";
                baoLoi.innerHTML = "";
            } else {
                pt.innerHTML = a + "x " + " + " + b + " = 0";
                baoLoi.innerHTML = "";
            }
        }
    }
}

function check() {
    var numbera = document.getElementById('number1').value;
    var a = parseInt(numbera);
    var numberb = document.getElementById('number2').value;
    var b = parseInt(numberb);
    var ketQua = document.getElementById("ketqua");

    if (a == 0) {
        if (b == 0) {
            ketQua.innerHTML = "phương trình vô số nghiệm"
        } else {
            ketQua.innerHTML = "phương trình vô nghiệm"
        }
    } else {
        ketQua.innerHTML = "x= " + (-b / a);
    }
}
