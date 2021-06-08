<?php
    include("./compoment/session.php");
    include("./compoment/conn.php");
    include("./compoment/pagecut.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
<body>
    <div id="pagecut">        
        <form action="./compoment/studentfunction.php" method="POST" target="_blank">
        <table border="1" id="table_customers">
            <tr>
                <!-- <th><input type="checkbox" name="all" value="all">学生id</th> -->
                <th>学生id</th>
                <th>学号</th>
                <th>姓名</th>
                <th>生日</th>
                <th>性别</th>
                <th>班级</th>
                <th>操作</th>
                <th>操作</th>
            </tr>
        <?php        
        //  循环取出数据
            while($row=mysqli_fetch_row($res))
            {
        ?>
            <tr>
                <td><input style="float: left;" type='checkbox'  value='<?php echo $row[0]?>' name='item[]' /><?php echo$row[0]?></td>
                <td><?php echo$row[1]?></td>
                <td><?php echo$row[2]?></td>
                <td><?php echo$row[3]?></td>
                <td><?php echo$row[4]?></td>
                <td><?php echo$row[5]?></td>
                <td><a href='#' onclick="showstudentfunction(<?php echo$row[0]?>)">修改</td>
                <td><a href='./compoment/studentfunction.php?delid=<?php echo$row[0]?>' target="_blank" onclick="reloadpage();">删除</td></tr>            
            </tr>
            <?php
            }
            ?>
            <tr  class="table_tabbar">
                <td colspan="3">
                    <div align="center">
                        <input class="button_little" type="submit" onclick="reloadpage()" value="批量删除"/>
                    </div>
                </td>
                <td colspan="6" style="line-height: 45px;">
                    请输入班级号：<input style="padding-top: 5px;display:inline-block" class="input_text"  type="text" id="class_id" size="30" />
                    <input class="button_little" type="button"  value="查询" onclick="return showsturesult()">                
                </td>
            </tr>
        </table>
        </form>
    </div>
</body>

</html>