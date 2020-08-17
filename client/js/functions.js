function setCookie(name,value,days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(';');
    for(let i=0;i < ca.length;i++) {
        let c = ca[i];
        while (c.charAt(0)===' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function addToObject(obj,key,value){
    return obj.key=value;
}
function sendToCheckout(){
    const ids = document.getElementsByClassName('ids');
    const quantitys = document.getElementsByClassName('quantity_id');
    const sum = document.getElementById('total_sum');
    if(parseInt(sum.innerText) <=0) {
        alert('Nu aveti lucruri in cos');
        return;
    }
    let msg="";
    let object = {};
    for(let i = 0;i < ids.length;i++){
        msg += "id"+(ids[i].innerText || ids[i].textContent) + "=" + quantitys[i].value + "&";
    }
    msg+='sum='+sum.innerText;
    window.location.assign('order_processing.php?'+msg);
}
