<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <base href="../">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Contact - Site éducation</title>
</head>
<body>
    <div class="page">

        <!--!En-tête de page-->

        <div class="head">
            <div class="header">

                <?php include '../header.php';?>

                <div class="userLogin" align="center">
                    <div>
                        <div>
                            <img src="assets/images/avatar2.png" alt="<?php echo $_SESSION['userName'].'images';?>">
                        </div>
                        <div>
                            <?php echo $_SESSION['userName'];?>
                        </div>
                        <div>
                            <form action="assets/logout.php" method="POST">
                                <input  class="btn-disconnect" type="submit" value="Disconnect">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="topNav ">
                <ul>
                    <li><a href="pages/home.php">Acceuil</a></li>
                    <li><a href="pages/about.php">A-propos</a></li>
                    <li><a href="pages/speciality.php">Spécialité</a></li>
                    <li id="active" ><a href="pages/contact.php">Contact</a></li>
                    <li><a href="pages/blog.php">Blog</a></li>
                </ul>
            </div>
        </div>

        <!--!Contenu du page-->

        <div class="body ">

            <div class="sideNav">
                <ul>
                    <li><a href="pages/contact.php#formulaire">Formulaire</a></li>
                </ul>
            </div>

            <div class="content">
                <fieldset>
                    <?php

                        $titrePage = "Nous contacter";
                        $descriptionPage = 
                        '<p>
                            Some text about Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>';


                        echo
                    '
                    <legend>'.$titrePage.'</legend>
                    ';
                        echo
                    '
                    <div class="container">
                        <div class="text-container">
                            <div class="container-content">
                                '.$descriptionPage.'
                            </div>
                        </div>
                    </div>
                    ';
                    ?>
                    <div class="container"  id="formulaire">
                        <form action="./pages/getForm.php" method="POST">
                            <label for="userName"> Name </label>
                            <input type="text" name="userName" id="userName" placeholder="Entrez votre nom">

                            <label for="destEmail"> Email </label>
                            <input type="email" name="destEmail" id="destEmail" placeholder="Entrez votre mail">
                            
                            <label for="mailObject"> Téléphone </label>
                            <input type="text" name="userTel" id="userTel" placeholder="Entrez votre numéro de téléphone">

                            <label for="mailObject"> Objet </label>
                            <input type="text" name="mailObject" id="mailObject" placeholder="Entrez l'objet de votre message">
                            
                            <label for="userMessage"> Messages </label>
                            <textarea name="userMessage" id="userMessage" cols="30" rows="10" placeholder="Entrez votre message ici..."></textarea>
                            
                            <div class="confidentCheck"><input type="checkbox" name="confidentiality" id="confidentiality" required> Accepter la confidentialité </div>
                            
                            <div class="formButton">
                                <input type="reset" value="MODIFIER">
                                <input type="submit" value="ENVOYER">
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--!Pied de page-->

        <div class="footer">
            <?php include '../footer.php';?>
        </div>
    </div>
</body>
</html>