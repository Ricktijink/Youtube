<?php 
    require_once("Includes/header.php"); 
?>

<div class="column">
    <?php
        $formProvider = new VideoDetailsFormProvider($con);
        echo $formProvider->createUploadForm();
    ?>
</div>

<?php require_once("Includes/footer.php"); ?>

<!-- TODO: Upload form in Modal? No use dedicating entire page to it? -->