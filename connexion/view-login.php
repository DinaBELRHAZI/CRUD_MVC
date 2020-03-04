<?php
require("./includes/header.php");
require("login.php");
?>

<div class="login" id="login">
  <fieldset><br/>
    <form method="post" action="login.php" enctype="multipart/form-data" >
            <label for="email">Email : </label>
            <input type="email" name="email" id="email" required/><br/><br/>
            <label for="mdp">Mot de passe : </label>
            <input type="password" name="mdp" id="mdp" required/> <br/><br/>
            <input type="submit" name="submit" value="Login" /><br/><br/>
            <!-- <a href="inscription.php">Pas encore inscrit?</a> <br/><br/> --> 
    </form>
  </fieldset>
</div>