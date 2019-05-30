$(document).ready(function () {
    $("#click").click(function () {
        function getCurrentDateTime() {
            var currentdate = new Date();
            var datetime = currentdate.getDate() + "/"
                + (currentdate.getMonth()+1)  + "/"
                + currentdate.getFullYear() + " "
                + currentdate.getHours() + ":"
                + currentdate.getMinutes();
            return datetime;
        }

            var message=$("#chat").val();
        var show="<div style='float: left'><img src='../images/ex2.png'></div>"
        var showmessage=$("#show-chat").html();
        $("#show-chat").html(showmessage+"<div style='float: none; padding-bottom: 60px;border-bottom: 1px dashed black'>"+show+ "<div style='margin-left: 5px; margin-top: 10px; float: left; display: auto;'> <span style='color: blue'>php39</span> <br>"+message+"</div>"+"<div style='position: absolute; margin-left: 150px' >"+getCurrentDateTime()+"</div>"+"</div>");
    })
})