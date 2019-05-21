function checkString() {
    var inputString = document.getElementById('inputString').value;
    var testString = document.getElementById('testString').value;
    var test2String = inputString.search(testString);
    var showResult = document.getElementById('result');
    if (test2String == -1) {
        showResult.innerHTML = "Chuỗi " + "<b>" + testString + "</b>"  + " KHÔNG tồn tại trong chuỗi ban đầu " + "<b>" + inputString + "</b>";
    }
    else
        showResult.innerHTML = "Chuỗi " + "<b>" + testString + "</b>" + " tồn tại trong chuỗi ban đầu " + "<b>" + inputString + "</b>";
    return false;
}