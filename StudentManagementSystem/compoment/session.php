<?php
    session_start();
    if(empty($_SESSION['login'])){
        echo "<script>
                alert('未登录');
                location.href='login.php';
                </script>";
        exit();
    }
?>