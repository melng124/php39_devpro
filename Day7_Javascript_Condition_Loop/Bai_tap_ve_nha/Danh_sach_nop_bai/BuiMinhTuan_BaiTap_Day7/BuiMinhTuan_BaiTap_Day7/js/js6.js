function Checkchuoi() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;

    var string = a;
     ktc = parseInt(string.indexOf(b));
    if (ktc == -1){
        var ktcd = "chuỗi " +"<b>"+ b +"</b>"+ " không tồn tại trong chuỗi " +"<b>"+ a +"</b>" ;
        document.getElementById("show-result2").innerHTML = ktcd
    }
    else {
        var ktcd = "chuỗi " +"<b>"+ b +"</b>"+  " có tồn tại trong chuỗi " +"<b>"+ a +"</b>" ;
        document.getElementById("show-result2").innerHTML = ktcd;
    }
}