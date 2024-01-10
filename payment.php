<?php
define('BASE_PATH', __DIR__);
include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';

?>

<!-- Navbar -->
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            <div class="card mx-auto">
                <p class="heading">Test pay By KondroNetworks</p>
                <form action="action.php" method="post" class="card-details ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <p class="text-warning mb-0">Nom</p>
                                <input type="text" name="customer_name" id="customer_name" value="super">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <p class="text-warning mb-0">Prenom</p>
                                <input type="text" name="customer_surname" id="customer_surname" value="nova">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-0">
                                <p class="text-warning mb-0">Montant</p>
                                <input type="number" name="amount" id="amount" value="100">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <p class="text-warning mb-0">Devise</p>
                                <select class="form-select" name="currency" id="currency">
                                    <option value="XOF">XOF</option>
                                    <option value="XAF">XAF</option>
                                    <option value="CDF">CDF</option>
                                    <option value="GNF">GNF</option>
                                    <option value="USD">USD</option>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <p class="text-warning mb-0">Description</p>
                                <input type="text" name="description" value="Abonnement Account Telegram Channels">
                            </div>
                        </div>

                    </div>


                    <div class="pt-0"> <button type="submit" name="valider" class="btn btn-success">Valider<i class="fas fa-arrow-right px-3 py-2"></i></button> </div>

                </form>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'src/footer.php'
?>