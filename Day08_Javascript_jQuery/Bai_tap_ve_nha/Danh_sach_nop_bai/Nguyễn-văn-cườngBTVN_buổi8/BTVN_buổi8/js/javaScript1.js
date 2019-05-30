function validate(a, b, c, d, e) {
    var error = document.getElementById('show-error');
    var mail = document.getElementById('email');
    var name1 = document.getElementById('name');
    var note = document.getElementById('notes');
    var tele = document.getElementById('telephone');
    var gues = document.getElementById('guests');
    var resu = document.getElementById('show-result');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (a == "" || b == "" || c == "" || d == "" || e == "") {
        error.innerHTML = "Cần nhập đủ các trường!!!";
        resu.innerHTML="";
        mail.innerHTML="";
        name1.innerHTML="";
        note.innerHTML="";
        tele.innerHTML="";
        gues.innerHTML="";
        return false;
    } else if (filter.test(a) == false) {
        error.innerHTML ="Bạn cần nhập lại email";
        resu.innerHTML="";
        mail.innerHTML="";
        name1.innerHTML="";
        note.innerHTML="";
        tele.innerHTML="";
        gues.innerHTML="";
        return false;
    }
    return true;
}

function hienThi() {
    var a = document.getElementById("text-a").value;
    var b = document.getElementById("text-b").value;
    var c = document.getElementById("text-c").value;
    var d = document.getElementById("text-d").value;
    var e = document.getElementById("text-e").value;

    if (validate(a, b, c, d, e)== true) {
        var resu = document.getElementById('show-result');
        var mail = document.getElementById('email');
        var name1 = document.getElementById('name');
        var note = document.getElementById('notes');
        var tele = document.getElementById('telephone');
        var gues = document.getElementById('guests');
        resu.innerHTML="Các thông tin User vừa nhập: ";
        mail.innerHTML="Your email address: "+a;
        name1.innerHTML="Name: "+b;
        note.innerHTML="Notes: "+c;
        tele.innerHTML="Telephone number: "+d;
        gues.innerHTML="No. of guests: "+e;
        error.innerHTML = ""
    }
}