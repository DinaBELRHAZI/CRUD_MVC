<?php
ob_get_clean();
ob_start();
$NomLieu = $_GET['id'];
$NomLieuFinal = afficherLieu($NomLieu);
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire d'ajout d'un lieu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        body{
            margin-left: 2em;
            margin-right: 2em;
            background-image: url(https://www.intermedes.com/photos/voyages/3664/egypte-les-hauts-lieux-de-l-egypte-antique_p2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        .title{
            font-size: 2em;
            text-align: center;
            margin-bottom: 2em;
            margin-top: 5%;
        }
        b{
            color: #AF0000;
        }
        .form-aspect{
            border-radius: 16px;
            min-height: 10rem;
            margin: auto;
            max-width: 50%;
            padding: .5rem;
            border: 1px solid #D8B285;
            background: transparent;
            font-size: 1.3em;
            color: black;
            backdrop-filter: blur(4px);
        }

        button{
            float: right;
            margin-top: 1.5em;
        }
    </style>
</head>
<body >


<?php foreach ($NomLieuFinal as $donnees) ?>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
    
<p class="title" >
    Modification du lieu <b><?=$donnees['NomLieu'] ?></b>
</p>
<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<div class="form-aspect">    
    <div class="form-group">
        <div class="col-sm-10">
            <input type="hidden" class="form-control" value="<?=$donnees['NomLieu'] ?>" readonly name="NomLieu" id="email" placeholder="ModifierLieu">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">Description:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?=$donnees['description'] ?>" name="description" id="pwd" placeholder="ModifierDescription">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="text">Situation:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="<?=$donnees['situation'] ?>" name="Situation" id="pwd" placeholder="ModifierSituation">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="text">Image</label>
      <div class="col-sm-10">
        <input type="file" class="form-control" value="<?=$donnees['img_lieu'] ?>" id="pwd" name="fileToUpload" required>
      </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</div>
</form>
</form>