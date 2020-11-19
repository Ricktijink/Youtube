<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youtube</title>
    
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Main css -->
    <link rel="stylesheet" href="CSS/style.css">
    
    <!-- Jquery + Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    <script src="JS/commonActions.js"></script>
</head>
<body>
    
    <div class="page-container">
    
        <!-- Masthead -->
        <div class="masthead-container">
            <button class="navShowHide">
                <img src="Assets/Icons/menu.png" alt="Menu Button" title="Menu Button">
            </button>
            
            <!-- Logo -->
            <a href="index.php" class="logo-container">
                <img src="Assets/Logo/VideoTubeLogo.png" alt="Youtube Logo" title="Youtube Logo">
            </a>

            <!-- Searchbar -->
            <div class="searchbar-container">
                <form action="search.php" method="GET" class="search-form">
                    <input type="text" class="search-bar" name="term" placeholder="Search...">
                    <button class="search-button">
                        <img src="Assets/Icons/search.png" alt="Search Button" title="Search Button">
                    </button>
                </form>
            </div>
            
            <!--  -->
            <div class="user-controls">
                <a href="upload.php">
                    <img class="upload" src="Assets/Icons/upload.png" alt="Upload Button" title="Upload Button">
                </a>
                <a href="#">
                    <img class="upload" src="Assets/profilePictures/default.png" alt="Profile button" title="Profile Button">
                </a>
            </div>
        </div>

        <div class="side-nav-container" style="display:none;">
            side-nav
        </div>

        <div class="main-section-container">

            <div class="main-content-container">