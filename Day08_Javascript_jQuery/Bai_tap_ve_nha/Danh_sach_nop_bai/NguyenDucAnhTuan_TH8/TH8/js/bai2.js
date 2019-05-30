function getCurrentDateTime() {
    var currentdate = new Date();
    var datetime = currentdate.getDate() + "/"
        + (currentdate.getMonth() + 1) + "/"
        + currentdate.getFullYear() + " "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes();
    return datetime;
}
function sent() {
    var sent = document.getElementById("inputSent").value;
    var newmess = document.createElement("li");
    newmess.innerHTML = ("<b style='color: #005cbf;vertical-align: top;'>php39</b><i style='float: right' class=\"fas fa-snowflake\">"
                          +getCurrentDateTime()+"</i><p style='margin-top: -15px;'>"+sent+"</p>");
    showResult.appendChild(newmess);
}