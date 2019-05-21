function giaiPhuongTrinhBacHai() {
    var a = parseInt(document.getElementById('soa').value);
    var b = parseInt(document.getElementById('sob').value);
    var c = parseInt(document.getElementById('soc').value);
    if (isNaN(a) == true && isNaN(b) == true && isNaN(c)==true) {
        document.getElementById('thongbao').innerText = "Cần nhập dữ liệu là số";
        return false;
    }
    else {
        if (a == 0) {
            if (b == 0) {
                if (c == 0) {
                    document.getElementById('ketqua').innerHTML = "Phương trình vô số nghiệm";
                }
                else {
                    document.getElementById('ketqua').innerHTML = "Phương trình vô nghiệm";
                }
            }
            else {
                var kq = -c / b;
                document.getElementById('ketqua').innerHTML = "Phương trình có nghiệm x" + " = " + kq;
            }

        }
        if ((a != 0)) {
            var denta;
            denta = b * b - 4 * a * c;
            if (denta == 0) {
                var kq = -b / 2 * a;
                document.getElementById('ketqua').innerHTML = "Phương trình có nghiệm kép x" + " = " + kq;
            }
            else if (denta < 0) {
                document.getElementById('ketqua').innerHTML = "Phương trình vô nghiệm";
            }
            else {

                var x1, x2,
                    x1 = (-b - Math.sqrt(denta)) / (2 * a);
                x2 = (-b + Math.sqrt(denta)) / (2 * a);
                document.getElementById('ketqua').innerHTML = "Phương trình có hai nghiệm phân biệt:x " + "=" + x1 + " và x " + "=" + x2;
                document.getElementById('hienthi').innerHTML=a+""+'x^2'+"+"+b+"+"+c+"="+0;
            }

        }
    }
}