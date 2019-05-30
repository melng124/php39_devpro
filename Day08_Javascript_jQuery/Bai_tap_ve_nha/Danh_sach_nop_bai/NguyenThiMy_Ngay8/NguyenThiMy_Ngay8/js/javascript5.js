function validateForm(a) {
    var thongbao = document.getElementById('thongbao');
    var ketqua = document.getElementById('show-result');
    if(a == ''){
        thongbao.innerHTML = 'không để trống dữ liệu';
        ketqua.innerHTML = "";
        return false;
    }
    else if(isNaN(a)){
        thongbao.innerHTML = 'Cần nhập dữ liệu là số';
        ketqua.innerHTML = "";
        return false;
    }
    thongbao.innerHTML = "";
    return true;

}
function hinhVuong() {
    var a = document.getElementById('numbera').value;
    if(validateForm(a) == true){
        var chuvi = 4*parseInt(a);
        var dientich = parseInt(a)*parseInt(a);
        document.getElementById('show-result').innerHTML = "Chu Vi: " + chuvi + "<span>m</span>" + "<br>" + "Diện tích: " + dientich + "<span>m<sup>2</sup></span>"
    }

}