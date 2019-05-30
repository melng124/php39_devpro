function validateForm(a, b) {
    var error = document.getElementById('thongBao');
    var showResult = document.getElementById('ketqua');
    if (a == '') {
        // document.write("Không được để trống dữ liệu");
        error.innerHTML = 'Không được để trống dữ liệu';
        showResult.innerHTML = '';
        return false;
    }
    else if (isNaN(a)) {
        showResult.innerHTML = '';
        error.innerHTML = "Cần nhập dữ liệu là số";
        return false;
    }

    error.innerHTML = '';
    return true;


}

function add() {
    var a = document.getElementById('number-a').value;
    var showResult = document.getElementById('ketqua');
    if (validateForm(a) == true) {
        a = parseInt(a);
        if (a < 2) {
            showResult.innerHTML = "không có số nguyên tố nào";
            return 0;
        }
        var n = 3;
        var html = "2";
        while (n <= a) {
            sum = 0;
            for (var i = 2; i <= Math.sqrt(n); i++) {
                if (n % i == 0) {
                    sum++;
                }
            }
            if (sum == 0) {
                html += "," + n;
            }
            n++;
        }
        document.getElementById('ketqua')
            .innerHTML = "các số nguyên tố từ 1 đến  " + a + " là: " + html;
    }
}