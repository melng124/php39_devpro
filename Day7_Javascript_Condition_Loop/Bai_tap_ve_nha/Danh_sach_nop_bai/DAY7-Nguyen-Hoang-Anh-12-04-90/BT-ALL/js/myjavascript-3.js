function resolve() {
    var a = document.getElementById('num-a').value;
    a = parseInt(a);
    var b = document.getElementById('num-b').value;
    b = parseInt(b);
    var showDisplay = document.getElementById('display');
    var showResult = document.getElementById('result');
    if (a != 0) {
        var x = -b / a;
        showDisplay.innerHTML = a + "x  + " + b + " = 0";
        showResult.innerHTML = "x = " + x;
    }
    else
        alert("Hãy nhập a khác 0")

    return false;
}