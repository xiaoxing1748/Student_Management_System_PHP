<?php
    include("./compoment/session.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生信息管理系统</title>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <link rel="stylesheet" href="./css/compoment.css">
    <link rel="stylesheet" href="./css/table.css">
    <script src="./js/AJAXfunction.js"></script>
    <script src="./js/style.js"></script>

</head>

<body onload="menu()">
    <div class="navigation">
        <div class="width">
            <div class="left" style="display: flex;line-height: 50px;">
                <div style="font-size: 30px;">😅</div>
                <!-- <div onload="return time()"></div> -->
            </div>
            <div class="right" style="display: flex;line-height: 50px;">
                <div style="margin-right: 20px;">欢迎，admin</div>
                <a href="./compoment/logout.php">退出</a>
            </div>
        </div>
    </div>
    <div class="container">           
        <div class="mainmenu left" id="menu"></div>
        <div class="middle">
            <div class="show">
                <div id="showclass"></div>
                <div id="showstudent"></div>
            </div>
            <div class="result">
                <div id="showsturesult"></div>
                <div id="showclassresult"></div>
            </div>
        </div>
        <div class="control" id="showpagecutcontrol"></div>            
        <div class="add">
            <div id="addstu"></div>
            <div id="addclass"></div>
            <div id="showstudentfunction"></div>   
            <div id="showclassfunction"></div>  
        </div>
    </div>
</body>

</html>