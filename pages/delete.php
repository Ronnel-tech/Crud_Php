<?php 
session_start();
require('../config/database.php');

    if(isset($_POST['delete_record']))
        {

                    
                        $lastName = $_POST['last_name'];
                        $firstName = $_POST['first_name'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $gender = $_POST['gender'];

                        $sql = "DELETE FROM crud_users WHERE id=?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$_POST['id']]);

                        header("Location: ../index.php");
                        exit();
                    
                
        }   
?>