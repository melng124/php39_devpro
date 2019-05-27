
    //auto expand textarea
    function adjust_textarea(h) {
        h.style.height = "20px";
        h.style.height = (h.scrollHeight)+"px";
    }
    function validateForm(a,b,c,d) {
        var error = document.getElementById("show-error");
        if (( a === '' || b === '' || c === '' || d === ''))
        {
            error.innerText=" Cần nhập đủ trường";
            return false;
        }
        else if ( b !== " @ ") {
            error.innerText = " cần nhập email";
            return false;
        }
        return true;
    }
    function buttom() {
        var a = document.getElementById("email").value;
        var b = document.getElementById("name").value;
        var c = document.getElementById("telephone").value;
        var d = document.getElementById("notes").value;
        if (validateForm(a,b,c,d) === true) {
            alert("your Email address:" + a + "<br>"
            + " Name " + b + "<br>" + " Notes" + d +"<br>" + " Telephone number " + c

            );
        }

    }