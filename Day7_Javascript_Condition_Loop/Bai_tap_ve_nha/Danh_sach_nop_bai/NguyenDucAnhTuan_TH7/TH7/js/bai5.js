function fnc() {
    var a = parseInt(document.getElementById("inputA").value);
    if(a<2){
        showResult.innerHTML=(a+" Không là số nguyên tố");
    }
    var count=0;
    for(var i=2; i<=Math.sqrt(a);i++){
        if(a%i==0){
            count++;
        }
    }
    if(count==0){
        showResult.innerHTML=(a+ " là số nguyên tố");
    }
    else{
        showResult.innerHTML=(a+" Không là số nguyên tố");
    }
    return false;
}