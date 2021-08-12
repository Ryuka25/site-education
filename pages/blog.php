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
    <title>Blog - Site éducation</title>
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
                    <li><a href="pages/contact.php">Contact</a></li>
                    <li id="active" ><a href="pages/blog.php">Blog</a></li>
                    <li><a href="pages/cv.php">C_V</a></li>
                </ul>
            </div>
        </div>

        <!--!Contenu du page-->

        <?php

        // Connection à la base de donnée
        $connection = mysqli_connect('localhost', 'admin', 'adminpass', 'info_253');

        // Selection des posts
        $post_select = "SELECT * FROM posts ORDER BY id DESC;";

        // Query POST
        
        if ((isset($_POST['title'])) && ($_POST['title'] != '')) {
            $title = $_POST['title'];
            $content = $_POST['content'];
            $createdat = date('Y-m-d H:i:s');

            // insertion des données

            $post_add = " INSERT INTO posts (title, content, createdat) VALUES ('".$title."','".$content."','".$createdat."') ;";

            $connection->query($post_add);
        }
        

        function blog_link($connection,$post_select){
                // Execution de la requête $post_select
            $posts_result = $connection->query($post_select);
            
            while ($posts_sideNav = mysqli_fetch_array($posts_result)) {
                echo'
                <li>
                    <a href="pages/blog.php#'.$posts_sideNav['id'].'">'.$posts_sideNav['title'].'</a>
                </li>
                ';
            }
        }

        function blog_posts($connection,$post_select){
            

            // Execution de la requête $post_select
            $posts_result = $connection->query($post_select);
                        
            while ($posts = mysqli_fetch_array($posts_result)) {
                echo
                '
                <div class="container"  id="'.$posts['id'].'">
                    <div class="text-container">
                        <div class="container-header">
                            <h2>'.$posts['title'].'</h2>
                        </div>
                        <div>
                            <p>============[ '.$posts['createdat'].' ]</p>                            </div>

                        <div class="container-content">
                            </p>'.$posts['content'].'</p>
                        </div>
                    </div>
                </div>
                ';
            }
        }
        
        ?>

        <div class="body ">

            <div class="sideNav">
                <ul>
                    <li><a href="pages/blog.php#new_blog"> Add New Blog </a></li>
                    <?php
                        blog_link($connection,$post_select);
                    ?>
                    
                </ul>
            </div>

            <div class="content">

                    <fieldset id="new_blog">
                        <div class="container">
                            <form method="POST">
                                <label for="title"> Titre </label>
                                <input type="text" name="title" id="title" placeholder="Entrez le titre du blog ..." required>

                                <label for="content"> Posts </label>
                                <textarea name="content" id="content" cols="30" rows="10" placeholder="Entrez votre blog ici [Utilisez des balises HTML]..." required></textarea>
                            
                                <div class="formButton">
                                    <input type="submit" value="POSTER">
                                </div>
                            </form>
                        </div>
                    </fieldset>
    
                    <?php
                        blog_posts($connection,$post_select);
                    ?>
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