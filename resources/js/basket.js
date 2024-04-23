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
            } else {
                
                console.error('Erreur lors de l\'ajout du produit au panier.');
            }
        })
        .catch(error => {
            console.error('Erreur lors de la communication avec le serveur:', error);
        });
        quantity = document.getElementById("quantityInput"+i).value = ''
    } 
    
