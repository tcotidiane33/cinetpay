<?php
define('BASE_PATH', __DIR__);
include_once BASE_PATH . '/src/navbar.php';
include_once BASE_PATH . '/src/header.php';
?>



<div class="container">
    <main class="bookList">
        <section class=" container-fluid mx-auto" id="book-list">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque placeat suscipit ipsum quaerat reprehenderit laudantium, adipisci maiores accusantium asperiores vitae voluptatem culpa?
        </section>
    </main>
</div>
<!-- Include your JavaScript files here -->
<script type="module" src="src/data/data.js"></script>
<script type="module" src="src/data/app.js"></script>

<?php
include_once 'src/footer.php'
?>