<?php
session_start();

// Fonction pour ajouter un livre au panier
function addToCart($bookId)
{
    if (!isset($_SESSION['cart'][$bookId])) {
        $_SESSION['cart'][$bookId] = 1; // Si le livre n'est pas dans le panier, l'ajouter avec une quantité de 1
    } else {
        $_SESSION['cart'][$bookId]++; // Si le livre est déjà dans le panier, incrémenter la quantité
    }
}

// Ajouter des livres de test au panier (vous pouvez remplacer cela par votre propre logique)
addToCart(1);
addToCart(2);
addToCart(2);

// Afficher le panier avec les livres ayant une quantité supérieure à 1
function displayCart()
{
    foreach ($_SESSION['cart'] as $bookId => $quantity) {
        if ($quantity > 1) {
            // Affichez les informations sur le livre ici (remplacez cela par votre propre logique)
            echo "Book ID: $bookId, Quantity: $quantity <br>";
        }
    }
}

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
                <!-- <a href="order.php">Passer la commande</a> -->
            </div>
        </div>
    </div>
    <div class="card mx-auto">
        <a href="order.php">Passer la commande</a>
    </div>
</div>

<?php
include_once 'src/footer.php'
?>