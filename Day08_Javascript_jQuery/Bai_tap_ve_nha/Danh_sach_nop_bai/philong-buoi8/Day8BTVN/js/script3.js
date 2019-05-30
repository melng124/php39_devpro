function validate(a) {
    var showerror = document.getElementById("show-error");
    var showResult = document.getElementById("show-result1");
    var showResult1 = document.getElementById("show-result2");
    if ( a === "" ){
        showerror.innerText="mời nhập ký tự";
        return false;
    }
    else if ( isNaN(a)){
        showerror.innerText= " mời nhập số ";
        return false;
    }
    else{
        showerror.innerText=" ";
        return true;
    }


    return true;
}

function bk() {
    var a = document.getElementById("a").value;
    if (validate(a) === true){
        var dientich = parseInt(a) * 3.14;
        var chuvi = parseInt(a)*2*3.14;
        document.getElementById("show-result1").innerHTML=" Diện tích = " + dientich + "m<sup>2</sup>";
        document.getElementById("show-result2").innerHTML=" Chu vi  = " + chuvi +"m";
    }
}

