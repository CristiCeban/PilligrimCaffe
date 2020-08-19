
function removeCartItem(id) {
    document.getElementById('tr_id'+id).outerHTML = "";

    const quantity = document.getElementsByClassName('quantity_id');
    const price = document.getElementsByClassName('shoping__cart__total');
    const totalSumCheckout = document.getElementById('total_sum');
    let sum = 0;
    for(let i = 0;i < quantity.length;i++){
        sum+= parseInt(quantity[i].value) * (parseInt(price[i].innerText) || parseInt(price[i].textContent));
    }
    totalSumCheckout.innerHTML = sum.toString() + ' MDL';
    eraseOneItemFromCookie('card-list',id);
}


function sumOfProduct(id){
    let quantity = document.getElementById('quantity'+id).value;
    const totalSum = document.getElementById('sum_item'+id);
    const price = document.getElementById('price'+id).innerHTML.replace ( /[^\d.]/g, '' );
    const totalSumCheckout = document.getElementById('total_sum');
    if (quantity < 0){
        document.getElementById('quantity'+id).value = 1;
        return;
        }
    else if(quantity > 100){
        document.getElementById('quantity'+id).value = 100;
        totalSum.innerHTML = (price*100).toString() + ' MDL';
        return;
        }

    totalSum.innerHTML = (price*quantity).toString() + ' MDL';
    const allItemsSum = document.getElementsByClassName('shoping__cart__total');
    let sum = 0;
    for(let i = 0;i < allItemsSum.length;i++){
        sum+=parseInt(allItemsSum[i].innerText.replace ( /[^\d.]/g, '' ));
    }
    totalSumCheckout.innerHTML = sum.toString() + ' MDL';
}

