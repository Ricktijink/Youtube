<?php 
    require_once("Includes/header.php"); 
    require_once("Classes/VideoDetailsFormProvider.php"); 
?>

<div class="column">
    <?php
        $formProvider = new VideoDetailsFormProvider($con);
        echo $formProvider->createUploadForm();
    ?>
</div>

<?php require_once("Includes/footer.php"); ?>