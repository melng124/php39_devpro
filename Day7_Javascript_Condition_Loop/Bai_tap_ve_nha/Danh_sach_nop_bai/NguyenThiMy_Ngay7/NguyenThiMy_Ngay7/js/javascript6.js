function kiemTraChuoi() {
    var chuoi1 = document.getElementById('chuoithunhat').value;
    var chuoi2 = document.getElementById('chuoithuhai').value;
    var chuoi3 = document.getElementById('ketqua');
    if (chuoi1.includes(chuoi2) === -1) {

        document.getElementById('ketqua').innerHTML = "Không tồn tại";
    }
    else {
        document.getElementById('ketqua').innerHTML = "chuỗi " + chuoi2 + " tồn tại trong chuỗi ban đầu " + chuoi1;
    }


}