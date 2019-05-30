function validateForm(a) {
    var thongbao = document.getElementById('thongbao');
    var ketqua = document.getElementById('show-result');
    if(a == ''){
        thongbao.innerHTML = 'không để trống dữ liệu';
        ketqua.innerHTML = "";
        return false;
    }
    else if(isNaN(a)){
        thongbao.innerHTML = 'Cần nhập dữ liệu là số';
        ketqua.innerHTML = "";
        return false;
    }

    thongbao.innerHTML = "";
    return true;

}
function kiemTraChanLe() {
    var i;
    var a = document.getElementById('numbera').value;
    var evennumber ="";
        var odd ="";
    if (validateForm(a)==true){
        for (i=1;i<=a;i++){
            if (i%2==0){
                evennumber += i+" ";
            }
        }
        // document.getElementById('show-result').innerHTML = "các số chẵn là: " +evennumber;
        for (i=1;i<=a;i++){
            if (i%2!=0){
               odd +=i +" ";
            }
        }
        document.getElementById('show-result').innerHTML = "Các số chẵn là: " + evennumber + "<br>" + " Các số lẻ là: " +odd;
        // document.getElementById('show-result').innerHTML = "các số lẻ là: " +odd;
    }
}