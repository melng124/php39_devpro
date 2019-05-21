function tinhGiaiThua() {
    var n = document.getElementById('heSo').value;
    if (isNaN(n) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        var result=1;
        for (var i=1;i<=n;i++){
            //lấy kết quả
            result*=i;
        }
        document.getElementById('ketqua').innerHTML=n+"! = " +result;
    }
}