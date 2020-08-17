if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready()
}

function ready() {
    const removeCartItemButtons = document.getElementsByClassName('icon_close');
    for (let i = 0; i < removeCartItemButtons.length; i++) {
        const button = removeCartItemButtons[i];
        button.addEventListener('click', removeCartItem)
    }
}
function removeCartItem(event) {
    const buttonClicked = event.target;
    buttonClicked.parentElement.parentElement.remove()
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

