function validate(a) {
    var showerror = document.getElementById("show-error");
    var showResult = document.getElementById("show-result1");
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

function cl() {
    var a = document.getElementById("a").value;
    if (validate(a) === true) {
        document.getElementById("show-result3").innerText=" các số chẵn lẻ từ 1 -"+ parseInt(a) + " là";
        for ( var i = 1; i < parseInt(a); i ++){
            if ( i % 2 === 0){
                document.getElementById("show-result1").innerText=" , " + i;
            }
            else{
                document.getElementById("show-result2").innerText= " , " + i;

            }
        }
    }
    }



