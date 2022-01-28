  <?php
  $title= 'Matthieu PEREZ - Acheter';
  $active1 = '';
  $active2 = 'active';
  require '../back/header.php';
  ?>

  <!--Shopping-->
  <h1>Acheter mes créations</h1>
  <div class="row justify-content-evenly body">
  <?php
    require '../back/pictures.php';
    $categories = ['A vendre'];
    $list = getList();

    foreach ($categories as $category) {
        echo '<div class="row justify-content-evenly">';
        for ($a=0; $a<count($list); $a++) {
            if ($list[$a]['category'] == $category) {
                echo '
                    <div class="card zoom-m line-jump" style="width: 18rem;">
                        <img src="../pictures/'.$list[$a]['name'].'.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5>'.$list[$a]['title'].'</h5>
                            <p class="card-text f-secondary">'.$list[$a]['text'].'</p>
                        </div>
                        <button type="button" class="btn btn-primary line-jump">Acheter</button>
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