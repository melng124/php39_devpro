function fnc() {
    var a = parseInt(document.getElementById("inputA").value);
    var gt=1;
    for(var i=1;i<=a;i++){
        gt=gt*i;
        showResult.innerHTML=(a+"!="+gt);
    }
    return false;
}