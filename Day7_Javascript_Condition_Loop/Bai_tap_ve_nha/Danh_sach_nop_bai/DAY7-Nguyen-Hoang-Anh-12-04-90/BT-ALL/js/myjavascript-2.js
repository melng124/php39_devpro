function checkInput() {
    var a = document.getElementById('number').value;
    a = parseInt(a);
    var showResult = document.getElementById('result');
    if (a >= 1 && a <= 10) {
        showResult.innerHTML = "Số " + a + " nằm trong phạm vi từ 1 - 10";
    }
    else if (a >= 50 && a <= 100) {
        showResult.innerHTML = "Số " + a + " nằm trong phạm vi từ 50 - 100";
    }
    else
        showResult.innerHTML = "Số " + a + " Không nằm trong phạm vi từ 1-10 hoặc 50 - 100";
    return false;
}