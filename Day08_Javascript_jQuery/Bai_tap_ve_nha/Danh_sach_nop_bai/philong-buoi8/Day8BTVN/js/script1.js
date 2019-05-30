function validate(c, d) {
    var showerror = document.getElementById("show-error");
    var showResult = document.getElementById("show-result1");
    var showResult1 = document.getElementById("show-result2");
    if ( c === "" || d === "" ){
        showerror.innerText="mời nhập ký tự";
        return false;
    }
    else if ( isNaN(c) || isNaN(d)){
        showerror.innerText= " mời nhập số ";
        return false;
    }
    else{
        showerror.innerText=" ";
        return true;
    }


    return true;
}

function cvdt() {
    var c = document.getElementById("a").value;
    var d = document.getElementById("b").value;
    if (validate(c, d) == true){
        var dientich = parseInt(c) * parseInt(d);
        var chuvi = (parseInt(c) + parseInt(d))*2;
        document.getElementById("show-result1").innerHTML=" Diện tích = " + dientich + "m<sup>2</sup>";
        document.getElementById("show-result2").innerHTML=" Chu vi  = " + chuvi +"m";
        }
    }

