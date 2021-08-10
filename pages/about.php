<?php
    session_start();
    if ($_SESSION['userName'] != ''):
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
                    <li  id="active" ><a href="pages/about.php">A-propos</a></li>
                    <li><a href="pages/speciality.php">Spécialité</a></li>
                    <li><a href="pages/contact.php">Contact</a></li>
                    <li><a href="pages/blog.php">Blog</a></li>
                    <li><a href="pages/cv.php">C_V</a></li>
                </ul>
            </div>
        </div>
        
        <!--!Contenu du page-->

        <div class="body ">

            <div class="sideNav">
                <ul>
                    <li><a href="pages/about.php#formulaire">A propos</a></li>
                </ul>
            </div>

            <div class="content">
                <div class="container">
                    <div class="text-container">
                        <div class="container-content">
                        <p>
                            Some content about us
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>  
                        </div>
                    </div>          
                </div>
            </div>
        </div>

        <!--!Pied de page-->

        <div class="footer">
            <?php include '../footer.php';?>
        </div>
    </div>
</body>
</html>

<?php
    else :
        header('location: ../index.php');
    endif;
?>