function validateForm() {
    var ketqua = document.getElementById('ketqua');
    //kiểm tra email
    var email = document.getElementById('email').value;
    var shackle = email.indexOf("@");
    var dots = email.lastIndexOf(".");
    if(email == ''){
        alert("email không được để trống");
        return false;

    }
    else if ((shackle<1) || (dots<shackle+2) || (dots+2>email.length)) {
        alert("Email bạn điền không chính xác");
        return false;
    }
    var ten = document.getElementById('name').value;
    if (ten == "") {
        alert("Tên không được để trống");
        return false;
    }
    var dienThoai = document.getElementById('phone').value;
    if (dienThoai == "") {
        alert("Điện thoại không đưo để trống");
        return false;
    }
    else if(isNaN(dienThoai)==true){
        alert("Cần nhập là số");
        return false;
    }

    var note = document.getElementById('note').value;
    if (note == "") {
        alert("Notes không được để trống");
        return false;
    }
    var gutes = document.getElementById('gutes').value;
    if (gutes == "") {
        alert("Gutest không được để trống");
        return false;
    }
    return true;
}
function hienThi() {
    var email = document.getElementById('email').value;
    var ten = document.getElementById('name').value;
    var dienThoai = document.getElementById('phone').value;
    var note = document.getElementById('note').value;
    var gutes = document.getElementById('gutes').value;
    if(validateForm()==true){
       document.getElementById('ketqua').innerHTML = "Your email address: "+email+"<br>"+"Name: "+ten+"<br>"+"Notes: "+note+"<br>"+"Telephone number: "+dienThoai+"<br>"+"No. of guests: "+gutes;
    }

}