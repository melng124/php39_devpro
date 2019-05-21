function fnc() {
    var a = parseInt(document.getElementById("inputA").value);
    var b = parseInt(document.getElementById("inputB").value);
    var c = parseInt(document.getElementById("inputC").value);
    var delta = Math.pow(b,2)-(4*a*c);
    if(a==0){
        // document.getElementById("showInfor").innerHTML="<p style='color: black'>Phương trình bậc 2 một ẩn có dạng:<br/></p>"
        //     +a+"x<sup>2</sup> + "+b+"x + "+c+"&nbsp= 0";
        document.getElementById("showResult").innerHTML="Không phải phương trình bậc 2 một ẩn";
    }
    else if(a!=0&&delta<0){
        document.getElementById("showInfor").innerHTML="<p style='color: black'>Phương trình bậc 2 một ẩn có dạng:<br/></p>"
        +a+"x<sup>2</sup> + "+b+"x + "+c+"&nbsp= 0";
        document.getElementById("showResult").innerHTML="Phương trình vô nghiệm";
    }
    else if(a!=0&&delta>0){
        var x1= (-b-Math.sqrt(delta))/(2*a);
        var x2= (-b+Math.sqrt(delta))/(2*a);
        document.getElementById("showInfor").innerHTML="<p style='color: black'>Phương trình bậc 2 một ẩn có dạng:<br/></p>"
            +a+"x<sup>2</sup> + "+b+"x + "+c+"&nbsp= 0";
        document.getElementById("showResult").innerHTML="x1 = "+x1+"<br/>x2= "+x2;
    }
    else {
        var x= -b/(2*a);
        document.getElementById("showInfor").innerHTML="<p style='color: black'>Phương trình bậc 2 một ẩn có dạng:<br/></p>"
            +a+"x<sup>2</sup> + "+b+"x + "+c+"&nbsp= 0";
        document.getElementById("showResult").innerHTML="x1 = x2 = "+x;
    }
    return false;
}