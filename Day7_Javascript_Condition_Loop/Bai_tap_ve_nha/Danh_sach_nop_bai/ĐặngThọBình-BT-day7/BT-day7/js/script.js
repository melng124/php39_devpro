function sum() {
    var numbera = document.getElementById('Number1');
    var a = numbera.value;
    var aa = parseInt(a);
    var numberb = document.getElementById('Number2');
    var b = numberb.value;
    var bb = parseInt(b);
    if (a.length == 0||b.length == 0) {
        var thongbao1 = document.getElementById('thongbao');
        thongbao1.innerText ="Không được để trống dữ liệu";
    } else {
        var thongbao1 = document.getElementById('thongbao');
        thongbao1.innerText = "";
        var giatri = document.getElementById('ketqua');
        var sum = aa + bb;
        var type = valueOf(sum);
        if ( sum > 0) {
            giatri.innerHTML = " a+b = " + sum;
        }
        else {
            giatri.innerHTML = "";
            thongbao1.innerHTML = "Cần nhập dữ liệu là số";
        }

    }

}