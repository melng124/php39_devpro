function tongab() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    var tong ="a + b = " + (parseInt(a)+parseInt(b));
    document.getElementById("show-result").innerHTML = tong;
    return false;
}
function hieuab() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    var hieu ="a - b = " + (parseInt(a)-parseInt(b));
    document.getElementById("show-result").innerHTML = hieu;
    return false;
}
function tichab() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    var tich ="a * b = " + (parseInt(a)*parseInt(b));
    document.getElementById("show-result").innerHTML = tich;
    return false;
}
function thuongab() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    var thuong ="a / b = " + (parseInt(a)/parseInt(b));
    document.getElementById("show-result").innerHTML = thuong;
    return false;
}
function layduab() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    var laydu ="a % b = " + (parseInt(a)%parseInt(b));
    document.getElementById("show-result").innerHTML = laydu;
    return false;
}
function tangasau() {
    var a = document.getElementById('number-a').value;
    var tanga ="a++ = " + (parseInt(a++));
    document.getElementById("show-result").innerHTML = tanga;
    return false;
}
function tangatruoc() {
    var a = document.getElementById('number-a').value;
    var tanga ="++a = " + (parseInt(++a));
    document.getElementById("show-result").innerHTML = tanga;
    return false;
}
function giamasau() {
    var a = document.getElementById('number-a').value;
    var giama ="a-- = " + (parseInt(a--));
    document.getElementById("show-result").innerHTML = giama;
    return false;
}
function giamatruoc() {
    var a = document.getElementById('number-a').value;
    var giama ="--a = " + (parseInt(--a));
    document.getElementById("show-result").innerHTML = giama;
    return false;
}