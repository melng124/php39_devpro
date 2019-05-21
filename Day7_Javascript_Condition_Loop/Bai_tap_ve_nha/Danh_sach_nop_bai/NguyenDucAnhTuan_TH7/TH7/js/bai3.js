function fnc() {
    var a= parseInt(document.getElementById("inputA").value);
    var b= parseInt(document.getElementById("inputB").value);
    var x= (-b/a);
    if(a==0){
        document.getElementById("showResult").innerHTML= "Phương trình vô nghiệm";
    }
    else{
        document.getElementById("showInfor").innerHTML="<p style='color: black'>Phương trình bậc nhất có dạng:<br/></p>"+a+"x + "+b+"&nbsp= 0";
        document.getElementById("showResult").innerHTML= "x = "+x;
    }
    return false;
}