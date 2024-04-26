function getHeaderWithCsrfToken() {
    return {'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
}

function post(url, body = null){
    return fetch(url, {
        method: 'POST',
        headers: getHeaderWithCsrfToken(),
        body: body? JSON.stringify(body) : null
    })
}

export function applyPromoCode(promoCode){ 
    return post('/basket-promoCode/apply/'+promoCode)
}
export function deletePromoCode(){
    return post('/basket-promoCode/remove')
}

export function deleteProductFromBasket(id){
    return post('basket-delete/'+id)   
}

export function addProductToBasket(productId, quantity){
    return post('/basket/'+productId+'/'+quantity)
}