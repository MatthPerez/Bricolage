<?php
$text='';
if (isset($_FILES['photo'])) {
  if ($_FILES['photo']['error'] !== UPLOAD_ERR_OK) {
    $text = 'Erreur de téléchargement...';
  } elseif ($_FILES['photo']['size'] > 2000000) {
    $text = 'L\'image est trop lourde...';
  } else {
    $fileName = uniqid();
    $infos = pathinfo($_FILES['photo']['name']);
    move_uploaded_file($_FILES['photo']['tmp_name'], '../pictures/downloaded/' . $fileName . '.' . $infos['extension']);
    $text = 'Merci pour l\'image !';
  };
};
