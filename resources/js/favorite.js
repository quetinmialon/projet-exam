window.toggleFavorite = function(productId) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const favoriteButton = document.querySelector(`#favorite-button-${productId}`);
    
    const isFavorite = (favoriteButton.src.includes('prefere.gif'));

    if (isFavorite) {
        fetch(`/product/${productId}/favorite/remove`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken 
            },
        }).then(() => {
            favoriteButton.setAttribute('src', '/img/etoile.png');
        });
    } else {
        fetch(`/product/${productId}/favorite`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken 
            },
        }).then(() => {
            favoriteButton.setAttribute('src', '/img/prefere.gif');
        });
    }
}


