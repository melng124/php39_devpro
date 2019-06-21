function validateForm4() {
    var firstName = document.getElementById('firstName').value;
    var lastName = document.getElementById('lastName').value;
    var showResult = document.getElementById('info-js');
    if (firstName == '') {
        showResult.innerHTML = '<p class="notice">Firstname không được để trống</p>';
    }
    else if (lastName == '') {
        showResult.innerHTML = '<p class="notice">Lastname không được để trống</p>';
    }

    return false;
}