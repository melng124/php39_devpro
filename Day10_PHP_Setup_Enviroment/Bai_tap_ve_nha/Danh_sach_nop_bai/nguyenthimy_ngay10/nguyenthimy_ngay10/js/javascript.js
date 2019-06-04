function validateForm() {
        var message = document.getElementById('mes').value;
        var name = document.getElementById('txtname').value;
        var email = document.getElementById('txtemail').value;
        var phone = document.getElementById('txtphone').value;
        document.getElementById('ketqua').innerHTML = "Name: " + name + "<br>" + "Email: " + email + "<br>" + "Phone: "+phone+"<br>"+"Message: "+message;

    }