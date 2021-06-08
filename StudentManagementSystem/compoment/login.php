<?php 
    include "conn.php";       
    session_start();
    $_SESSION['login']=false;
	//POST传值
	$account =$_POST['user_account'];
	$password =$_POST['user_password'];
    // 判断账号密码是否存在输入
    if($account&&$password){
        $sql = "select * from account where id='".$account."' and pass = '".$password."'";
        // 若存在则尝试查询表account
        $res=mysqli_query($link,$sql);
        
        if(mysqli_num_rows($res)>0){
            $_SESSION['login']=true;
            echo "<script>
            alert('登陆成功');
            location.href='../index.php'
            </script>"; 
        }else{
            // 账号密码错误的提示
            echo "<script>
                alert('账号密码错误');
                history.back();
                </script>";
        }

    }else{
        // 账号密码未输入的提示
        echo "<script>
            alert('账号密码未输入');
            history.back();
            </script>";
    }

 ?>