<?php
    include("./compoment/session.php");
    include("./compoment/conn.php");
?>
<!DOCTYPE html>

<html lang="zh-cn">
<body>
    <form action="./compoment/classfunction.php" method="post" target="_blank">
    <table border="1" id="table_customers">
        <tr>
            <th>班级id</th>
            <th>班级名称</th>
            <th>专业id</th>
            <th>专业名</th>
            <th>操作</th>
            <th>操作</th>
        </tr>
    <?php
        $sql = "SELECT * FROM class LEFT JOIN course ON class.course_id=course.course_id";
        $res = mysqli_query($link,$sql);
       //  循环取出数据
        while($row=mysqli_fetch_row($res))
        {
                echo "<tr>
                    
                    <td> {$row[0]}</td>
                    <td> {$row[1]}</td>
                    <td> {$row[2]}</td>
                    <td> {$row[4]}</td>
                    <td><a href='#'  onclick='showclassfunction($row[0])'>修改</td>
                    <td><a href='./compoment/classfunction.php?delid={$row[0]}' target='_blank' onclick='reloadpage();'>删除</td></tr>            
                </tr>";
            }
    ?>
        <tr class="table_tabbar">
            <td colspan="6" style="line-height: 45px;">
                    请输入专业号：<input style="padding-top: 5px;display:inline-block" class="input_text" type="text"  id="course_id" size="30" />
                    <input class="button_little" type="button"  value="查询" onclick="return showclassresult()">                
            </td>
        </tr>
    </table>
</form>
</body>

</html>