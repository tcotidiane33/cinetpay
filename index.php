<?php
define('BASE_PATH', __DIR__);
include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';
?>


<div class="container">
    <div class="mx-auto">
        <p class="heading card">WELCOME LIBRARY_CI</p>
        <!-- Bouton pour passer la commande -->
        <main class="bookList">
            <section class=" container-fluid mx-auto" id="book-list">
            </section>
        </main>
        <a href="pages/home.php">Passer la commande</a>
    </div>
</div>
<!-- Include your JavaScript files here -->
<script type="module" src="src/data/data.js"></script>
<script type="module" src="src/data/app.js"></script>

<?php
include_once 'src/footer.php'
?>