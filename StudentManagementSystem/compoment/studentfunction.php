<?php
    // echo"studentfunction.php";
    include ("conn.php");
    include("session.php");
    // 接收POST传值    
    $student_id=@$_POST['student_id'];
    $student_number=@$_POST['student_number'];
    $student_name=@$_POST['student_name'];
    $student_birth=@$_POST['student_birth'];
    $student_sex=@$_POST['student_sex'];
    $class_id=@$_POST['class_id'];
    $upid=@$_GET['upid'];
    $delid=@$_GET['delid'];
    $arr=@$_REQUEST["item"];
    $all=@$_REQUEST['all']; 
    // echo $arr;
    // exit();

    function close(){
        echo "<script>
                window.close()
                </script>";
    }
    // function deletearr
    function deletearr($arr,$link){
        for($temp=0;$temp<=count($arr);$temp++){
            $sql="DELETE FROM student WHERE student_id='$arr[$temp]'";
            // echo "<br>".$sql."<br>";
            $res=mysqli_query($link,$sql);
            return $res;        
        }
    }
    // function selectupdate
    function selectupdate($upid,$link){
        $sql = "select * from student where student_id='$upid'";
        // echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        while($temp=mysqli_fetch_row($res)){
            echo "
            <div align='center' class='add' style=' margin:0 auto; width: fit-content; background-color: #f9fcf3; border: 1px solid #98bf21;border-radius: 10px;'>
                <link rel='stylesheet' href='../css/table.css'>
                <form action='./compoment/studentfunction.php' method='post' target='_blank'>
                    <table class='table_add'>
                        <tr>
                            <h1 class='top'>修改学生信息</h1>
                        </tr>
                        <tr>
                            <td><input type='hidden' name='temp_student_id' value='$temp[0]'></td>
                        </tr>
                        <tr>
                            <td>学号：<br><input type='text' name='temp_student_number' value='$temp[1]'></td>
                        </tr>
                        <tr>
                            <td>姓名：<br><input type='text' name='temp_student_name' value='$temp[2]'></td>
                        </tr>
                        <tr>
                            <td>生日：<br><input type='date' name='temp_student_birth' value='$temp[3]'></td>
                        </tr>
                        <tr>
                            <td>性别：<br><input type='text' name='temp_student_sex' value='$temp[4]'></td>
                        </tr>
                        <tr>
                            <td>班级：<br><input type='text' name='temp_class_id' value='$temp[5]'></td>
                        </tr>
                        <input type='hidden' name='temp_upid' value='$upid'>
                        <tr>
                            <td class='bottom'>
                                <input class='button_mini' type='reset' name='reset' value='重置'>
                                <input class='button_mini' type='submit' name='submit' value='提交' onclick='showstudent()'>
                                <a href='#' onclick='showstudent() ,showpagecutcontrol()'>
                                <div class='button_mini' style='color: #fff;'>返回</div>
                                </a>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
                ";
            // echo "<br>".$sql."<br>";
        }
    }
    // function update
    $temp_upid=@$_POST['temp_upid'];
    $temp_student_number=@$_POST['temp_student_number'];
    $temp_student_name=@$_POST['temp_student_name'];
    $temp_student_birth=@$_POST['temp_student_birth'];
    $temp_student_sex=@$_POST['temp_student_sex'];
    $temp_class_id=@$_POST['temp_class_id'];
    function update($temp_upid,$temp_student_number,$temp_student_name,$temp_student_birth,$temp_student_sex,$temp_class_id,$link){
        $sql="UPDATE `stu`.`student` SET `student_number` = '$temp_student_number', `student_name` = '$temp_student_name', `student_birth` = '$temp_student_birth', `student_sex` = '$temp_student_sex', `class_id` = '$temp_class_id' WHERE `student_id` = '$temp_upid';";
        // echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        return $res;
    }
    // function insert
    function insert($student_id,$student_number,$student_name,$student_birth,$student_sex,$class_id,$link){
        $sql="INSERT INTO `stu`.`student` (`student_id`, `student_number`, `student_name`, `student_birth`, `student_sex`, `class_id`) VALUES ('$student_id','$student_number','$student_name','$student_birth','$student_sex','$class_id')";
        echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        return $res;
    }
    // function delete
    function delete($delid,$link){
        $sql="delete from student where student_id=$delid";
        // echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        return $res;
    }   

    // 增加学生信息
    if($student_id&&$student_number&&$student_name&&$student_birth&&$student_sex&&$class_id){
        if(insert($student_id,$student_number,$student_name,$student_birth,$student_sex,$class_id,$link)){
            echo "<script>
                alert('插入成功');
                window.close()
                </script>";
        }else{
            echo "<script>
                alert('插入失败');
                window.close()
                </script>";
        }
    }
    // 删除指定学生信息
    if($arr){
        if(deletearr($arr,$link)){
            echo "<script>
                alert('删除指定信息成功');
                </script>";
            close();
        }else{
            echo "<script>
                alert('删除指定信息失败');
                </script>";
            close();
        }
    }
    // 删除学生信息
    if($delid){
        if(delete($delid,$link)){
            echo "<script>
                alert('删除成功');
                </script>";
            close();
        }else{
            echo "<script>
                alert('删除失败');
                </script>";
            close();
        }
    }
    // 修改学生信息
    if($upid){
        selectupdate($upid,$link);
        // close();
             
    }
    if($temp_upid){
        
        if(update($temp_upid,$temp_student_number,$temp_student_name,$temp_student_birth,$temp_student_sex,$temp_class_id,$link)){
            echo "<script>
                alert('修改成功');
                </script>";
            close();

        }else{
            echo "<script>
                alert('修改失败');
                </script>";
            close();

        }
    }
?>