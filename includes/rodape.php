<?php
$autor = isset($nome) ? htmlspecialchars($nome) : "Portfólio";
?>

<!-- <footer> sem style inline: visual controlado pelo style.css -->
<footer>
    <?php echo $autor; ?>
    &copy; <?php echo date("Y"); ?>
    | Desenvolvido com PHP
    | IFPR — Ponta Grossa
</footer>