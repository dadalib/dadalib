
<?php
print_r($_GET);
var_dump($_POST);
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <!-- <form action="contact_controller.php" method="POST">
            input
        </form>-->
        
        <div>
            <p>
                " Nous avons bien reçu votre demande"
                " "<br>
                <?php
                // <?php
                // put your code here
                //reafficher à l' ecran
                //echo " ECHOOOOOOOO ";
                
                echo " Nom : ";
                echo $_POST["nom"];
                echo " Prenom : ";
                echo $_POST["preNom"];
                ?>


            </p>


        </div>


    </body>
</html>

