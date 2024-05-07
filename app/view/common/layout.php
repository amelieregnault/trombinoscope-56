<?php include 'app/view/common/header.php';?> 

<!-- Affichage du message d'erreur -->
<?php if (isset($message)): ?>
    <p><?= $message ?></p>
<?php endif ?>

<?php echo $content;

include 'app/view/common/footer.php';