function MaxMin() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var c = document.getElementById("c").value;
    if (a == "" || b == "" || c=="") {
        document.getElementById("error").innerHTML = "Dữ liệu không đủ";
    } else {
        document.getElementById("error").innerHTML = "";
        if (isNaN(a) || isNaN(b)||isNaN(c)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";

        }else {

            document.getElementById("kq").innerHTML="Số lớn nhất là : " +Math.max(a,b,c)+"<br/>"+ "Số nhỏ nhất là : " +Math.min(a,b,c);

        }
    }
    return false;
}