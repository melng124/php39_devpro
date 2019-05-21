function fnc() {
    var str1 = document.getElementById("inputStr1").value;
    var str2 = document.getElementById("inputStr2").value
    var count= str1.search(str2);
    console.log(count);
    if(count==-1){
        showResult.innerHTML=("Chuỗi <b>"+str2+"</b> không tồn tại trong chuỗi ban đầu <b>"+str1+"</b>");
    }
    else{
        showResult.innerHTML=("Chuỗi <b>"+str2+"</b> tồn tại trong chuỗi ban đầu <b>"+str1+"</b>");
    }
    return false;
}