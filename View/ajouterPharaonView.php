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
    <title>Formulaire d'ajout d'un pharaon</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <style>
        body{
            margin-left: 2em;
            margin-right: 2em;
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
            background-color: grey;
            border-radius: 16px;
            min-height: 10rem;
            margin: auto;
            max-width: 50%;
            padding: .5rem;
            border: 1px solid black;
            background: transparent;
            font-size: 1.3em;
        }

        button{
            float: right;
            margin-top: 1.5em;
        }
    </style>
</head>
<body >
    
<form class="login-form" method="post" action="" enctype="multipart/form-data">
    
<p class="title" >
    Ajout d'un pharaon
</p>

<div class="form-aspect">
    <div class="form-group">
        <div class="col-sm-10">
            <input type="hidden" class="form-control" name="NroDynastie" id="email" placeholder="ModifierLieu">
        </div>
    </div>
    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Num dynastie</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="inputPassword4" name="NroDynastie" required>
      </div>
    </div> -->
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Num ordre</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="inputPassword4" name="NroOrdre" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Nom du pharaon</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="NomPh" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Nom Usuel</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="NomUsuel" >
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputPassword4">Commentaire</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputPassword4" name="commentPh" >
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
