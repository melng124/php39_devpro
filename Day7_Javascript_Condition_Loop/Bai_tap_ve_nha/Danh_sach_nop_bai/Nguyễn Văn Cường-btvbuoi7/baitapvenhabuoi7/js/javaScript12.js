function test() {
    var a=document.getElementById("number1").value;
    var n = parseInt(a);
    var html="";
    for (var i = 1; i <= n; i++)
    {
        for (var j = 1; j<=i; j++){
            // In ra vị trí của ma trận [i][j]
            html+="*";
        }
        // Xuống hàng
        html+=("<br/>");
    }
    document.getElementById("so").innerHTML=html;
}
