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
    alert(id);
}

localStorage.setItem('Name', document.getElementsByClassName('shop-item-title') )
console.log(localStorage.getItem('Name'))