function Form(a) {
    if (a == ''){
        document.getElementById('error').innerHTML = 'Không được để trống dữ liệu';
        document.getElementById('kq').innerHTML = '';
        return false;

    }

    else if (isNaN(a) ) {
        document.getElementById('error').innerHTML = '';
        document.getElementById('error').innerHTML = "Cần nhập dữ liệu là số";
        return false;
    }
    document.getElementById('error').innerHTML = '';
    return true;
}
function Tinh() {
    var a = document.getElementById('a').value;
    var dem=0;
    if (Form(a) == true) {
        for (var i=2;i<=a;i++)
        {
            for (var j=1;j<=i;j++)
            {
                if(i%j==0)
                    dem++;
            }
            if(dem==2)
               document.getElementById('kq').innerHTML = i;
            dem=0;
        }
    }
    return false;
}