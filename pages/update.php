<?php 
session_start();
require('../config/database.php');

    if(isset($_POST['update_record']))
        {

                    
                        $lastName = $_POST['last_name'];
                        $firstName = $_POST['first_name'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $gender = $_POST['gender'];

                        $sql = "UPDATE crud_users SET crud_last_name=?, crud_first_name=?, crud_email=?, crud_address=?, crud_gender=? WHERE id=?";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$lastName, $firstName, $email, $address, $gender, $_POST['id']]);

                        header("Location: ../index.php");
                        exit();
                    
                
        }   
?>