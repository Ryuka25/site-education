<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Acceuil - Site éducation</title>
</head>
<body>
    <div class="page">
        <!--!En-tête de page-->

        <div class="header">

            <?php include 'header.php';?>

        </div>
        
        <!--!Contenu du page-->

        <div class="body ">
            <div class="content">
                <fieldset>
                    <legend> Login pages</legend>
                    <?php

                        $userName = "username@domain.com";
                        $password = "password";
                        
                        if (isset($_POST) && (count($_POST) > 0)) {
                            if (($_POST['userName'] == $userName) && ($_POST['password'] == $password)) {
                                $_SESSION['userName'] = $_POST['userName'];
                                header('location: ./pages/home.php');
                            }
                        }
                    ?>
                    <div class="container"  id="menu_1">
                        <form action="" method="post">
                            <label for="userName"> Username </label>
                            <input type="text" name="userName" id="userName">
                            <label for="password"> Password</label>
                            <input type="password" name="password" id="password">
                            <div class="formButton">
                                <input type="submit" value=" Login">
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>
        </div>

        <!--!Pied de page-->

        <div class="footer">
            <?php include 'footer.php';?>
        </div>
    </div>
</body>
</html>