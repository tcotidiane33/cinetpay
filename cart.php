<?php
session_start();
define('BASE_PATH', __DIR__);

include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';

// Récupérer les livres sélectionnés de l'URL
$selectedBooks = isset($_GET['selectedBooks']) ? json_decode(urldecode($_GET['selectedBooks']), true) : [];

?>
<?php

// Lire le contenu de db.json
$booksData = file_get_contents('src/data/db.json');

// Décoder les données JSON
$books = json_decode($booksData, true);

// Afficher le contenu pour vérification (vous pouvez le retirer une fois que cela fonctionne)
// var_dump($books);
?>
<div class="container">
    <div class="mx-auto">
        <p class="heading card">WELCOME LIBRARY_CI</p>

        <!-- Afficher les détails des livres sélectionnés -->
        <?php foreach ($selectedBooks as $selectedBook) : ?>
            <?php
            // Recherchez le livre correspondant dans le tableau $books
            $matchingBook = array_values(array_filter($books, function ($book) use ($selectedBook) {
                return $book['id'] == $selectedBook['id'];
            }));

            // Vérifiez si un livre correspondant a été trouvé
            if (!empty($matchingBook)) {
                $matchingBook = $matchingBook[0];
            } else {
                continue; // Passez au livre suivant s'il n'y a pas de correspondance
            }
            ?>
            <div class="book-details">
                <?php if (isset($matchingBook['BookTitle'])) : ?>
                    <h2><?php echo $matchingBook['BookTitle']; ?></h2>
                <?php endif; ?>

                <?php if (isset($matchingBook['BookAuthor'])) : ?>
                    <p>Author: <?php echo $matchingBook['BookAuthor']; ?></p>
                <?php endif; ?>

                <?php if (isset($matchingBook['YearOfPublication'])) : ?>
                    <p>Year of Publication: <?php echo $matchingBook['YearOfPublication']; ?></p>
                <?php endif; ?>

                <?php if (isset($matchingBook['price'])) : ?>
                    <p>Price: <?php echo $matchingBook['price']; ?> XOF</p>
                <?php endif; ?>

                <?php if (isset($selectedBook['quantity'])) : ?>
                    <p>Quantity: <?php echo $selectedBook['quantity']; ?></p>
                <?php endif; ?>
            </div>

            <hr>
        <?php endforeach; ?>

        <!-- Bouton pour passer la commande -->
        <a class="mx-auto btn btn-info" href="payment.php?selectedBooks=<?php echo urlencode(json_encode($selectedBooks)); ?>">Passer la commande</a>
    </div>
</div>
<?php
include_once 'src/footer.php';
?>