<?php 
    require('../config/database.php');

    if(isset($_POST['add_record']))
        {
            if (!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['gender'])) 
                {
                    {
                        $lastName = $_POST['last_name'];
                        $firstName = $_POST['first_name'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $gender = $_POST['gender'];

                        $sql = "INSERT INTO crud_users (crud_last_name, crud_first_name, crud_email, crud_address, crud_gender) VALUES (?, ?, ?, ?, ?)";
                        $stmt = $pdo->prepare($sql);
                        $stmt->execute([$lastName, $firstName, $email, $address, $gender]);

                        header("Location: ../index.php");
                        exit();
                    }
                }
                else 
                    {
                        echo "<script>alert('Please fill in all fields!');</script>";
                    }
        }   
?>