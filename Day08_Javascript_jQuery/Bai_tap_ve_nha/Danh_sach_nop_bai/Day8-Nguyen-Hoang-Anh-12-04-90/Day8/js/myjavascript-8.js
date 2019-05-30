function validateForm(a) {
    var error = $('#showError');
    var showEven = $('#even-text');
    var showOdd = $('#odd-text');

    if (a == "") {
        error.html("Không được để trống dữ liệu");
        showEven.html("");
        showOdd.html("");
        return false;
    }
    else if (isNaN(a)) {
        error.html("Cần nhập dữ liệu là số");
        showEven.html("");
        showOdd.html("");
        $('#number').val("");
        return false;
    }
    error.html("");
    return true
}

function calculation() {
    var a = $('#number').val();

    if (validateForm(a) == true) {
        for (var i = 1; i <= parseInt(a); i++) {
            if (i % 2 == 0) {
                $('#even-text').html("Số chẵn từ 1 - " + a + ": ");
                $('#even-number').append(i + ", ");
                $('#number').val("");
            }
            if (i % 2 != 0) {
                $('#odd-text').html("Số lẻ từ 1 - " + a + ": ");
                $('#odd-number').append(i + ", ");
            }
        }
    }

    return false;
}