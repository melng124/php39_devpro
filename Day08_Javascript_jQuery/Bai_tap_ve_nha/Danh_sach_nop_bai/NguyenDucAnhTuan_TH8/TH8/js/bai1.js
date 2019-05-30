function check() {
    var email = document.getElementById("inputEmail").value;
    var name = document.getElementById("inputName").value;
    var phone = document.getElementById("inputPhone").value;
    var note = document.getElementById("inputNote").value;
    var number = document.getElementById("inputNumber").value;
    // var vitri = email.indexOf("@");
    // var daucham = email.lastIndexOf(".");
    // var khoangtrang = email.indexOf(" ");
    // if (email == ""||name == ""||phone == ""||note == ""|| number == "") {
    //     error.innerHTML = ("Cần nhập đủ các trường hợp!");
    //     return false;
    // }
    // else if(vitri == -1||vitri<1||(daucham<=vitri+1&&daucham>=email.length-1)||khoangtrang!=-1){
    //     error.innerHTML=("Cần nhập format email cho trường này");
    //     return false;
    // }
    // else
    //     return true;
    var regx = /^([a-zA-Z0-9\.-]+)@([a-z0-9-]+).([a-z]{2,8})(.[a-z]{2,8})$/;
    if(email == ""||name == ""||phone == ""||note == ""|| number == ""){
        error.innerHTML = ("Cần nhập đủ các trường hợp!");
        showResult.innerHTML="";
        return false;
    }
    else if(regx.test(email)==false){
        error.innerHTML = ("Cần nhập đúng định dạng gmail!");
        showResult.innerHTML=("");
        return false;
    }
    else
        return true;
}
function show() {
    if(check()==true){
        var email = document.getElementById("inputEmail").value;
        var name = document.getElementById("inputName").value;
        var phone = document.getElementById("inputPhone").value;
        var note = document.getElementById("inputNote").value;
        var number = document.getElementById("inputNumber").value;
        console.log(email.length-1);
        error.innerHTML = ("");
        showResult.innerHTML=("Email:"+email+"<br/>Name:"+name+"<br/>phone:"+phone+"<br/>Note:"+note+"<br/>No. of guests:"+number);
    }
    return false;
}