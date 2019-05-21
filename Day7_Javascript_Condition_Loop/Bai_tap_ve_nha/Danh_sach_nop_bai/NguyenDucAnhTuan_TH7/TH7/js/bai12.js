function fnc() {
    var a =parseInt(document.getElementById("inputA").value);
    for(var i=1;i<=a;i++){
        for(var j=1;j<=i;j++){
            document.write("*");
        }
        document.write("<br/>");
    }
}