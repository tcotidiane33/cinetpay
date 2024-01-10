// app.js
import { getData } from './data.js';

document.addEventListener('DOMContentLoaded', function () {
  const bookListSection = document.getElementById('book-list');

  // Récupérer les données
  const books = getData();

  // Afficher chaque livre dans la section #book-list
  books.forEach(book => {
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

    bookListSection.appendChild(bookCard);

    // Créer une div pour les boutons et le voyant
    const buttonsDiv = document.createElement('div');
    buttonsDiv.classList.add('buttons-container');

    const count = document.createElement('div');
    count.classList.add('count');
    count.textContent = '0'; // Valeur par défaut

    const incrementButton = document.createElement('button');
    incrementButton.textContent = '➕';
    incrementButton.classList.add('increment-button');
    incrementButton.addEventListener('click', () => {
      // Incrémenter la valeur du compteur et mettre à jour l'affichage
      count.textContent = (parseInt(count.textContent) + 1).toString();

      // Afficher le bouton de décrément une fois que le compteur est supérieur à 0
      decrementButton.style.display = 'inline-block';
    });

    const decrementButton = document.createElement('button');
    decrementButton.textContent = '➖';
    decrementButton.classList.add('decrement-button');
    decrementButton.style.display = 'none'; // Caché par défaut
    decrementButton.addEventListener('click', () => {
      // Décrémenter la valeur du compteur et mettre à jour l'affichage
      count.textContent = (parseInt(count.textContent) - 1).toString();

      // Cacher le bouton de décrément si le compteur atteint 0
      if (parseInt(count.textContent) === 0) {
        decrementButton.style.display = 'none';
      }
    });

    const counterContainer = document.createElement('div');
    counterContainer.classList.add('counter-container');
    counterContainer.appendChild(incrementButton);
    counterContainer.appendChild(count);
    counterContainer.appendChild(decrementButton);

    // Ajouter le conteneur du compteur après le cardBody
    bookCard.appendChild(counterContainer);

    bookListSection.appendChild(bookCard);

  });
});
