function validateForm(a, b) {
    var error = document.getElementById('thongBao');
    var showResult = document.getElementById('ketqua');
    var showResult1 = document.getElementById('ketqua2');
    if (a == '' || b == ''){
        // document.write("Không được để trống dữ liệu");
        error.innerHTML = 'Không được để trống dữ liệu';
        showResult.innerHTML = '';
        showResult1.innerHTML = '';
        return false;
    }
    else if (isNaN(a) || isNaN(b)) {
        showResult.innerHTML = '';
        showResult1.innerHTML = '';
        error.innerHTML = "Cần nhập dữ liệu là số";
        return false;
    }

    error.innerHTML = '';
    return true;


}

function add() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    if (validateForm(a, b) == true) {
        //thuc hien phep cong
        var sum = (parseInt(a) + parseInt(b))*2;
        var add = (parseInt(a) * parseInt(b));
        document.getElementById('ketqua')
            .innerHTML = "Chu vi = " +sum+"m";
        document.getElementById('ketqua2')
            .innerHTML = "Diện tích = " +add+"m<sup>2</sup>";
    }
}