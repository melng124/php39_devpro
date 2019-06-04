/**
 * Show result form
 * @returns {boolean} false to prevent form submit
 */
function display() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var message = document.getElementById('message').value;
    if (checkValidate(name, email)) {
        document.getElementById('show-error').innerHTML = '';
        var result = "<p>Name: " + name + "</p>";
        result += "<p>Email: " + email + "</p>";
        result += "<p>Phone: " + phone + "</p>";
        result += "<p>Message: " + message + "</p>";
        document.getElementById('show-result').innerHTML = result;
    }

    return false;
}

/**
 *
 * @param name name
 * @param email email
 * @returns {boolean} true if validate ok, otherwise is false
 */
function checkValidate(name, email) {
    if (name === '' || email === '') {
        document.getElementById('show-result').innerHTML = '';
        document.getElementById('show-error').innerHTML = "Name hoặc email không được để trống";
        return false;
    }

    return true;
}