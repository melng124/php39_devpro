function check() {
    var a = document.getElementById('number-a').value;
    var z = parseInt(a);
    if (z >=1 && z<=10) {
        var kiemtra = z +" nằm trong khoảng 1-10 ";
        document.getElementById("show-result").innerHTML = kiemtra;
    }
    else if (z >=50 && z<=200) {
        var kiemtra = z +" nằm trong khoảng 50-100 ";
        document.getElementById("show-result").innerHTML = kiemtra;
    }
    else {
        var kiemtra = z +" không nằm trong khoảng 1-10 và 50-100 ";
        document.getElementById("show-result").innerHTML = kiemtra;
    }


}