<?php
    require_once('./conn.php');
    
    if (isset($_GET['id'])){
        
        $id = $_GET['id'];
        $sql = "DELETE FROM annwoolf_comments WHERE id = $id";
        
        if ($conn->query($sql)){
            header('Location: ./index.php');
        } else {
            echo "failed: " .$conn->error; 
        }
        
    }
?>