$(document).ready(function () {
    $('#submit-button').click(function () {
        var mail=$('#email').val();
        var name=$('#name').val();
        var number=$('#number').val();
        var note=$('#notes').val();
        var guestN=$('#numberofguest').val();
        var text=$('#result');
        var phone=parseInt(number);
        var numberguestN=parseInt(guestN);
        function checkmail() {
            var checkmailnumber=0;
            for (var i=0;i<mail.length;i++){
                if (mail[i]=="@"){
                    checkmailnumber=1;
                    break;
                }
            }
            return checkmailnumber;

        }
        function numberCheck() {
            var checknumbernumber=1;
            if (isNaN(phone)==true) checknumbernumber=0;
            return checknumbernumber;
        }
        function checkname() {
            var checknamenumber=1;
            for (var i=0;i<name.length;i++){
                if (/^[a-zA-Z0-9- ]*$/.test(name)==false){
                    checknamenumber=0;
                    break;
                }
            }
            return checknamenumber;
        }
        function checkguestnumber() {
            var checkguestnumber=1;
            if (isNaN(numberguestN)==true) checkguestnumber=0;
            return checkguestnumber;
        }
        if (mail==""||name==""||number==""||guestN==""){
            text.html("Không được để trống dữ liệu");
            return false;
        }
        else if (checkmail()==0||checkname()==0||numberCheck()==0||checkguestnumber()==0){
            text.html("Dữ liệu sai định dạng")
        }
        else {
            text.html("Email: "+mail + "<br>"+ "Name: "+name+"<br>"+"Phone Number: "+phone +"<br>" +"Notes: " +note+ "<br>"+"No of guest: "+numberguestN)
        }




    })
})