function Form(a, b) {
    if (a == '' || b == ''){
        document.getElementById('error').innerHTML = 'Không được để trống dữ liệu';
        document.getElementById('kq').innerHTML = '';
        return false;

    }

    else if (isNaN(a) || isNaN(b)) {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').innerHTML = "Cần nhập dữ liệu là số";
        return false;
    }
    document.getElementById('error').innerHTML = '';
    return true;
}
function Tinh() {
    var a = document.getElementById('a').value;
    var b = document.getElementById('b').value;
    if (Form(a,b) == true) {
        var chuvi = (parseInt(a)+parseInt(b))*2;
        var dientich = parseInt(a)*parseInt(b);
        document.getElementById('kq').innerHTML="Chu vi HCN là :"+ chuvi +" (m) "+"<br/>"+"Diện tích HCN là :"+ dientich+ " m<sup>2</sup> ";

    }
    return false;
}