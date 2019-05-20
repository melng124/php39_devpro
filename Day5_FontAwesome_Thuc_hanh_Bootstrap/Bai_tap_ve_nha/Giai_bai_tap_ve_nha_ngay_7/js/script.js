function checkValidate(a, b) {
    if (a == '' || b == '') {
        document.getElementById('show-error').innerText = "Không được để trống dữ liệu";
        document.getElementById('show-result').innerText = '';
        return false;
    }
    if (isNaN(a) || isNaN(b)) {
        document.getElementById('show-error').innerText = "Cần nhập dữ liệu là số";
        document.getElementById('show-result').innerText = '';
        return false;
    }

    document.getElementById('show-error').innerText = '';
    document.getElementById('show-result').innerText = '';
    return true;
}

function add() {
    // var a = document.getElementById('number-a').value;
    // var b = document.getElementById('number-b').value;
    console.log("a = " + a);
    var showResult = '123';
    var showResult = document.getElementById('show-result');
    if(a > 0) {
        showResult.innerHTML = "Dsadsa";
    }
    else {
        showResult = 'b';
    }
    console.log(showResult);
    // if (checkValidate(a, b)) {
    //     document.getElementById('show-result').innerHTML = "a + b = " + (parseInt(a) + parseInt(b));
    // }
}

function sub() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    if (checkValidate(a, b)) {
        document.getElementById('show-result').innerHTML = "<br />a - b = " + (parseInt(a) - parseInt(b));
    }
}

function multi() {
    var a = document.getElementById('number-a').value;
    var b = document.getElementById('number-b').value;
    if (checkValidate(a, b)) {
        document.getElementById('show-result').innerHTML = "a * b = " + (parseInt(a) * parseInt(b));
    }
}
var a = 6;
var sum = 9;
sum -= ++a + --a - 2 + (a++ * 2) + a--;
// var sum = (++a + 4) * (++a - 1 + a++);


// console.log(sum);
// if (checkbox.checked == true) {
//     document.getElementById('showinfo').innerHTML = "Name:" + value1 +"<br/>Email:" +value2 +"<br/>Contact No:"+value3 +"<br/>Gender:"+checkbox.value;
// }

// var string = 'beginer javascript today';
// console.log(string.indexOf('javascript1'));
//
// var a = -4;
// var sum1 = --a + a++ * 2;
// console.log(sum1)
// var b = 9;
// var sum2 = 10;
// sum2 %= b-- * b++ - 2 + --b % 2;
// console.log(sum2);
// var c = 4;
// var d = c++;
// var sum3 = c * d++ * 2 - c-- * d++;
// console.log(sum3);

// solver(5);
function solver(number) {
    for(var i = 0; i <= number; i++){
        // if (i == number) {
            document.write(+ i + "x");
        // }
    }
    return false;
}

// alert("đoan 1");
// alert("đoan 2");
// window.onload = function() {
//     alert("3")
// }
// // alert("đoan 3");
// alert("đoan 4") ;
console.log("1");
// console.log("2");
window.onload = function() {
    console.log("2");
}
console.log("3");
console.log("4");