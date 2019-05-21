function giaiptbacnhat() {
    var x = document.getElementById('number-a').value;
    var y = document.getElementById('number-b').value;
    var a = parseInt(x);
    var b = parseInt(y);

    var giaipt = a+"x"+"+"+b+"="+"0";
    document.getElementById("show-result1").innerHTML = giaipt;
    if(a==0){
        if (b==0) {
            var giaipt =" phương trình có vô số nghiệm ";
            document.getElementById("show-result2").innerHTML = giaipt;
        }
        else {
            var giaipt =" phương trình không có nghiệm nào";
            document.getElementById("show-result2").innerHTML = giaipt;
        }
    }
    else {
        var giaipt ="phương trình có 1 nghiệm là :" + ((-b)/a );
        document.getElementById("show-result2").innerHTML = giaipt;
    }
}