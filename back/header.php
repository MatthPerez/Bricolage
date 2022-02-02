<?php
echo '<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="bricolage, diy, touret,tourets,  palette, palettes, récupération, détournement">
  <link rel="stylesheet" href="' . $style . '">
  <script src="../js/script.js"></script>
  <title>' . $title . '</title>
</head>'
?>

<?php
echo '
  <div class="sticky-top title-container ' . $bgColor . '">
    <div class="item mh-1"><a href="' . $retour . 'index.php" class="shadowed f-size ' . $fontColor . ' superlink1 ' . $active0 . '" title="Accueil">Accueil</a></div>
    <div class=" item mh-1"><a href="' . $retour . 'html/gallery.php" class="shadowed f-size ' . $fontColor . ' superlink1 ' . $active1 . '" title="Galerie images">Galerie</a></div>
    <div class=" item mh-1"><a href="' . $retour . 'html/shop.php" class="shadowed f-size ' . $fontColor . ' superlink1 ' . $active2 . '" title="Visiter le magasin">Acheter</a></div>
    <div class=" item mh-1"><a href="' . $retour . 'html/tests.php" class="shadowed f-size ' . $fontColor . ' superlink1 ' . $active3 . '">Tests</a></div>
  </div>
</header>
  ';
