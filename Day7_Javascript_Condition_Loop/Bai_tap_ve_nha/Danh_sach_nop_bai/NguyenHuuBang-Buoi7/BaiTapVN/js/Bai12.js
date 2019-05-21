function HienT(){
    var a = document.getElementById("a").value;
    document.write("<table border='1'>");
    for(i=1;i<=a;i++){
        document.write("<tr>");
        for(j=1;j<=i;j++){
            document.write("<td>");
            document.write("*")
            document.write("</td>");
        }
        document.write("</tr>");

    }
    document.write("</table>");
    return false;
}