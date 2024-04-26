import { addProductToBasket, applyPromoCode, deleteProductFromBasket, deletePromoCode } from "./Api";
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