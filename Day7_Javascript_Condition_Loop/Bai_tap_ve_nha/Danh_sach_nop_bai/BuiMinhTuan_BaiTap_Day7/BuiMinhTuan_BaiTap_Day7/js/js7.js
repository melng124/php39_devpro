function timminmax() {
    var x = document.getElementById('number-a').value;
    var y = document.getElementById('number-b').value;
    var z = document.getElementById('number-c').value;
    var a = parseInt(x);
    var b = parseInt(y);
    var c = parseInt(z);

    var timmax ="max la: " + Math.max(a,b,c);
    document.getElementById("show-result2").innerHTML = timmax;
    var timmin = "min la: " + Math.min(a,b,c);
    document.getElementById("show-result").innerHTML = timmin;
}
