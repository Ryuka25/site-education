<?php
                        session_start();
                        $_SESSION['record'] = array(); /* usage dans contact.php */
                        $userName = "Ryuka";
                        $password = "123";
                        
                        if (isset($_POST) && (count($_POST) > 0)) {
                            if (($_POST['userName'] == $userName) && ($_POST['password'] == $password)) {
                                $_SESSION['userName'] = $_POST['userName'];
                                header('location: ../pages/home.php');
                            } else {
                                header('location: ../index.php');
                                $_SESSION['loginError'] = 1;
                            }
                        }
?>