function Tinh() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;

    if (a == "" || b == "") {
        document.getElementById("error").innerHTML = "Dữ liệu không đủ";
    } else {
        document.getElementById("error").innerHTML = ""
        if (isNaN(a) || isNaN(b)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào ko hợp";

        } else {
            document.getElementById("ptdang").innerHTML = a + "x" + "+" + b + "= 0";
            if (a == 0) {
                document.getElementById("show-result").innerHTML = "Phương trình vô nghiệm";
            } else {
                x = parseInt(-b) / parseInt(a);
                document.getElementById("show-result").innerHTML = "x= " + x;
            }
        }
    }
    return false;
}