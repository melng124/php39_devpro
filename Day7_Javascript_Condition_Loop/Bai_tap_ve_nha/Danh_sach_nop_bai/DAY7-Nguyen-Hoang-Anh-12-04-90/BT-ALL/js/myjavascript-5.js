function checkNumber() {
    var a = document.getElementById('number').value;
    a = parseInt(a);
    var showResult = document.getElementById('result');
    if (a == 1 || a == 2 || a == 3) {
        showResult.innerHTML = a + " là số nguyên tố";
    }
    else {
        // Vòng lặp bắt đầu từ 2 đến a-1 vì số a sẽ ko chia cho 1 và chính nó để check
        for (var i = 2; i < (a - 1); i++) {
            if (a % i == 0) {
                showResult.innerHTML = a + " không phải là số nguyên tố";
                break;
            }
            else
                showResult.innerHTML = a + " là số nguyên tố";
        }
    }


    return false;
}