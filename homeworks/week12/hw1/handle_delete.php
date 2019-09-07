<?php
    include_once('check_login.php');
    require_once('conn.php');
    require_once('utils.php');
    
    if (
        isset($_POST['id']) &&
        !empty($_POST['id'])
        ){
        
        $id = $_POST['id'];
   
        //$sql = "DELETE FROM annwoolf_comments WHERE id = $id or parent_id = $id";
        //$result = $conn->query($sql);

        $stmt = $conn->prepare("DELETE FROM annwoolf_comments WHERE id = ? or parent_id = ?");
        $stmt->bind_param("ss", $id, $id);
        $result = $stmt->execute();

        if ($result){
            header('Location: ./index.php');
        } else {
            alertMessage('錯誤NO', './index.php');
        }
        
    } else {
        alertMessage('錯誤', './index.php');
    }
?>