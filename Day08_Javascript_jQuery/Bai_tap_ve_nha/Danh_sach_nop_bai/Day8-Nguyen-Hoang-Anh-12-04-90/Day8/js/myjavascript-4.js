function validateForm(a, b) {
    var error = $('#showError');
    var showCircum = $('#circum');
    var showArea = $('#area');

    if (a == "" || b == "") {
        error.html("Không được để trống dữ liệu");
        showCircum.html("");
        showArea.html("");
        return false
    }
    else if (isNaN(a) || isNaN(b)) {
        error.html("Cần nhập dữ liệu là số");
        showCircum.html("");
        showArea.html("");
        return false
    }
    error.html("");
    return true;
}

function calculation() {
    var a = $('#length').val();
    var b = $('#width').val();

    if (validateForm(a, b) == true) {
        var circum = (parseInt(a) + parseInt(b)) * 2;
        var area = parseInt(a) * parseInt(b);
        $('#circum').html("Chu vi = " + circum + "m")
        $('#area').html("Diện tích = " + area + "m<sup>2</sup>")
    }

    return false;
}