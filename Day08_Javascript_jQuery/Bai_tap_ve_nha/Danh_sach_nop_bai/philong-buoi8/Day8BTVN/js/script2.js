
function validate(a) {
    var showerror = document.getElementById("show-error");
    document.getElementById("show-result1").innerText="";

    if ( a === "" ){
        showerror.innerText="mời nhập ký tự";
        return false;
    }
    else if ( isNaN(a)){
        showerror.innerText= " mời nhập số ";
        return false;
    }
    else{
        showerror.innerText="";
        return true
    }
    return true;
}

function dt() {
    var a = document.getElementById("a").value;
    if (validate(a) == true){
        var dientich = parseInt(a) * parseInt(a);
        var chuvi = parseInt(a) * 4;
        document.getElementById("show-result1").innerHTML=" Diện tích =  " + dientich + " m<sup>2</sup> "  ;
        document.getElementById("show-result2").innerHTML=" Chu vi  = " + chuvi +"m";
    }
}

