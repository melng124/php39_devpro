function test() {
    var a = document.getElementById("number1").value;
    var so1 = parseInt(a);
    var b = document.getElementById("number2").value;
    var so2 = parseInt(b);
    var c = document.getElementById("number3").value;
    var so3 = parseInt(c);
    console.log(typeof (so1));
    var max = document.getElementById("ketqua");
    var min = document.getElementById("ketqua1");
    // var max1= Math.max(so1,so2,so3);
    // // var min1= Math.min(so1,so2,so3);

    max.innerHTML=""+Math.max(so1,so2,so3);
    min.innerHTML=""+Math.min(so1,so2,so3);
    // var array = [so1,so2,so3];
    // var max1=array[0];
    // for( var i=0;i=array.length;i++){
    //     array[i]>max1;
    //     max=array[i];
    // }
    //         max.innerHTML = "Sô lớn nhất là: " + array[i];
    // var min1=array[0];
    // for( var i=0;i=array.length;i++){
    //     array[i]<min1;
    //     min=array[i];
    // }
    // max.innerHTML = "Sô nhỏ nhất là: " + array[i];
}
