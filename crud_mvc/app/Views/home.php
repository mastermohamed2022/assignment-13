<?php
require_once(VIEWS . "inc" . DS . "header.php");
?>
<div class="container my-5">
    <div class="jumbotron text-center my-5">
        <h1 class="display-4">LEARN PHP MVC</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg " href="<?php url('product') ?>" role="button">SHOW PRODUCTS</a>
    </div>
</div>
<?php
require_once(VIEWS . "inc" . DS . "footer.php");
?>