<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles.css">
    <title>S.P.R.E.D.</title>
</head>
<body>
    <header>
        
    //image de fond du site.
<div>
    <img src="/imgs/matrix_2_button.jpg" alt="matrix_img">
</div>
            

    //Commencement du PHP.

    <?php 
    include 'includes/_nav.php';
    ?>
    </header>
    <main>

    <?php
        include 'includes/_java.php';
    ?>

        <?php
            if(isset($_GET['action'])) {
                include 'pages/' . $_GET('action') . '.php';
            }
            else {
                include 'pages/accueil.php';
            }  
        ?>
    </main>
    <?php 
    include 'includes/_footer.php';
    ?>        
    </body>
</html>