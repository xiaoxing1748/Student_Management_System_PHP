<?php
    session_start();
    session_unset();
    session_destroy();
    echo "<script>
    alert('η»εΊζε');
    location.href='../login.php';
    </script>";
    // header('location:../login.php');
?>