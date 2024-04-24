window.updateActionAndSubmit = function(i) {
    
    let productId = document.getElementById("productIdInput"+i).value;
    let quantity = document.getElementById("quantityInput"+i).value;
   


        fetch('/basket/'+productId+'/'+quantity, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            
        })
        .then(response => {
            if (response.ok) {
                
                console.log('Produit ajouté au panier avec succès.');
                location.reload();
            } else {
                
                console.error('Erreur lors de l\'ajout du produit au panier.');
            }
        })
        .catch(error => {
            console.error('Erreur lors de la communication avec le serveur:', error);
        });
        
        
    } 

window.deleteProductFromBasket = function(i){

    fetch('basket-delete/'+i,{
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
    })
    .then(response =>{
        if (response.ok) {
                
            console.log('Produit supprimé du panier');
            location.reload();
        } else {
            
            console.error('Erreur lors de la suppression du produit au panier.');
        }
    })
    .catch(error => {
        console.error('Erreur lors de la communication avec le serveur:', error);
    });
    
}
    
window.applyPromoCode = function(){
    let label = document.getElementById("inputPromoCode").value;
    fetch('/basket-promoCode/apply/'+label, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    }
})
    .then(response =>{
        if (response.ok) {
                
            console.log('code Promo appliqué');
            location.reload();
        } else {
            
            console.error('Erreur lors de l\'application du code Promo.');
        }
    })
    .catch(error => {
        console.error('Erreur lors de la communication avec le serveur:', error);
    });
      
    
}

window.deletePromoCode = function(){

};