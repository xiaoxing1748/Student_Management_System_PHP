<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">

</head>

<body>
<div class="container">
        <div class="box">
            <div class="top">
                <div class="title">
                    登录
                </div>
            </div>
            <div class="middle">
                <form action="./compoment/login.php" class="account_and_password" method="POST">
                    <div>
                        <label for="user_account">账号</label>
                        <input type="text" name="user_account" placeholder="12345678" value="12345678">
                    </div>
                    <p></p>
                    <div>
                        <label for="user_password">密码</label>
                        <input type="password" name="user_password" placeholder="12345678" value="12345678">
                    </div>
                    <div>
                        <button class="button" style="vertical-align:middle"><span>登录</span></button>   
                    </div>
                </form>
            </div>
            <div class="bottom">
                <div class="bottom_text">
                    <a href="./compoment/logout.php">登出当前账号</nuxt-link>
                </div>
            </div>
        </div>
    </div>
</body>
</html>