window.toggleFavorite = function(productId) {

    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    

    const isFavorite = document.querySelector(`#favorite-button-${productId}`).classList.contains('bg-lime-600');


    if (isFavorite) {

        fetch(`/product/${productId}/favorite/remove`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken 
            },
            
        }).then(() => {

            document.querySelector(`#favorite-button-${productId}`).classList.remove('bg-lime-600', 'text-white');
            document.querySelector(`#favorite-button-${productId}`).classList.add('bg-white', 'text-black');
        });
    } else {

        fetch(`/product/${productId}/favorite`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken 
            },
            
        }).then(() => {

            document.querySelector(`#favorite-button-${productId}`).classList.remove('bg-white', 'text-black');
            document.querySelector(`#favorite-button-${productId}`).classList.add('bg-lime-600', 'text-white');
        });
    }
}

