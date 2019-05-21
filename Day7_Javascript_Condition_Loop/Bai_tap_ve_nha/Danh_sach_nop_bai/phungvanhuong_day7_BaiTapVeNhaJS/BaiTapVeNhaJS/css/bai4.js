function Tinh() {
    var a = document.getElementById("a").value;
    var b = document.getElementById("b").value;
    var c = document.getElementById("c").value;

    if (a == "" || b == "" || c=="") {
        document.getElementById("error").innerHTML = "Dữ liệu nhập vào không đủ";
    } else {
        document.getElementById("error").innerHTML = ""
        if (isNaN(a) || isNaN(b)||isNaN(c)) {
            document.getElementById("error").innerHTML = "Gía trị nhập vào không phù  hợp";

        } else {
            document.getElementById("dang").innerHTML = a + "x^2" + "+" + b +"x"+c+ "= 0";
            if(a==0)
            {
                if((b==0)&&(c==0))
                {
                    document.getElementById("show-result").innerHTML="Phương trình đã cho có vô số nghiệm";
                }else if((b==0)&&(c!=0))
                {
                    document.getElementById("show-result).innerHTML="Phương trình  đã cho vô nghiệm";
                }else {
                    x=parseInt(-c)/parseInt(b);
                    document.getElementById("show-result").innerHTML="x =" + x;
                }
            }else {
                delta = b*b-4*a*c;
                if(delta>=0){
                    x1=(-b+Math.sqrt(delta))/(2*a);
                    x2=(-b-Math.sqrt(delta))/(2*a);
                    document.getElementById("show-result").innerHTML="x1 = "+x1 + "<br/>"+"x2 = "+x2;

                }else {
                    document.getElementById("show-result").innerHTML="Phương trình đã cho vô nghiệm";
                }
            }
        }
    }
    return false;
}