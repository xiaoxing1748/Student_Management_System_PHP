<?php
    // echo"classfunction.php";
    include ("conn.php");
    include("session.php");
    // 接收POST传值    
    $class_id=@$_POST['class_id'];
    $class_name=@$_POST['class_name'];
    $course_id=@$_POST['course_id'];
    $delid=@$_GET['delid'];
    $upid=@$_GET['upid'];

    function close(){
        echo "<script>
                window.close()
                </script>";
    }
    
    // function selectupdate
    function selectupdate($upid,$link){
        $sql = "select * from class where class_id='$upid'";
        // echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        while($temp=mysqli_fetch_row($res)){
            echo "
            <div align='center' class='add' style=' margin:0 auto; width: fit-content; background-color: #f9fcf3; border: 1px solid #98bf21;border-radius: 10px;'>
            <link rel='stylesheet' href='../css/table.css'>
            <form action='./compoment/classfunction.php' method='post' target='_blank'>
                <table>
                    <h1 class='top'>修改班级信息</h1>
                    <tr>
                        <td><input type='hidden' name='temp_class_id' value='$temp[0]'></td>
                    </tr>
                    <tr>
                        <td>班级：<br><input type='text' name='temp_class_id' value='$temp[0]'></td>
                    </tr>
                    <tr>
                        <td>班级名字：<br><input type='text' name='temp_class_name' value='$temp[1]'></td>
                    </tr>
                    <tr>
                        <td>专业id：<br><input type='text' name='temp_course_id' value='$temp[2]'></td>
                    </tr>
                    <input type='hidden' name='temp_upid' value='$upid'>
                    <td class='bottom'>
                            <input class='button_mini' type='reset' name='reset' value='重置'>
                            <input class='button_mini' type='submit' name='submit' value='提交' onclick='showclass()'>
                            <a href='#' onclick='showclass() '>
                            <div class='button_mini' style='color: #fff;'>返回</div>
                            </a>
                    </td>
                </table>
            </form>
        </div>
            ";
            // echo "<br>".$sql."<br>";
        }
    }
    // function update
    $temp_upid=@$_POST['temp_upid'];
    $temp_class_id=@$_POST['temp_class_id'];
    $temp_class_name=@$_POST['temp_class_name'];
    $temp_course_id=@$_POST['temp_course_id'];
    function update($temp_upid,$temp_class_id,$temp_class_name,$temp_course_id,$link){
        $sql="UPDATE `stu`.`class` SET `class_name` = '$temp_class_name', `course_id` = '$temp_course_id',`class_id` = '$temp_class_id' WHERE `class_id` = '$temp_upid';";
        // echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        return $res;
    }
    // function insert
    function insert($class_id,$class_name,$course_id,$link){
        $sql="INSERT INTO `stu`.`class` (`class_id`, `class_name`, `course_id`) VALUES ('$class_id','$class_name','$course_id')";
        echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        return $res;
    }
    // function delete
    function delete($delid,$link){
        $sql="delete from class where class_id=$delid";
        // echo "<br>".$sql."<br>";
        $res=mysqli_query($link,$sql);
        return $res;
    }   

    // 增加班级信息
    if($class_id&&$class_name&&$course_id){
        if(insert($class_id,$class_name,$course_id,$link)){
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

    // 删除班级信息
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
    // 修改班级信息
    if($upid){
        selectupdate($upid,$link);
        // close();
             
    }
    if($temp_upid){
        
        if(update($temp_upid,$temp_class_id,$temp_class_name,$temp_course_id,$link)){
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