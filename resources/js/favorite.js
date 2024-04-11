window.addToFavorite= function(productId){
    fetch(`/product/${productId}/favorite`,{method:"POST"})
}