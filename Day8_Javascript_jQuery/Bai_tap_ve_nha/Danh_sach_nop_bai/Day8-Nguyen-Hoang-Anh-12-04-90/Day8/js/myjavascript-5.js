function validateForm(a) {
    var error = $('#showError');
    var showCircum = $('#circum');
    var showArea = $('#area');

    if (a == "") {
        error.html("Không được để trống dữ liệu");
        showCircum.html("");
        showArea.html("");
        return false;
    }
    else if (isNaN(a)) {
        error.html("Cần nhập dữ liệu là số");
        showCircum.html("");
        showArea.html("");
        return false;
    }
    error.html("");
    return true
}

function calculation() {
    var a = $('#length').val();

    if (validateForm(a) == true) {
        var circum = parseInt(a) * 4;
        var area = parseInt(a) * parseInt(a);
        $('#circum').html("Chu vi = " + circum + "m");
        $('#area').html("Diện tích = " + area + "m<sup>2</sup>");
    }
    return false;
}