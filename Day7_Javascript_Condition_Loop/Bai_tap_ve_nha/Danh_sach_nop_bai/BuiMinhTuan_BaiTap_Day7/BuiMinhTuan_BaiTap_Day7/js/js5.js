function kiemtrasnt()
{
    var a = document.getElementById('number-a').value;
    var n = parseInt(a);
    var flag = true;

    if (n < 2){
        flag = false;
    }
    else{
        for (var i = 2; i < n-1; i++)
        {
            if (n % i == 0){
                flag = false;
                break;
            }
        }
    }


    if (flag == true){
        var kiemtra = n +" là sô nguyên tố ";
        document.getElementById("show-result").innerHTML = kiemtra;
    }
    else{
        var kiemtra = n +" không phải là sô nguyên tố ";
        document.getElementById("show-result").innerHTML = kiemtra;
    }
}