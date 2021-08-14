<?php
session_start();
if ($_SESSION['userName'] != '') :
?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <base href="../">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Spécialité - Site éducation</title>
    </head>

    <body>
        <div class="page">
            <!--!En-tête de page-->

            <div class="head">
                <div class="header">

                    <?php include '../header.php'; ?>

                    <div class="userLogin" align="center">
                        <div>
                            <div>
                                <img src="assets/images/avatar2.png" alt="<?php echo $_SESSION['userName'] . 'images'; ?>">
                            </div>
                            <div>
                                <?php echo $_SESSION['userName']; ?>
                            </div>
                            <div>
                                <form action="assets/logout.php" method="POST">
                                    <input class="btn-disconnect" type="submit" value="Disconnect">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="topNav ">
                    <ul>
                        <li><a href="pages/home.php">Acceuil</a></li>
                        <li><a href="pages/about.php">A-propos</a></li>
                        <li id="active"><a href="pages/speciality.php">Spécialité</a></li>
                        <li><a href="pages/contact.php">Contact</a></li>
                        <li><a href="pages/blog.php">Blog</a></li>
                        <li><a href="pages/cv.php">C_V</a></li>
                    </ul>
                </div>
            </div>

            <!--!Contenu du page-->

            <div class="body ">
                <?php
                $specialite = array(
                    array(
                        'id' => 'spec0',
                        'nom' => 'specialite0',
                        'description' =>
                        '<p>
                            Some text about specialite0 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        ',
                        'photo' => 'assets/images/architect.jpg'
                    ),
                    array(
                        'id' => 'spec1',
                        'nom' => 'specialite1',
                        'description' =>
                        '<p>
                            Some text about specialite1 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>',
                        'photo' => 'assets/images/btp.jpg'
                    ),
                    array(
                        'id' => 'spec2',
                        'nom' => 'specialite2',
                        'description' =>
                        '<p>
                            Some text about specialite2 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>',
                        'photo' => 'assets/images/fermier.jpg'
                    ),
                    array(
                        'id' => 'spec3',
                        'nom' => 'specialite3',
                        'description' =>
                        '<p>
                            Some text about specialite3 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>',
                        'photo' => 'assets/images/historien.jpg'
                    ),
                    array(
                        'id' => 'spec4',
                        'nom' => 'specialite4',
                        'description' =>
                        '<p>
                            Some text about specialite4 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>',
                        'photo' => 'assets/images/musicien.jpg'
                    ),
                    array(
                        'id' => 'spec5',
                        'nom' => 'specialite5',
                        'description' =>
                        '<p>
                            Some text about specialite5 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>',
                        'photo' => 'assets/images/pilote.jpg'
                    ),
                    array(
                        'id' => 'spec6',
                        'nom' => 'specialite6',
                        'description' =>
                        '<p>
                            Some text about specialite6 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>',
                        'photo' => 'assets/images/historien.jpg'
                    ),
                    array(
                        'id' => 'spec7',
                        'nom' => 'specialite7',
                        'description' =>
                        '<p>
                            Some text about specialite7 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>',
                        'photo' => 'assets/images/btp.jpg'
                    )
                );
                ?>
                <div class="sideNav">
                    <?php // bloc de code pour afficher le menu dans le sideNav
                    echo "<ul>";
                    for ($indexSpecialite = 0; $indexSpecialite < count($specialite); $indexSpecialite++) {
                        echo '<li><a href="pages/speciality.php#' . $specialite[$indexSpecialite]['id'] . '">' . $specialite[$indexSpecialite]['nom'] . '</a></li>';
                    }
                    echo "</ul>";
                    ?>
                </div>

                <div class="content">
                    <fieldset>
                        <?php

                        $titrePage = "Nos Spécialités";
                        $descriptionPage =
                            '<p>
                            Some text about our speciality Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>';

                        echo
                        '
                    <legend>' . $titrePage . '</legend>
                    ';
                        echo
                        '
                    <div class="container">
                        <div class="text-container">
                            <div class="container-content">
                                ' . $descriptionPage . '
                            </div>
                        </div>
                    </div>
                    ';
                        ?>

                        <?php
                        $numberColumn = 3;
                        echo
                        '
                        <table>
                            <tr>
                        '; // On ouvre le tableau et on prépare la première ligne
                        for ($indexSpecialite = 0; $indexSpecialite < count($specialite); $indexSpecialite++) {
                            echo
                            '<td>
                                <div class="container"  id="' . $specialite[$indexSpecialite]["id"] . '">
                                    <div class="image-container min">
                                        <img src="' . $specialite[$indexSpecialite]["photo"] . '" alt="' . $specialite[$indexSpecialite]["nom"] . '"/>
                                    </div>

                                    <div class="text-container">
                                    
                                        <div class="container-header small">
                                            <h2> ' . $specialite[$indexSpecialite]["nom"] . ' </h2>
                                        </div>

                                        <div class="container-content small">
                                            ' . $specialite[$indexSpecialite]["description"] . '
                                        </div>
                                    </div>    
                                </div>
                            </td>
                            ';
                            if (($indexSpecialite + 1) == count($specialite)) {
                                echo
                                '
                                </tr>
                                '; // on ferme la dernière ligne et on se prépare à fermer totalement le tableau
                            } elseif (($indexSpecialite + 1) % $numberColumn == 0) {
                                echo
                                '
                                </tr>

                                <tr>
                                '; // on ferme la ligne précedente et on ouvre une autre ligne
                            }
                        }
                        echo
                        '
                        </table>
                        '; // On ferme le tableau
                        ?>
                    </fieldset>
                </div>
            </div>

            <!--!Pied de page-->

            <div class="footer">
                <?php include '../footer.php'; ?>
            </div>
        </div>
    </body>

    </html>

<?php
else :
    header('location: ../index.php');
endif;
?>