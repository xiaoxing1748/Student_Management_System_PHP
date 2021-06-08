<?php
    include("./compoment/session.php");
    include("./compoment/conn.php");
    $class_id=$_GET['class_id'];  
    if(!$class_id){
        echo"<div class='table_text_error'>请输入班级id</div>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <div>
        <?php
            $sql = "select * from student where class_id=".$class_id;
            // echo $sql;
            $res = mysqli_query($link,$sql);
            if(mysqli_num_rows($res)==0){
                echo"<div class='table_text_error'>搜索不到内容</div>";
                exit();
            } 
        ?> 
        <table border='1' id="table_customers">
            <tr>
                <th>学生id</th>
                <th>学号</th>
                <th>姓名</th>
                <th>生日</th>
                <th>性别</th>
                <th>班级</th>
            </tr>
        <?php
            //  循环取出数据
            while($row=mysqli_fetch_row($res))
            {   
                echo "
                <tr>
                    <td> {$row[0]}</td>
                    <td> {$row[1]}</td>
                    <td> {$row[2]}</td>
                    <td> {$row[3]}</td>
                    <td> {$row[4]}</td>
                    <td> {$row[5]}</td>           
                </tr>";
            }
            ?>            
        </table>
    </div>
</body>
</html>