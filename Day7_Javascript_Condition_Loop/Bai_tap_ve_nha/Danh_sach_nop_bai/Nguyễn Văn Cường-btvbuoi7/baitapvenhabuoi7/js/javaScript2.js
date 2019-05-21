function check() {
    var numbera = document.getElementById('number1');
    var soa = numbera.value;
    var baoLoi = document.getElementById("baoloi");
    var text = document.getElementById("ketqua");
    if (soa.length == 0) {
        baoLoi.innerHTML = "Bạn cần nhập dữ liễu";
        text.innerHTML ="";
    } else {
        var a = parseInt(soa);
        console.log(a);
        console.log(typeof (a));
        if (a > 0) {
            if ((0 < a && a < 11) || (49 < a && a < 101)) {
                text.innerHTML = a + " nằm trong khoảng từ 1 đến 10 hoặc 50 đến 100";
                baoLoi.innerHTML = "";
            } else {
                text.innerHTML = a + " không nằm trong khoảng từ 1 đến 10 hoặc 50 đến 100";
                baoLoi.innerHTML = "";
            }

        } else {
            baoLoi.innerHTML = "Bạn cần nhập dữ liều số";

        }
    }

}