<?php
ob_get_clean();
ob_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'ajout d'un dieu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/form.css">
</head>
<body >
    
<form class="login-form" method="post" action="" enctype="multipart/form-data">
    
<p class="title" >
    Ajout d'un Dieu/Déesse
</p>

<div class="form-aspect">
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Nom du Dieu/Déesse</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="NomDieu" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">forme</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="forme" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">representation</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="representation" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">fonction</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="fonction" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Image</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload" required>
      </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" value="Ajouter" class="btn btn-primary">Ajouter</button>
        </div>
    </div>
</div>
</form>


</body>
</html>


