
function solve(number) {

    for (var i=1;i<=number;i++){
        if (i==number){
            document.write(+i);
        }
        else document.write(+i+" X ");

    }

}

function solution() {
    var number1=document.getElementById("input").value;
    var a=parseInt(number1);
    var text=document.getElementById("result");
    if (number1==""||isNaN(a)==true){
        text.innerHTML="Thông số nhập vào không đúng";
    }
    else text.innerHTML=+solve(a);

}