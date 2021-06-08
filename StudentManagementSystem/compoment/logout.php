<?php
    session_start();
    session_unset();
    session_destroy();
    echo "<script>
    alert('登出成功');
    location.href='../login.php';
    </script>";
    // header('location:../login.php');
?>