<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="container"  id="formulaire">
        <form method="POST">
            <label for="title"> Titre </label><br>
            <input type="text" name="title" id="title"><br>
            
            <label for="content"> Contenu </label><br>
            <textarea name="content" id="" cols="30" rows="10"></textarea><br>
            <div class="formButton">
                <input type="submit" value="POSTER">
            </div>
        </form>
    </div>

    <?php

        // Connection à la base
        $conn = mysqli_connect('127.0.0.1', 'admin', 'adminpass', "INFO_253");

        if (count($_POST) > 0) {
            $titre = $_POST['title'];
            $contenu = $_POST['content'];
            $createdat = date('Y-m-d H:i:s');

            // insertion des données
            $sql_insert = "INSERT INTO posts (title, content, createdat) VALUES ('".$titre."', '".$contenu."', '".$createdat."')";
            
            $conn->query($sql_insert);
        }

        // Selection d'une table
        $sql = "SELECT * FROM posts ORDER BY id DESC;";

        // Executer la requete
        $result=$conn->query($sql);

        while ($data = mysqli_fetch_array($result)) {
            echo"
            <p>
                <h5>".$data['title']."</h5>
                <p>".$data['content']."</p>
                <p>".$data['createdat']."</p>
            </p>";
        }
        
    ?>

</body>
</html>

</html>