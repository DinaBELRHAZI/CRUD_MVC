<?php
require("./includes/header.php");
    
if(!empty($_POST['mdp']) && !empty($_POST['email'])){
             $email = htmlentities(trim($_POST['email']));
            
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){    

                $mdp = sha1(htmlentities(trim($_POST['mdp'])));
   
                $sql = "SELECT * FROM inscription WHERE email = '".$email."' AND mdp = '".$mdp."'";
                $requete = mysqli_query($db, $sql);
                $reponse = mysqli_fetch_assoc($requete);
                
                if ($reponse)
                {
                    $_SESSION['connecte'] = true;
                    $_SESSION['id_ins'] = $reponse['id_ins'];
                    $_SESSION['lvl'] = $reponse['lvl'];
                    $_SESSION['email'] = $reponse['email'];
                                    
                    header("Location:index.php");//redirection
                 }
                else 
                {
                    echo "Identifiant incorrect";
                }
             }
        }

?>