function validateForm(r) {
    var error = $('#showError');
    var showCircum = $('#circum');
    var showArea = $('#area');

    if (r == "") {
        error.html("Không được để trống dữ liệu");
        showCircum.html("");
        showArea.html("");
        return false;
    }
    else if (isNaN(r)) {
        error.html("Cần nhập dữ liệu là số");
        showCircum.html("");
        showArea.html("");
        return false;
    }
    error.html("");
    return true
}

function calculation() {
    var r = $('#radius').val();
    const PI = 3.14;

    if (validateForm(r) == true) {
        var circum = parseInt(r) * 2 * PI;
        var area = parseInt(r) * parseInt(r) * PI;
        $('#circum').html("Chu vi = " + circum + "m");
        $('#area').html("Diện tích = " + area + "m<sup>2</sup>");
    }
    return false;
}