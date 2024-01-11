<?php
define('BASE_PATH', __DIR__);
include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';
?>


<div class="container">
    <div class="mx-auto">
        <p class="heading card">WELCOME LIBRARY_CI</p>
            <a class="mx-auto btn btn-info" href="cart.php"  id="cart">Voir le panier</a>
        <!-- Bouton pour passer la commande -->
        <main class="bookList">
            <section class=" container-fluid mx-auto" id="book-list">
            </section>
        </main>
    </div>
</div>
<!-- Include your JavaScript files here -->
<script>
    // Tableau pour stocker les informations des livres sélectionnés
    const selectedBooks = [];

    // Fonction pour ajouter un livre sélectionné
    function addSelectedBook(bookId, bookTitle, bookPrice) {
        selectedBooks.push({
            id: bookId,
            title: bookTitle,
            price: bookPrice
        });
    }
</script>
<script type="module" src="src/data/data.js"></script>
<script type="module" src="src/data/app.js"></script>

<?php
include_once 'src/footer.php'
?>