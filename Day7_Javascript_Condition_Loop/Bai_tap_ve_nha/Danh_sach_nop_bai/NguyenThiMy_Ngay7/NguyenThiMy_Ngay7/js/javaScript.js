function Sum() {
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    var b = document.getElementById('number2').value;
    if (a == '' || b=='') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true && isNaN(b) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var tong = parseInt(a) + parseInt(b);
        document.getElementById('ketqua').innerHTML = a + " + " + b + " = " + tong;
    }
}
function Hieu() {
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    var b = document.getElementById('number2').value;
    if (a == '' || b=='') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true && isNaN(b) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var tru = parseInt(a) - parseInt(b);
        document.getElementById('ketqua').innerHTML = a + " - " + b + " = " + tru;
    }
}
function Tich() {
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    var b = document.getElementById('number2').value;
    if (a == '' || b=='') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true && isNaN(b) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var tich = parseInt(a) * parseInt(b);
        document.getElementById('ketqua').innerHTML = a + " * " + b + " = " + tich;
    }
}
function Thuong() {
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    var b = document.getElementById('number2').value;
    if (a == '' || b=='') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true && isNaN(b) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var Thuong = parseInt(a) / parseInt(b);
        document.getElementById('ketqua').innerHTML = a + " / " + b + " = " + Thuong;
    }
}
function chiaLayDu(){
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    var b = document.getElementById('number2').value;
    if (a == '' || b=='') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true && isNaN(b) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var chilaysdu = parseInt(a) % parseInt(b);
        document.getElementById('ketqua').innerHTML = a + " % " + b + " = " + chialaydu;
    }
}
function tangMotDonVi(){
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    if (a == '') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var tangMotdonvi= parseInt(a);
        tangMotdonvi++;
        document.getElementById('ketqua').innerHTML = 'a++' + " = "+tangMotdonvi;
    }
}
function tangMotDonVi(){
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    if (a == '') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var tangMotdonvi= parseInt(a);
        tangMotdonvi++;
        document.getElementById('ketqua').innerHTML = 'a++' + " = "+tangMotdonvi;
    }
}
function tangMotDonViPostfix(){
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    if (a == '') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var tangPostfix= parseInt(a);
        ++tangPostfix;
        document.getElementById('ketqua').innerHTML = '++a' + " = "+tangPostfix;
    }
}
function giamMotDonVi(){
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    if (a == '') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var giamMot= parseInt(a);
        giamMot--;
        document.getElementById('ketqua').innerHTML = 'a--' + " = "+giamMot;
    }
}
function giamMotDonViPostfix(){
    //khai báo biến và giá trị cho biến
    var a = document.getElementById('number1').value;
    if (a == '') {
        document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    }
    else if (isNaN(a) == true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
        // alert("Dữ liệu hợp lệ cho phép submitform");
        var giamPostfix= parseInt(a);
        --giamPostfix;
        document.getElementById('ketqua').innerHTML = '--a' + " = "+giamPostfix;
    }
}

