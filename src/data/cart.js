// cart.js
document.addEventListener('DOMContentLoaded', function () {
    

    // ... Autre logique de votre cart.js

    // Assurez-vous que la fonction updateCartItems est accessible globalement
    window.updateCartItems = updateCartItems;
});
// cart.js
window.updateCartItems = function(selectedIds) {
    // Logique de mise à jour du panier
    console.log('Updating cart with selected book IDs:', selectedIds);
  }
  
// Fonction pour mettre à jour le panier avec les livres sélectionnés
export function updateCartItems(selectedIds) {
    // Faites quelque chose avec les IDs des livres sélectionnés
    const selectedBooksSection = document.getElementById('selected-books');

    // Effacez le contenu existant avant d'ajouter de nouveaux éléments
    selectedBooksSection.innerHTML = '';

    // Utilisez les IDs pour afficher les informations nécessaires
    selectedIds.forEach(bookId => {
        const bookInfo = getBookInfoById(bookId); // Remplacez cela par la logique appropriée

        // Créez des éléments HTML et ajoutez-les à la section
        const bookCard = createBookCard(bookInfo);
        selectedBooksSection.appendChild(bookCard);
    });

    console.log('Updating cart with selected book IDs:', selectedIds);

}

function createBookCard(book) {
    const bookCard = document.createElement('div');
    bookCard.classList.add('card', 'book-card', 'm-2');

    // Créer une div pour la miniature de l'image
    const thumbnailDiv = document.createElement('div');
    thumbnailDiv.classList.add('thumbnail-container');

    const image = document.createElement('img');
    image.src = book.ImageM;
    image.classList.add('card-img-top');
    image.alt = `Cover of ${book.BookTitle}`;

    thumbnailDiv.appendChild(image);

    const cardBody = document.createElement('div');
    cardBody.classList.add('card-body');

    const title = document.createElement('h5');
    title.classList.add('card-title');
    title.textContent = book.BookTitle;

    const author = document.createElement('p');
    author.classList.add('card-text');
    author.textContent = `Author: ${book.BookAuthor}`;

    const year = document.createElement('p');
    year.classList.add('card-text');
    year.textContent = `Year of Publication: ${book.YearOfPublication}`;

    const price = document.createElement('p');
    price.classList.add('card-text');
    price.textContent = `Price: ${book.price} XOF`;

    cardBody.appendChild(title);
    cardBody.appendChild(author);
    cardBody.appendChild(year);
    cardBody.appendChild(price);

    // Ajouter la miniature avant le cardBody
    bookCard.appendChild(thumbnailDiv);
    bookCard.appendChild(cardBody);

    return bookCard;
}

function getBookInfoById(bookId) {
    // Remplacez cela par la logique pour récupérer les informations du livre par son ID
    // (par exemple, en utilisant une requête Ajax vers le serveur)
    // Pour l'instant, renvoyez simplement un objet de démo.
    return {
        id: bookId,
        BookTitle: `Book ${bookId}`,
        BookAuthor: `Author ${bookId}`,
        YearOfPublication: 2022,
        price: 10
        // ... Ajoutez d'autres propriétés nécessaires
    };
}
