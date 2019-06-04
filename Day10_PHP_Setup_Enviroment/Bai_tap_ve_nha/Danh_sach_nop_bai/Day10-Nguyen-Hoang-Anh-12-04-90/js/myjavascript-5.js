function validateForm() {
    var name = document.getElementById('showName');
    var email = document.getElementById('showEmail');
    var phone = document.getElementById('showPhone');
    var message = document.getElementById('showMessage');

    name.innerHTML = "Name: Hoang Anh Nguyen";
    email.innerHTML = "Email: mel@gmail.com";
    phone.innerHTML = "Phone: 0987xxxxxx";
    message.innerHTML = "Message: This is message";

    return false;
}