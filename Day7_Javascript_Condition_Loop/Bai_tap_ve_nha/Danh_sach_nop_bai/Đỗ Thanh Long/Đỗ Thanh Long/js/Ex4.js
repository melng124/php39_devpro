function solution() {
    var numbera=document.getElementById("input-a").value;
    var numberb=document.getElementById("input-b").value;
    var numberc=document.getElementById("input-c").value;
    var a=parseInt(numbera);
    var b=parseInt(numberb);
    var c=parseInt(numberc);
    var warning=document.getElementById("output-equation");
    var result=document.getElementById("output-x");
    if (numbera==""||numberb==""||numberc==""||isNaN(a)==true||isNaN(b)==true||isNaN(c)==true){
        warning.innerHTML="Các hệ số nhập vào không đúng";
        
    } 
    else if (a==0){
        if (b==0){
            if (c==0){
                warning.innerHTML="0 = 0";
                result.innerHTML="Phương trình vô số nghiệm";

            }
            else {
                warning.innerHTML=+c + "=0";
                result.innerHTML="Phương trình vô nghiệm"
            }
        }
        else {
            warning.innerHTML=+b+"x "+ " + " +c + " =0 ";
            result.innerHTML="x= "+(-c/b);
        }
    }
    else {
        warning.innerHTML=+a+"x"+"<sup>2</sup> "+ " + " +b+"x "+ "+ " +c + " =0 ";
        var delta=b*b-4*a*c;
        var x1=(b-Math.sqrt(delta))/(2*a);
        var x2=(b+Math.sqrt(delta))/(2*a);
        if (delta<0){
            result.innerHTML="Phương trình vô nghiệm";
        }
        else if(delta==0){
            result.innerHTML="X<sub>1</sub> = X<sub>2</sub> = "+x1;
        }

        else {
            result.innerHTML="X<sub>1</sub> = "+x1+" X<sub>2</sub> = "+x2;
        }
    }
}