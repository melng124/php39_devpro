function resolve() {
    var a = document.getElementById('num-a').value;
    a = parseInt(a);
    var b = document.getElementById('num-b').value;
    b = parseInt(b);
    var c = document.getElementById('num-c').value;
    c = parseInt(c);
    var delta = b * b - 4 * a * c;
    var showResult = document.getElementById('result');
    var showDisplay = document.getElementById('display');
    // Tại sao khai báo ngoài này lại ko dùng đc trong if
    // var showResult = document.getElementById('result').innerHTML;
    if (a != 0 && delta < 0) {
        // Tại sao khai báo var showResult bên ngoài if lại ko dc???
        // showResult = "Phương trình vô nghiệm";
        // console.log(showResult);
        showResult.innerHTML = "Phương trình vô nghiệm";
    }
    else if (a != 0 && delta == 0) {
        showResult.innerHTML = "Phương trình có nghiệm kép x<sub>1</sub> = x<sub>2</sub> = " + (-b / (2 * a));
    }
    else if (a != 0 && delta > 0) {
        showResult.innerHTML = "Phương trình có 2 nghiệm phân biệt: \n"
            + "x<sub>1</sub> = " + ((-b + Math.sqrt(delta)) / (2 * a)) + "\n" + "x<sub>2</sub> = " + ((-b - Math.sqrt(delta)) / (2 * a));
    }
    else {
        showResult.innerHTML = "x = " + (-c / b);
    }
    showDisplay.innerHTML = a + "x<sup>2</sup> + " + b + "x + " + c + " = 0";

    return false;
}