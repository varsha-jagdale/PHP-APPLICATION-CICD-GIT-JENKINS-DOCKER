<?php    
    setcookie("usertype", time() - 3600);
    setcookie("name", time() - 3600);    
    header('Location: index.php');
?>