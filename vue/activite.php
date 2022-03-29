<!DOCTYPE html>
<html lang="fr">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
      <link rel="stylesheet" href="../css/activite.css">
      <script src="https://kit.fontawesome.com/f62da2a10a.js&quot"; crossorigin="anonymous"></script>
      <title>GsbMed</title>
</head>
<body>

<!-- intégration de notre page du menu de navigation ainsi que le footer -->
<?php include("navbar.php"); ?>
<?php include("footer.php"); ?>

<div class="container">
<h2>Activités</h2><br />
<!-- mise en place du tableau -->
<table >
<!-- mise en place de la ligne de titre -->
<tr>
<th>Activité</th>
<th>Date</th>
<th>Heure</th>
</tr>
<!-- affichage de chacune des lignes du tableau -->
<?php foreach ($activites as $activite): ?>

<!-- mise en place d'un formulaire -->
<form method="post"
action="../controleur/aiguillageActivite.php">
<!-- affichage de la ligne courante -->
<tr>
<td><?php echo $activite[0];?></td>
<td><?php echo $activite[1];?></td>
<td><?php echo $activite[2]; ?></td>
</tr>
</form>
<?php endforeach; ?>
<!-- fin du tableau -->
</table>
</div>
</body>
</html>