function checking() {
    var a=document.getElementById("begin-input").value;
    var b=document.getElementById("input-to-check").value;
    var i=0;
    var t=0;
    var text=document.getElementById("result");
    while(i<b.length-1){
        for (var j=0;j<a.length;j++){
            t++;
            if (a[j]==b[i]){
                i++;
            }
            else {
                i=0;
            }
            if (i==b.length-1) {
                break;
            }

        }
        if (t==a.length){
            break;
        }

    }
    console.log(b.length);
    console.log(i);
    if (i==b.length-1){
        text.innerHTML="<span style='font-weight: normal'>Chuỗi </span>" +b+"<span style='font-weight: normal'> tồn tại trong chuỗi ban đầu </span>"+a;
    }
    else {
        text.innerHTML="<span style='font-weight: normal'>Chuỗi </span>" +b+"<span style='font-weight: normal'> không tồn tại trong chuỗi ban đầu </span>"+a;
    }


}