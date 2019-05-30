function validateForm(a, b) {
    var error = document.getElementById('thongBao');
    var showResult = document.getElementById('ketqua');
    var showResult1 = document.getElementById('ketqua2');
    if (a == ''){
        // document.write("Không được để trống dữ liệu");
        error.innerHTML = 'Không được để trống dữ liệu';
        showResult.innerHTML = '';
        showResult1.innerHTML = '';
        return false;
    }
    else if (isNaN(a)) {
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
    if (validateForm(a) == true) {
        var PI = 3.14;
        var sum = parseInt(a)*PI*2;
        var add = (parseInt(a) * parseInt(a))*PI;
        document.getElementById('ketqua')
            .innerHTML = "Chu vi = " +sum+"m";
        document.getElementById('ketqua2')
            .innerHTML = "Diện tích = " +add+"m<sup>2</sup>";
    }
}