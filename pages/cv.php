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
    <title>Curriculm Vitae - Site éducation</title>
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
            <div class="topNav ">
                <ul>
                    <li><a href="pages/home.php">Acceuil</a></li>
                    <li><a href="pages/about.php">A-propos</a></li>
                    <li><a href="pages/speciality.php">Spécialité</a></li>
                    <li><a href="pages/contact.php">Contact</a></li>
                    <li><a href="pages/blog.php">Blog</a></li>
                    <li id="active" ><a href="pages/cv.php">C_V</a></li>
                </ul>
            </div>
            </div>
        </div>

        <!--!Contenu du page-->

        <div class="body ">

        <?php
            // Connection à la base de donnée
            $connection = mysqli_connect('localhost', 'admin', 'adminpass', 'info_253');

            // Selection des personnes
            $person_select = "SELECT * FROM persons;";

            function persons_list($connection,$person_select) {
                // Exécution de la requête
                $persons_result = $connection->query($person_select);
                while($persons = mysqli_fetch_array($persons_result)) {
                    echo
                    '
                    <td>'.$persons['id'].'</td>
                    <td>'.$persons['email'].'</td>
                    <td>'.$persons['name'].'</td>
                    <td>'.$persons['lastname'].'</td>
                    <td>'.$persons['old'].'</td>
                    <td>'.$persons['phoneNumber'].'</td>
                    <td>'.$persons['sexuality'].'</td>
                    <td>'.$persons['speciality'].'</td>
                    <td>'.$persons['language'].'</td>
                    <td>'.$persons['postSouhaite'].'</td>
                    <td>'.$persons['form_dateDebut'].'</td>
                    <td>'.$persons['form_dateFin'].'</td>
                    <td>'.$persons['form_nomEcole'].'</td>
                    <td>'.$persons['form_title'].'</td>
                    <td>'.$persons['exp_dateDebut'].'</td>
                    <td>'.$persons['exp_dateFin'].'</td>
                    <td>'.$persons['exp_nomEntreprise'].'</td>
                    <td>'.$persons['exp_title'].'</td>
                    <td>'.$persons['loisirs'].'</td>
                    <td><div class="button"><a href=""> Get CV </a></div></td>
                    ';
                }
            }
        ?>
            <div class="content">

                <div class="container" style="overflow-x: auto;">
                    
                    <fieldset>
                        <legend> Nos personnels </legend>

                        <table border="2px">
                            <tr>
                                <th rowspan="2">ID</th>
                                <th rowspan="2">Email</th>
                                <th rowspan="2">Name</th>
                                <th rowspan="2">Lastname</th>
                                <th rowspan="2">Old</th>
                                <th rowspan="2">Phone Number</th>
                                <th rowspan="2">Sexuality</th>
                                <th rowspan="2">Speciality</th>
                                <th rowspan="2">Language</th>
                                <th rowspan="2">Poste Souhaité</th>
                                <th colspan="4">Formation</th>
                                <th colspan="4">Experience</th>
                                <th rowspan="2">Loisirs</th>
                                <th rowspan="2">Curriculum Vitae</th>
                            </tr>
                            <tr>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Nom de l'école</th>
                                <th>Title</th>
                                <th>Date de début</th>
                                <th>Date de fin</th>
                                <th>Nom de l'entreprise</th>
                                <th>Title</th>
                            </tr>
                            <tr>

                            </tr>
                            <tr>
                                <?php
                                persons_list($connection,$person_select);
                                ?>
                            </tr>
                        </table>
                    </fieldset>
                </div>

                <div class="container">
                    <form>
                        <div class="table">
                            <div class="table-row-group">

                                <div class="table-row">

                                    <div class="table-cell">
                                        <fieldset>

                                            <label for="persEmail">E-mail</label>
                                            <input type="email" name="persEmail" id="persEmail" placeholder="E-mail" required>

                                            <label for="persName">Name</label>
                                            <input type="text" name="persName" id="persName" placeholder="Enter the name" required>

                                            <label for="persLastName">Lastname</label>
                                            <input type="text" name="persLastName" id="persLastName" placeholder="Enter the Lastname" required>

                                            <label for="persOld">Old</label>
                                            <input type="number" name="persOld" id="persOld" placeholder="Enter the number of age">

                                            <label for="persPhoneNumber">Phone Number</label>
                                            <input type="text" name="persPhoneNumber" id="persPhoneNumber" placeholder="Phone Number" required>

                                            <label for="persSex"> Sexuality </label>
                                            <select name="persSex" id="persSex">
                                                <option name="persSex" id="persSex" value="m"> Man </option>
                                                <option name="persSex" id="persSex" value="w"> Woman </option>
                                                <option name="persSex" id="persSex" value="r"> Root </option>
                                            </select>

                                            <label for="persSpeciality"> Speciality </label>
                                            <input type="text" name="persSpeciality" id="persSepeciality" placeholder=" Enter your speciality ...">

                                            <label for="persLanguage"> Language </label>
                                            <div><input type="checkbox" name="persLanguage[]" value="fr"> French </div>
                                            <div><input type="checkbox" name="persLanguage[]" value="us"> English </div>
                                            <div><input type="checkbox" name="persLanguage[]" value="es"> Espagnol </div>
                                            <div><input type="checkbox" name="persLanguage[]" value="du"> Allemand </div>
                                            <div><input type="checkbox" name="persLanguage[]" value="others"> Others </div>
                                        
                                        </fieldset>

                                        <fieldset>
                                            <label for="persPost">Poste souhaité </label>
                                            <div><input type="checkbox" name="persPost[]" value="devC"> Developeur C</div>
                                            <div><input type="checkbox" name="persPost[]" value="devWeb"> Developeur Web</div>
                                            <div><input type="checkbox" name="persPost[]" value="technician"> Téchnicien</div>
                                        </fieldset>
                                    </div>

                                    <div class="table-cell">
                                        
                                        <fieldset>
                                            <legend> Formation Professionelle </legend>
                                            <label for="persForm_dateDebut"> Date de début de la formation </label>
                                            <input type="date" name="persForm_DateDebut" id="persForm_DateDebut">
                                            
                                            <label for="persForm_dateFin"> Date de fin de la formation </label>
                                            <input type="date" name="persForm_DateFin" id="persForm_DateFin">
                                            
                                            <label for="persForm_schoolName"> Nom de l'école </label>
                                            <input type="text" name="persForm_schoolName" id="persForm_schoolName" placeholder="Enter your school name here ...">
                                            
                                            <label for="persForm_title"> Title </label>
                                            <input type="text" name="persForm_title" id="persForm_title" placeholder="Enter the degree you haved own ...">
                                        </fieldset>

                                        <fieldset>
                                            <legend> Experience Professionelle </legend>
                                            <label for="persExp_dateDebut"> Date de début </label>
                                            <input type="date" name="persExp_DateDebut" id="persExp_DateDebut">
                                            
                                            <label for="persExp_dateFin"> Date de fin</label>
                                            <input type="date" name="persExp_DateFin" id="persExp_DateFin">
                                            
                                            <label for="persExp_entrepriseName"> Nom de l'entreprise </label>
                                            <input type="text" name="persExp_entrepriseName" id="persExp_entrepriseName" placeholder="Enter your entreprise name here ...">
                                            
                                            <label for="persExp_title"> Title </label>
                                            <input type="text" name="persExp_title" id="persExp_title" placeholder="Enter the your title here ...">
                                        </fieldset>
                                
                                        <fieldset>
                                            <legend for="persLoisir"> Loisirs </legend>
                                            <textarea name="persLoisir" id="persLoisir" cols="30" rows="10" placeholder="Enter everything making fun here ..."></textarea>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="formButton">
                            <input type="submit">
                        </div>
                    </form>
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