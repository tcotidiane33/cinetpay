<?php
define('BASE_PATH', __DIR__);
include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';

?>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            <div class="card mx-auto">
                <p class="heading">COMMANDES LIBRARY_CI</p>
                <!-- Bouton pour passer au paiement -->
                <a href="payment.php">Passer au paiement</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'src/footer.php'
?>