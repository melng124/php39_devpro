function validateForm(r) {
    var thongbao = document.getElementById('thongbao');
    var ketqua = document.getElementById('show-result');
    if(r == ''){
        thongbao.innerHTML = 'không để trống dữ liệu';
        ketqua.innerHTML = "";
        return false;
    }
    else if(isNaN(r)){
        thongbao.innerHTML = 'Cần nhập dữ liệu là số';
        ketqua.innerHTML = "";
        return false;
    }
    thongbao.innerHTML = "";
    return true;

}
function hinhTron() {
    var r = document.getElementById('numbera').value;
    if(validateForm(r) == true){
        var chuvi = parseInt(r)*2*3.14;
        var dientich = (parseInt(r)*parseInt(r))*3.14;
        document.getElementById('show-result').innerHTML = "Chu Vi: " + chuvi + "<span>m</span>" + "<br>" + "Diện tích: " + dientich + "<span>m<sup>2</sup></span>"
    }

}