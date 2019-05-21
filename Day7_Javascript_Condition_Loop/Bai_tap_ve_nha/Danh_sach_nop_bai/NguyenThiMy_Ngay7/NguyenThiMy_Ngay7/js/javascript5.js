function hienThiMaxMin() {
    var a = document.getElementById('sothunhat').value;
    a = parseInt(a);
    var b = document.getElementById('sothuhai').value;
    b = parseInt(b);
    var c = document.getElementById('sothuba').value;
    c = parseInt(c);
    // if (a == '' || b=='' || c=='') {
    //     document.getElementById('thongbao').innerText="không được để trống dữ liệu";
    // }
    if (isNaN(a) == true && isNaN(b) == true &&isNaN(c)==true) {
        document.getElementById('thongbao').innerText="Cần nhập dữ liệu là số";
        return false;
    }
    else {
      var max = a;
      if (max<b){
          max=b;
      }
     if (max<c) {
         max=c;
     }
     var min = a;
     if (min>b){
         min = b;
     }
        if (min>c){
            min = c;
        }
        document.getElementById('ketqua').innerHTML="Số lớn nhất là : " + max + "<br>" + "Số  nhỏ nhất là : " + min;
    }
}