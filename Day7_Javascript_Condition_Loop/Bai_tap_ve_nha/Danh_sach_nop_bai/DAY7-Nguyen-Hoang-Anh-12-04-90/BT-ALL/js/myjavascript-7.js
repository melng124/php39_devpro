function checkMaxMin() {
    var a = document.getElementById('num-a').value;
    a = parseInt(a);
    var b = document.getElementById('num-b').value;
    b = parseInt(b);
    var c = document.getElementById('num-c').value;
    c = parseInt(c);
    var showResultMax = document.getElementById('resultMax');
    var showResultMin = document.getElementById('resultMin');
    var max = Math.max(a, b, c);
    var min = Math.min(a, b, c);
    showResultMax.innerHTML = "Số lớn nhất: " + "<b>" + max + "</b>";
    showResultMin.innerHTML = "Số nhỏ nhất: " + "<b>" + min + "</b>";

    return false;
}