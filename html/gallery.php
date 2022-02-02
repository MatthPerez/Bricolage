<?php
$title = 'Matthieu PEREZ - Galerie photos';
$active0 = '';
$active1 = 'active';
$active2 = '';
$active3 = '';
$style = '../css/style.css';
$retour='../';
$bgColor='bg-lightbrown';
$fontColor='f-white';
require '../back/header.php';
?>

<body class="brown-body">
    <!--Haut de page-->
    <h1 class="superh1">Trouvez l'inspiration et exprimez votre créativité</h1>

    <!--Corps de page-->
    <?php
    require '../back/pics01.php';
    require '../back/pics02.php';
    require '../back/pics03.php';
    $list01 = getList01();
    $list02 = getList02();
    $list03 = getList03();

    echo '<div class="row">';

    // Colonne 1
    echo '
        <div class="col-4">
            ';
    for ($a = 0; $a < count($list01); $a++) {
        echo '<img src="../pictures/' . $list01[$a]['name'] . '.jpg" class="w-96p m-2p rounded-5">';
    };
    echo '
        </div>';

    // Colonne 2
    echo '
        <div class="col-4">
            ';
    for ($a = 0; $a < count($list02); $a++) {
        echo '<img src="../pictures/' . $list02[$a]['name'] . '.jpg" class="w-96p m-2p rounded-5">';
    };
    echo '
        </div>';

    // Colonne 3
    echo '
        <div class="col-4">
            ';
    for ($a = 0; $a < count($list03); $a++) {
        echo '<img src="../pictures/' . $list03[$a]['name'] . '.jpg" class="w-96p m-2p rounded-5">';
    };
    echo '
        </div>';

    echo '
    </div>';

    ?>
</body>

<?php
$footer = 'Matthieu PEREZ - Copyright 2022 ©';
require '../back/footer.php';
?>

</html>