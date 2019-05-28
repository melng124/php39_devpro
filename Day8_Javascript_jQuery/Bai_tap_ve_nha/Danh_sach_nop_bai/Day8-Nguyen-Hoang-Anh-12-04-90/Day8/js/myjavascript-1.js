function validateForm() {
    var emailInput = $("#email").val();
    var emailCheck = /@/;
    var nameInput = $("#name").val();
    var notesInput = $("#notes").val();
    var phoneInput = $("#phone").val();
    var guestNumberInput = $("#guests").val();
    guestNumberInput = parseInt(guestNumberInput);

    if (emailInput == "" || nameInput == "" || notesInput == "" || phoneInput == "" || guestNumberInput == "") {
        alert("Cần nhập đủ các trường");
        return false;
    }
    else if (emailCheck.test(emailInput) == false) {
        alert("Cần nhập format email cho trường này");
        return false;
    }
    else if (isNaN(guestNumberInput) == true) {
        alert("Cần nhập số lượng khách là SỐ");
        return false;
    }
    else
        alert('ĐÃ SUBMIT THÀNH CÔNG\n ' + '\n' +
            'Your email address: ' + emailInput + '\n' +
            'Name: ' + nameInput + '\n' +
            'Notes: ' + notesInput + '\n' +
            'Telephone number: ' + phoneInput + '\n' +
            'No. of guests: ' + guestNumberInput + '\n'
        );

    return true;
}