<?php
                        session_start();
                        $userName = "ryuka@site.com";
                        $password = "123";
                        
                        if (isset($_POST) && (count($_POST) > 0)) {
                            if (($_POST['userName'] == $userName) && ($_POST['password'] == $password)) {
                                $_SESSION['userName'] = $_POST['userName'];
                                header('location: ../pages/home.php');
                            }
                        }
?>
