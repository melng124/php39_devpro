function validateForm(a, b) {
    var thongbao = document.getElementById('thongbao');
    var ketqua = document.getElementById('show-result');
    if(a == '' || b == ''){
        thongbao.innerHTML = "Không được để trống dữ liệu";
        ketqua.innerHTML="";
        return false;
    }
    else if (isNaN(a) == true|| isNaN(b) == true){
        thongbao.innerHTML = "Cần nhập dữ liệu là số";
        ketqua.innerHTML = "";
        return false;
    }
    thongbao.innerHTML = "";
    return true;

}
function chuViDienTich() {
    var a =document.getElementById('numbera').value;
    var b =document.getElementById('numberb').value;
    if (validateForm(a, b)==true) {

        var chuvi = (parseInt(a) + parseInt(b)) * 2;
        var dientich = parseInt(a) * parseInt(b);
        document.getElementById('show-result').innerHTML = "Chu Vi: " + chuvi + "<span>m</span>" + "<br>" + "Diện tích: " + dientich + "<span>m<sup>2</sup></span>";
    }
}