
document.addEventListener('DOMContentLoaded', function() {
    const toggleButtons = document.querySelectorAll('.toggle-details-btn');

    toggleButtons.forEach(button => {
        button.addEventListener('click', () => {
            const orderId = button.dataset.orderId;
            const detailsRow = document.getElementById(`orderDetails_${orderId}`);

            if (detailsRow.style.display === 'none') {
                
                detailsRow.style.display = 'table-row';
                button.textContent = 'Masquer le détail de la commande';
            } else {
               
                detailsRow.style.display = 'none';
                button.textContent = 'Voir le détail de la commande';
            }
        });
    });
});
