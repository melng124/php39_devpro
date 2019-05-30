function validate(a) {
    var errow = document.getElementById("thongBao");
    var b = document.getElementById("ketqua");
    var c = document.getElementById("ketqua2");
    if (a == "") {
        errow.innerHTML = "Nhập giá trị cho a";
        b.innerHTML = "";
        c.innerHTML = "";
        return false;
    }
    if (isNaN(a)) {
        errow.innerHTML = "Phải nhập giá trị là số";
        b.innerHTML = "";
        c.innerHTML = "";
        return false;
    }
    return true;
}

function add() {
    var a = document.getElementById("number-a").value;
    var b = document.getElementById("ketqua");
    var c = document.getElementById("ketqua2");
    if (validate(a) == true) {
        a = parseInt(a);
        if (a < 1) {
            b.innerHTML = "số chẵn: 0";
            c.innerHTML = "không có số lẻ nào";
            return 0;
        }
        var html1 = "0";
        var html2 = "1";
        for (var i = 2; i <= a; i++) {
            if (i % 2 == 0) {
                html1 += ", " + i;
            } else {

                html2 += ", " + i
            }
        }
        b.innerHTML="Số chẵn: "+html1;
        c.innerHTML="Số lẻ: "+html2;
    }
}