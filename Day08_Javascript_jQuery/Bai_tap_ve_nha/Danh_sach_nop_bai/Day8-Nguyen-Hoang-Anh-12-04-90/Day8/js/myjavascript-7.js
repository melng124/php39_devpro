function validateForm(a) {
    var error = $('#showError');
    var showResult = $('#result');

    if (a == "") {
        error.html("Không được để trống dữ liệu");
        showResult.html("");
        return false;
    }
    else if (isNaN(a)) {
        error.html("Cần nhập dữ liệu là số");
        showResult.html("");
        $('#number').val("");
        return false;
    }
    error.html("");
    return true
}

function calculation() {
    var number = $('#number').val();

    if (validateForm(number) == true) {
        if (parseInt(number) == 1 || parseInt(number) == 2 || parseInt(number) == 3) {
            $('#result').html("1,2,3 là số nguyên tố");
            $('#number').val("");
        }
        for (var i = 2; i <= parseInt(number) - 1; i++) {
            if (parseInt(number) % i != 0) {
                console.log();
            }
        }
    }
    return false;
}