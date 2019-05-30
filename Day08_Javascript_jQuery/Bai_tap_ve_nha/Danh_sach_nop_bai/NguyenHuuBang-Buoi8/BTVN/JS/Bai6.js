function Form(a) {
    if (a == ''){
        document.getElementById('error').innerHTML = 'Không được để trống dữ liệu';
        document.getElementById('kq').innerHTML = '';
        return false;

    }

    else if (isNaN(a)) {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').innerHTML = "Cần nhập dữ liệu là số";
        return false;
    }
    document.getElementById('error').innerHTML = '';
    return true;
}
function Tinh() {
    var a = document.getElementById('a').value;
    if (Form(a) == true) {
        var chuvi = 2*Math.PI*parseInt(a);
        var dientich = Math.PI*Math.pow(parseInt(a),2);
        document.getElementById('kq').innerHTML="Chu vi HCN là :"+ chuvi +" (m) "+"<br/>"+"Diện tích HCN là :"+ dientich+ " m<sup>2</sup> ";

    }
    return false;
}