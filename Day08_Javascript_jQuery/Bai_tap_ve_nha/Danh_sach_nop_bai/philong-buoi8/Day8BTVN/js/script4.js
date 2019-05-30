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

function bk() {
    var a = document.getElementById("a").value;
    if (validate(a) === true) {
        if ( parseInt(a)%2 === 0){
            return false;
        }
        for (var i = 3; i<parseInt(a);i++){
            var dem = 0;
            if ( parseInt(a)%i === 0){
                dem++;
                if ( dem >=2 ){
                    document.getElementById("show-result1").innerText =""
                }
                else if (dem = 1){
                        document.getElementById("show-result1").innerText=" , "+i;
                    }
                }
            }
        }
    }

}

