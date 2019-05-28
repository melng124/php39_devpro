function sendMessage() {
    var message = document.getElementById("message").value;
    var wrapContent = document.getElementById("messageContent");
    // console.log(wrapContent);
    var result = '<div class="wrap-content row" >';
    result += '<div class="col-md-8 col-12">';
    result += '<span class="chat-icon">U</span>';
    result += '<div class="content-content">';
    result += '<h5 class="chat-username">php39</h5>';
    result += '<p class="chat-text">Xin chào</p>';
    result += '</div>';
    result += '</div>';
    result += '<div class="col-md-4 col-12">';
    result += '<div class="datetime-wrap">';
    result += '<i class="fas fa-certificate"></i> <span class="chat-datetime">22/4/2019 17:50</span>';
    result += '</div>';
    result += '</div>';
    result += '</div>';
    wrapContent.innerHTML += result;
    return false;
}