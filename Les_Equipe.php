<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/header.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>E-commerce</title>
</head>

<body>
<?php
      include('layout/header.php');
  ?>
  <!------ title ------>
  <div class="categories">
    <div class="small-container">
      <h1 class="title">Les Equipes</h1>
    </div>
  </div>
  
  <!----------les equipes---------->
<div class="list_left_bloc">
    <div class="list_left_bloc_content">
        <div class="container-fluid">
        <?php
          $Equipe = array(
            'Seniors 1 · Pré-Nationale Masculine.php' => 'images/incoming.png',
            'Lien 2' => 'images/incoming.png',
            'Lien 3' => 'images/incoming.png',
    // Ajoutez autant de liens et d'images que vous le souhaitez
);

// Accédez aux éléments du tableau et affichez-les
foreach ($Equipe as $lien => $image) {
    echo '<a href="' . $lien . '"><img src="' . $image . '" alt="Image"></a>
    <br>';
}
?>
        </div>
    </div>
</div>
<?php
      include('layout/footer.php');
?>
</body>

</html>