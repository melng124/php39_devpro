function handleSubmit() {
    var name = document.getElementById('nameInput').value;
    var email = document.getElementById('emailInput').value;
    var gender = document.getElementById('gender-male').value;
    if (document.getElementById('gender-female').checked) {
        gender = document.getElementById('gender-female').value;
    }
    var no = document.getElementById('noInput').value;
    var result = "";

    result += "Name: " + name;
    result += "<br />";
    result += "Email: " + email;
    result += "<br />";
    result += "Gender: " + gender;
    result += "<br />";
    result += "Contact No: " + no;

    document.getElementById("show-result").innerHTML = result;

    return false;
}