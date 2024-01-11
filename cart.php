<?php
session_start();

define('BASE_PATH', __DIR__);
include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';
?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            <div class="card mx-auto">
                <p class="heading">PANIER LIBRARY_CI</p>
                <!-- Afficher le contenu du panier avec une quantité supérieure à 1 -->
                <?php displayCart(); ?>
                <!-- Bouton pour passer la commande -->
            </div>
        </div>
    </div>

    <!-- Ajoutez une section pour afficher les informations des livres sélectionnés -->
    <div class="row" id="selected-books"></div>

    <!-- Inclure app.js avant cart.js -->
    <script type="module" src="src/data/app.js"></script>
    <script type="module" src="src/data/cart.js"></script>
</div>

<?php
include_once 'src/footer.php';
?>

<?php
// Fonction pour afficher le panier (vous pouvez remplacer cela par votre propre logique)
function displayCart()
{
    // Assurez-vous d'initialiser la variable $totalPrice avant de l'utiliser
    $totalPrice = 0;

    foreach ($_SESSION['cart'] as $bookId => $quantity) {
        if ($quantity > 1) {
            // Obtenez les informations sur le livre (remplacez cela par votre propre logique)
            $bookInfo = getBookInfoById($bookId);
            $bookPrice = $bookInfo['price'];
            $bookTotalPrice = $bookPrice * $quantity;
            $totalPrice += $bookTotalPrice;

            // Affichez les informations sur le livre ici
            echo "Book ID: $bookId, Quantity: $quantity, Price: $bookPrice XOF, Total Price: $bookTotalPrice XOF <br>";
        }
    }

    // Affichez le total
    echo "Total Price: $totalPrice XOF";
}

// Fonction de démo pour obtenir les informations sur le livre par ID (remplacez cela par votre propre logique)
function getBoàokInfoById($bookId)
{
    // Vous pouvez remplacer cela par une requête SQL ou toute autre logique de récupération de données
    return [
        'id' => $bookId,
        'BookTitle' => "Book $bookId",
        'BookAuthor' => "Author $bookId",
        'YearOfPublication' => 2022,
        'price' => 10
        // Ajoutez d'autres propriétés nécessaires
    ];
}
?>
