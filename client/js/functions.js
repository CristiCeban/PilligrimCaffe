function setCookie(name,value,days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function implode( glue, pieces ) {  // Join array elements with a string
    //
    // +   original by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // +   improved by: _argos
    return ( ( pieces instanceof Array ) ? pieces.join ( glue ) : pieces );

}

function eliminateDuplicates(arr) {
    let i,
        len = arr.length,
        out = [],
        obj = {};

    for (i = 0; i < len; i++) {
        obj[arr[i]] = 0;
    }
    for (i in obj) {
        out.push(i);
    }
    return out;
}

function setItemToCardList(id){


    if(getCookie('card-list')===null){
        setCookie('card-list',id+',','1');
    }
    else {
         let cookie = implode(',',eliminateDuplicates((getCookie('card-list')+id+',').split(',')));
         setCookie('card-list',cookie,1);
    }
    alertify.success('added with succes');
}
function getCookie(name) {
    let dc = document.cookie;
    let prefix = name + "=";
    let begin = dc.indexOf("; " + prefix);
    if (begin === -1) {
        begin = dc.indexOf(prefix);
        if (begin !== 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end === -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

function eraseCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function eraseOneItemFromCookie(cookie_name,item){
    let cookies = getCookie(cookie_name);
    cookies=cookies.replace(item+',','');
    eraseCookie(cookie_name);
    setCookie(cookie_name,cookies,1);
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
    for(let i = 0;i < ids.length;i++){
        msg += "id"+(ids[i].innerText || ids[i].textContent) + "=" + quantitys[i].value + "&";
    }
    msg+='sum='+sum.innerText;
    window.location.assign('order_processing.php?'+msg);
}
