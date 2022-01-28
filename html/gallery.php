  <?php
  $title= 'Matthieu PEREZ - Galerie photos';
  $active1 = 'active';
  $active2 = '';
  require '../back/header.php';
  ?>

  <!--Haut de page-->
  <h1>Trouvez l'inspiration et exprimez votre créativité</h1>
  
  <!--Corps de page-->
  <?php
    require '../back/pics01.php';
    require '../back/pics02.php';
    require '../back/pics03.php';
    $list01 = getList01();
    $list02 = getList02();
    $list03 = getList03();

    echo '<div class="row justify-content-evenly">';

    // Colonne 1
    echo '
        <div class="col-4">';
        for ($a=0; $a<count($list01); $a++) {
            echo '
                <img src="../pictures/'.$list01[$a]['name'].'.jpg" class="small-img rounded-10">';
        };
        echo '
        </div>';

    // Colonne 2
    echo '
        <div class="col-4">';
        for ($a=0; $a<count($list02); $a++) {
            echo '
                <img src="../pictures/'.$list02[$a]['name']. '.jpg" class="small-img rounded-10">';
        };
        echo '
        </div>';

        // Colonne 3
    echo '
        <div class="col-4">';
        for ($a=0; $a<count($list03); $a++) {
            echo '
                <img src="../pictures/'.$list03[$a]['name']. '.jpg" class="small-img rounded-10">';
        };
        echo '
        </div>';
  ?>
</body>

<?php
  $footer = 'Vous savez bricoler et vous voulez partager vos créations sur ma page ? Contactez-moi <a href="mailto:matthieu.perez30@gmail.com?subject=Je veux partager mes créations" class="link" target="_blank">ici</a>.';
  require '../back/footer.php';
?>
</html>