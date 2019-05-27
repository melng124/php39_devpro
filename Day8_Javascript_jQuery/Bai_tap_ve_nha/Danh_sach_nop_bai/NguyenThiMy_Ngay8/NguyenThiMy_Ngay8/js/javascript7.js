function validateForm(a) {
    var thongbao = document.getElementById('thongbao');
    var ketqua = document.getElementById('show-result');
    if (a == '') {
        thongbao.innerHTML = 'không để trống dữ liệu';
        ketqua.innerHTML = "";
        return false;
    }
    else if (isNaN(a)) {
        thongbao.innerHTML = 'Cần nhập dữ liệu là số';
        ketqua.innerHTML = "";
        return false;
    }

    thongbao.innerHTML = "";
    return true;

}

function soNguyenTo(a) {
    var i;
    var dem = 0;
    if (validateForm(a) == true) {
        for (i = 1; i <= a; i++) {
            if (a % i == 0) {
                dem++;
            }
        }

        if (dem == 2) {
            //document.getElementById('show-result').innerHTML = "là số nguyên tố";
            return true;
        }
        else {
            //document.getElementById('show-result').innerHTML = "không là số nguyên tố";
            return false;
        }
    }

}

function lietKe() {
    var i;
    var primeNumber = "";
    var a = document.getElementById('numbera').value;
    for (i = 2; i < a; i++) {
        console.log(soNguyenTo(i))
        if (soNguyenTo(i)) {
            primeNumber += i + " "
        }
    }
    document.getElementById('show-result').innerHTML = "các số nguyên tố từ 1 đến n là:  " + primeNumber;

}


