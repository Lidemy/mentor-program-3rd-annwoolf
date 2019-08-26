<?php
    require_once('./conn.php');
    
    $id = $_POST['id'];
    $content = $_POST['content'];

    $sql = "UPDATE annwoolf_comments SET content='$content' WHERE id = '$id' ";
        
    if ($conn->query($sql)){
        header('Location: ./index.php');
    } else {
        echo "failed: " .$conn->error; 
    }
        
?>