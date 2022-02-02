<?php
$title = 'Matthieu PEREZ - Acheter';
$active0 = '';
$active1 = '';
$active2 = 'active';
$active3 = '';
$style = '../css/style.css';
$retour = '../';
$bgColor = 'bg-cold';
$fontColor = 'f-blue';
require '../back/header.php';
?>

<body class="cold-body">
    <!--Shopping-->
    <?php
    require '../back/icons.php';
    echo '<h1 class="superh1">' . $eCommerce . ' La boutique aux créations ' . $eCommerce . '</h1>';
    ?>
    <p class="police p-3">Vous rêvez d'acquérir une pièce de décoration originale ? Votre salon a besoin d'une touche de créativité et vous imez le style rustique ? Découvrez toutes les créations artisanales de nos artistes locaux. Ce sont toutes des pièces uniques réalisées à partir de matériel de récupération, d'objets détournés, issus de l'imaginaire débordant de nos collaborateurs. Bien sûr, </p>

    <div class="container">
        <?php
        require '../back/forsale.php';
        $listSale = getList();
        for ($a = 0; $a < count($listSale); $a++) {
            ($listSale[$a]['category'] == 'A vendre' ? $b = '
            <div class="card bg-lightblue m-1">
                <div class="police card-item f-xx-large">' . $listSale[$a]['title'] . '</div>
                <div class="police card-item"><img src="../pictures/' . $listSale[$a]['name'] . '.jpg" class="card-w rounded-5"></div>
                <div class="police card-item">' . $listSale[$a]['price'] . ' €</div>
                <div class="police card-item">' . $listSale[$a]['text'] . '</div>
                <button class="mb-1">Acheter</button>
            </div>' : $b = '');
            echo PHP_EOL . $b;
        };
        ?>
    </div>
</body>

<?php
$footer = 'Matthieu PEREZ - Copyright 2022 ©';
require '../back/footer.php';
?>

</html>