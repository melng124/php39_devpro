function Validateform(email, name, phone, note, guests) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (email == '' || name == '' || phone == '' || note == '' || guests == '') {
        alert("Vui lòng nhập đầy đủ thông tin");
    }
    else if (!filter.test(email)) {
        alert('Vui lòng nhập địa chỉ email hợp lệ.\nExample@gmail.com');
        email.focus;
        return false;
    }
    else if (isNaN(c)) {
        alert("Vui lòng nhập đúng số điện thoại");
        return false;
    }
    else {
        return true;
    }

}

console.log(Validateform);

function Hienthi() {
    var email = document.getElementById('email').value;
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var note = document.getElementById('note').value;
    var guests = document.getElementById('guests').value;
    if (Validateform(email, name, phone, note, guests) == true) {
        document.getElementById('show-information').innerHTML = "Your email address: " + email +
            "<br>Name: " + name +
            "<br>Notes " + note +
            "<br>Telephone number: " + phone +
            "<br>No. of guests: " + guests;
    }
}

console.log(Hienthi);