function Max_Min() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var c = document.getElementById("c").value;
    if (a == "" || b == "" || c=="") {
        document.getElementById("error").innerHTML = "Dữ liệu nhập vào không đủ";
    } else {
        document.getElementById("error").innerHTML = "";
        if (isNaN(a) || isNaN(b)||isNaN(c)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào không phù hợp";

        }else {

            document.getElementById("show-result").innerHTML="Số lớn nhất là : " +Math.max(a,b,c)+"<br/>"+ "Số nhỏ nhất là : " +Math.min(a,b,c);

        }
    }
    return false;
}