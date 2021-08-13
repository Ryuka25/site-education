<?php
    session_start();
        if ((isset($_SESSION['userName'])) && ($_SESSION['userName'] != '')):
            header('location: pages/home.php');
        else :
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Login && SignUp - Site éducation</title>
</head>
<body class="login">
    <div class="page">
        <!--!En-tête de page-->

        <div class="head">
            <div class="header">

                <?php include './header.php';?>

            </div>
        </div>
        
        <!--!Contenu du page-->

        <div class="body ">
            <div class="content loginPages">
                <fieldset>
                    <legend> Login pages </legend>
                    <?php
                        if (isset($_SESSION['loginError']) && ($_SESSION['loginError'] == 1)) {
                            echo
                            '
                            <p style="text-align:center; color:red> ERROR LOGIN </p>
                            ';
                        }
                    ?>
                    <div class="container"  id="menu_1">
                        <form action="assets/login.php" method="post">
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

<?php
    endif;
?>