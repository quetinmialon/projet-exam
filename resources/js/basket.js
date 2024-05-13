import { addProductToBasket, applyPromoCode, deleteProductFromBasket, deletePromoCode } from "./Api";


window.incrementQuantity = function(productId) {
    const quantityInput = document.getElementById(`quantityInput${productId}`);
    let newValue = parseInt(quantityInput.value) + 1;
    if (newValue > 5) {
        newValue = 5;
    }
    quantityInput.value = newValue;
}


 window.decrementQuantity = function(productId) {
    const quantityInput = document.getElementById(`quantityInput${productId}`);
    let newValue = parseInt(quantityInput.value) - 1;
    if (newValue < 1) {
        newValue = 1;
    }
    quantityInput.value = newValue;
}
window.updateActionAndSubmit = async function(i) {
    let productId = document.getElementById("productIdInput"+i).value;
    let quantity = document.getElementById("quantityInput"+i).value;
    await addProductToBasket(productId,quantity);
    location.reload()
} 

window.deleteProductFromBasket = async function(id){
    await deleteProductFromBasket(id)
    location.reload()    
}
    
window.applyPromoCode = async function(){
    let label = document.getElementById("inputPromoCode").value;
    await applyPromoCode(label)
    location.reload()  
}

window.deletePromoCode = async function(){
    await deletePromoCode()
    location.reload()
};