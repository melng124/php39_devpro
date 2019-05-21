function sum() {
    var numbera = document.getElementById('number1');
    var a = numbera.value;
    var aa = parseInt(a);
    var numberb = document.getElementById('number2');
    var b = numberb.value;
    var bb = parseInt(b);

    if (a.length == 0 || b.length == 0) {
        var thongBao1 = document.getElementById('thongBao');
        thongBao1.innerHTML = "Không được để trống dữ liễu";
    } else {
        var thongBao1 = document.getElementById('thongBao');
        thongBao1.innerHTML = "";
        var giatri = document.getElementById('ketqua');
        var sum = aa + bb;
        // var tybe = valueOf(sum);
        if (!(isNaN(a) || isNaN(b))) {
            giatri.innerHTML = "a+b= " + sum;
        }
        else {
            giatri.innerHTML = "";
            thongBao1.innerHTML = "Cần nhập dữ liệu là số";
        }
    }
}

    function trub() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = aa - bb;
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "a-b= " + sum;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function sumNhan() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = (aa) * (bb);
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "a*b= " + sum;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function chiaa() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = (aa) / (bb);
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "a/b= " + sum;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function chiaDu() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = (aa)%(bb);
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "a%b= " + sum;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function congCong() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = ++(aa);
            var sum2 =  ++(bb);
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "++a= " + sum +" và "+ "++b="+sum2;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function aCongCong() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = (aa)++;
            var sum2 = (bb)++;
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "a++= " + sum +" và "+ "b++="+sum2;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function truTru() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = --(aa);
            var sum2 = --(bb);
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "--a= " + sum +" và "+ "--b="+sum2;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function aTruTru() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var aa = parseInt(a);
        var numberb = document.getElementById('number2');
        var b = numberb.value;
        var bb = parseInt(b);
        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
            var giatri = document.getElementById('ketqua');
            var sum = (aa)--;
            var sum2 = (bb)--;
            // var tybe = valueOf(sum);
            if (!(isNaN(a)||isNaN(b))) {
                giatri.innerHTML = "a--= " + sum +" và "+ "b--="+sum2;
            }
            else {
                giatri.innerHTML = "";
                thongBao1.innerHTML = "Cần nhập dữ liệu là số";
            }
        }
    }

    function baoLoi() {
        var numbera = document.getElementById('number1');
        var a = numbera.value;
        var numberb = document.getElementById('number2').value;
        // var b = numberb.value;
        var bb = parseInt(numberb);
        alert("kiểu dữ liệu của a la :" +typeof(bb));
        console.log(typeof bb);
        console.log(b);

        if (a.length == 0 || b.length == 0) {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "Không được để trống dữ liễu";
        } else {
            var thongBao1 = document.getElementById('thongBao');
            thongBao1.innerHTML = "";
        }
    }