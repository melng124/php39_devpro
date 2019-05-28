function test_validateForm() {
    var firstName = $("#first-name").val();
    var lastName = $("#last-name").val();
    var userName = $("#user-name").val();
    var addressInput = $("#address").val();
    var zipInput = $("#zip").val();
    var nameCardInput = $("#name-card").val();
    var numberCardInput = $("#number-card").val();
    var expirationInput = $("#expiration").val();
    var cvvInput = $("#cvv").val();


    if (firstName == "" || lastName == "" || userName == "" || addressInput == "" || zipInput == "" || nameCardInput == "" || numberCardInput == "" || expirationInput == "" || cvvInput == "") {
        alert("Cần nhập đủ các trường");
        return false;
    }

    else if (isNaN(zipInput) || isNaN(numberCardInput)) {
        alert("Cần nhập số Number là SỐ");
        return false;
    }

    return false
}