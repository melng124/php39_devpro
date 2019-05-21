function kiemTraSNT() {
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    if (a == '') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
    }
    else {
        var dem = 0;
        var i;
        for (i = 1; i < a; i++) {
            if (a % i == 0) {
                dem++;
            }
        }
        if (dem == 2) {
            document.getElementById('ketqua').innerHTML = a+ "Không là số nguyên  tố";
        }
        else {
            document.getElementById('ketqua').innerHTML = a+ "Là số nguyên tố";
            return false;
        }
    }
}