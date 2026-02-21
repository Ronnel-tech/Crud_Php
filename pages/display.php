    <?php 

        require('config/database.php');
        $stmt = $pdo->query("SELECT * FROM crud_users");
        $rows = $stmt->fetchAll() 

    
    ?>