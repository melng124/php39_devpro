function getCurrentDateTime() {
    var currentdate = new Date();
    var datetime = currentdate.getDate() + "/"
        + (currentdate.getMonth() + 1) + "/"
        + currentdate.getFullYear() + " "
        + currentdate.getHours() + ":"
        + currentdate.getMinutes();
    // + currentdate.getSeconds();

    return datetime;
}

function displayForm() {
    var showAvatar = $('#avatar').css('display', 'block');
    var showUser = $('#user').css('display', 'block');
    var showTime = $('#time').css('display', 'block');
    showTime.html("<i class=\"fas fa-star-of-life\" style='color: #777777'></i> " + getCurrentDateTime());
    var showLine = $('#line').css('display', 'block');
}

// Bài này e làm jquery ko dc. dùng javascript thuần lại dc
function chatForm() {
    var inputChat = document.getElementById('messages');
    var showChat = document.getElementById('displayMessages');

    // Tạo 1 thẻ div rỗng
    var newChat = document.createElement("div");
    // Truyền vào trong thẻ div rỗng giá trị = giá trị nhập vào input -> Thẻ div đã có nội dung
    newChat.innerHTML = inputChat.value;
    // Gắn thông tin thẻ div mới tạo vào sau nơi hiển thị đoạn text
    showChat.appendChild(newChat);
    // Sau mỗi lần gửi sẽ tự xóa thông tin trong ô input "Nhập tin nhắn"
    inputChat.value = "";

    return false;
}




