<?php
$title = 'Matthieu PEREZ - Galerie photos';
$active1 = 'active';
$active2 = '';
require '../back/header.php';
?>

<body class="brown-body">
    <!--Haut de page-->
    <h1>Trouvez l'inspiration 🧚 Exprimez votre créativité</h1>

    <!--Corps de page-->
    <?php
    require '../back/pics01.php';
    require '../back/pics02.php';
    require '../back/pics03.php';
    $list01 = getList01();
    $list02 = getList02();
    $list03 = getList03();

    echo '<div class="row align-content-evenly">';

    // Colonne 1
    echo '
        <div class="col-4">';
    for ($a = 0; $a < count($list01); $a++) {
        echo '
            <img src="../pictures/' . $list01[$a]['name'] . '.jpg" class="">';
    };
    echo '
        </div>';

    // Colonne 2
    echo '
        <div class="col-4">';
    for ($a = 0; $a < count($list02); $a++) {
        echo '
            <img src="../pictures/' . $list02[$a]['name'] . '.jpg" class="small-img">';
    };
    echo '
        </div>';

    // Colonne 3
    echo '
        <div class="col-4">';
    for ($a = 0; $a < count($list03); $a++) {
        echo '
            <img src="../pictures/' . $list03[$a]['name'] . '.jpg" class="small-img">';
    };
    echo '
        </div>';
    ?>

    <!-- Envoi images -->
    <div class="container-bottom mb-5a">
        <div class="row">
            <div class="col-6 centered">
                Et comme j'apprécie les contributions spontanées des passionnés de bricolage, vous pouvez m'envoyer vos photos de créations pour qu'elles viennent éventuellement agrémenter ce site.
            </div>
            <div class="col-6 centered">
                <form class="pb-4" action="post" action="../back/contact.php">
                    <label for="photo"></label>
                    <input type="file" id="photo" name="photo" accept="image/png, image/jpeg, image/jpg" required>
                    <button class="btn btn-light-blue">Envoyer</button>
                </form>

                <?php
                require '../back/contact.php';
                echo '<p class="f_danger">' . $text . '</p>';
                ?>
            </div>
        </div>
    </div>
</body>

<?php
$footer = 'Matthieu PEREZ - Copyright 2022 ©';
require '../back/contact.php';
?>

</html>