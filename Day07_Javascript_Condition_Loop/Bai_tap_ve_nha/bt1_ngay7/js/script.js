function validateForm(a, b) {
    var error = document.getElementById('show-error');
    var showResult = document.getElementById('show-result');
    // console.log("chay vao day ko");
    if (a == '' || b == ''){
        // document.write("Không được để trống dữ liệu");
        error.innerHTML = 'Không được để trống dữ liệu';
        showResult.innerHTML = '';
        return false;
    }
    else if (isNaN(a) || isNaN(b)) {
        showResult.innerHTML = '';
        error.innerHTML = "Cần nhập dữ liệu là số";
        return false;
    }

    error.innerHTML = '';
    return true;


}

function add() {
    //trong JS, bất cứ dữ liệu nào đc nhập từ user
    //đều có kiểu dữ liệu là string
    // 1 + 2 = 12
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    if (validateForm(a, b) == true) {
        //thuc hien phep cong
        var sum = parseInt(a) + parseInt(b);
        document.getElementById('show-result')
            .innerText = "Tổng = " +sum;
    }
}