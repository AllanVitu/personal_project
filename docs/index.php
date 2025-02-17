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
        <?php
        isset ($_GET[mon_image()]);
    ?>

    <?php
        function mon_image(){
            return '<img src="/assets/imgs/matric_button.jpg" alt="mon image" />';
        }  
    ?>

 

    <?php 
    include 'includes/_nav.php';
    ?>
    </header>
    <main>
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