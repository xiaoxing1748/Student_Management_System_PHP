<?php
    include("./compoment/session.php");
    include("./compoment/conn.php");
    $course_id=$_GET['course_id'];  
    if(!$course_id){
        echo"<div class='table_text_error'>请输入专业id</div>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="zh-cn">
<body>    
    <?php
        $sql = "SELECT * FROM class LEFT JOIN course ON class.course_id=course.course_id WHERE class.course_id=".$course_id;
        $res = mysqli_query($link,$sql);
        if(mysqli_num_rows($res)==0){
            echo"<div class='table_text_error'>搜索不到内容</div>";
            exit();
        }       
    ?>
    <table border="1" id="table_customers">
        <tr>
            <th>班级id</th>
            <th>班级名称</th>
            <th>专业id</th>
            <th>专业名</th>
        </tr>
    <?php        
       //  循环取出数据
        while($row=mysqli_fetch_row($res))
        {
                echo "<tr>                    
                    <td> {$row[0]}</td>
                    <td> {$row[1]}</td>
                    <td> {$row[2]}</td>
                    <td> {$row[4]}</td>                             
                </tr>";
        }
    ?>
    </table>
</body>

</html>