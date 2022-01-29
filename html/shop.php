<?php
$title = 'Matthieu PEREZ - Acheter';
$active1 = '';
$active2 = 'active';
require '../back/header.php';
?>

<body class="cold-body">
    <!--Shopping-->
    <h1>Acheter mes créations 😽</h1>
    <p class="centered mb-5">Paiement Paypal ©</p>
    <div class="container">
        <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            <?php
            require '../back/forsale.php';
            $categories = ['A vendre'];
            // $categories = [''];
            $list = getList();

            foreach ($categories as $category) {
                for ($a = 0; $a < count($list); $a++) {
                    if ($list[$a]['category'] == $category) {
                        echo '
                    <div class="col">
                        <div class="p-3 border bg-light centered">
                            <img src="../pictures/' . $list[$a]['name'] . '.jpg" class="card-img-top pt-1">
                            <button type="button" class="btn btn-light-blue mt-3 mb-2">Acheter</button>
                            <h5>' . $list[$a]['title'] . '</h5>
                            <p class="card-text f-secondary">' . $list[$a]['price'] . ' €</p>
                            <p class="card-text f-secondary">' . $list[$a]['text'] . '</p>
                        </div>
                    </div>';
                    };
                };
            };
            ?>
        </div>
</body>

<?php
$footer = 'Matthieu PEREZ - Copyright 2022 ©';
require '../back/footer.php';
?>

</html>