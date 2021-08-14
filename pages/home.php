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
        <title>Acceuil - Site éducation</title>
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
                        <li id="active"><a href="pages/home.php">Acceuil</a></li>
                        <li><a href="pages/about.php">A-propos</a></li>
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
                        <li><a href="pages/contact.php#formulaire">rohy toy</a></li>
                    </ul>
                </div>

                <div class="content">
                    <fieldset>
                        <?php

                        $titrePage = "<h2> Pages d'acceuil </h2>";
                        $descriptionPage =
                            '<fieldset>
                            <legend><h3> Mot du Directeur </h3></legend>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum ad aut ipsum quidem dolore perferendis et qui, facilis provident eaque rerum cum impedit atque sequi quaerat quos magni tempore? Totam repudiandae animi odit ipsa, optio impedit? Accusamus neque officia rerum, perspiciatis est sit tenetur nobis fuga corrupti iste in explicabo. Odit similique modi laboriosam earum officiis eius, aperiam dolor adipisci fugiat blanditiis provident dolores? Necessitatibus, sit iusto? Amet assumenda omnis minus earum nobis aspernatur neque ipsam ex! Dolorum a unde necessitatibus explicabo eos in nisi, assumenda ducimus dignissimos quas! Nisi, animi. Asperiores molestiae libero accusantium doloremque reiciendis excepturi porro dolorem?
                            </p>
                        </fieldset>
                        ';


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
                        <fieldset>
                            <legend>
                                <h3> Nos activités </h3>
                            </legend>
                            <div class="container-content">
                                <?php
                                $activity = array(
                                    array(
                                        'nom' => 'activity 1',
                                        'description' =>
                                        '
                                    <p>
                                    Some text about activity 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nostrum.
                                    </p>
                                    '
                                    ),
                                    array(
                                        'nom' => 'activity 2',
                                        'description' =>
                                        '
                                    <p>
                                    Some text about activity 2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nostrum.
                                    </p>
                                    '
                                    ),
                                    array(
                                        'nom' => 'activity 3',
                                        'description' =>
                                        '
                                    <p>
                                    Some text about activity 3 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nostrum.
                                    </p>
                                    '
                                    ),
                                    array(
                                        'nom' => 'activity 4',
                                        'description' =>
                                        '
                                    <p>
                                    Some text about activity 4 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, nostrum.
                                    </p>
                                    '
                                    )
                                );
                                ?>

                                <ul class="activity-list">
                                    <?php
                                    foreach ($activity as $activityItem) {
                                        echo
                                        '
                                    <div class="container text-container">
                                        <div class="container-header">
                                            <h4>' . $activityItem['nom'] . '</h4>
                                        </div>

                                        <div class="container-content">
                                            ' . $activityItem['description'] . '
                                        </div>
                                    </div>
                                    ';
                                    }
                                    ?>

                                </ul>
                            </div>
                        </fieldset>
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