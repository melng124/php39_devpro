function giaiptboc2(form){
    var x = document.getElementById('number-a').value;
    var y = document.getElementById('number-b').value;
    var z = document.getElementById('number-c').value;
    var a = parseInt(x);
    var b = parseInt(y);
    var c = parseInt(z);
    var giaipt = a+"x"+"2"+"+"+b+"x"+"+"+"c"+"="+"0";
    document.getElementById("show-result1").innerHTML = giaipt;

    delta=(b*b-4*a*c)
    if(delta ==0){
        var giaipt =" phương trình có nghiệm kép x1,x2 = " + (-b/(2*a));
        document.getElementById("show-result2").innerHTML = giaipt;
    }
    else if(delta<0){
        var giaipt =" phương trình vô nghiệm";
        document.getElementById("show-result2").innerHTML = giaipt;
    }
    else{
        var giaipt ="phương trình có 2 nghiệm phân biệt là:" + "<br>" +
            "x1 =" + (-b-Math.sqrt(delta))/(2*a) +"<br>" +
            "x2 =" + (-b+Math.sqrt(delta))/(2*a)
        ;
        document.getElementById("show-result2").innerHTML = giaipt;
    }
}