function checking() {
    var number=document.getElementById("input-a").value;
    var a=parseInt(number);
    var text=document.getElementById("result");
    if (number==""||isNaN(a)==true){
        text.innerHTML="Thông số nhập vào không đúng";
    }
    else {
        var t=1;
        if (a<2){
            text.innerHTML=+a+ " không phải là số nguyên tố";
            return false;
        }
        else for (var i=2;i<=Math.sqrt(a);i++){
            if (a%i==0){
                t=0;
            }

        }
        if (t==1){
            text.innerHTML=+a + " là số nguyên tố";
        }
        else text.innerHTML=+a + " không phải là số nguyên tố";


    }
}