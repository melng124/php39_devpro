function giaiPhuongTrinhBacNhat() {
    var a = parseInt(document.getElementById('soa').value);
    var b = parseInt(document.getElementById('sob').value);
    // if (a == '' || b=='') {
    //     document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    // }
     if (isNaN(a) == true && isNaN(b) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
         if (a == 0) {
             if (b == 0) {
                 document.getElementById('ketqua').innerHTML = "Phương trình vô số nghiệm";
             }
             else {
                 document.getElementById('ketqua').innerHTML = "Phương trình vô nghiệm";
             }
         }
        else {
            var x;
            var kq = -b/a;
            document.getElementById('ketqua').innerHTML="Phương trình có nghiệm x"+" = "+kq;
            document.getElementById('hienthi').innerHTML=a+""+'x'+"+"+b+"="+0;
        }
    }
}