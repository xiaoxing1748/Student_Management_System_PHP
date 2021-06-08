<?php
    // 设置每页展示条数
    $pagesize=8;
    $sql = "select * from student";
    $res = mysqli_query($link,$sql);
    $total_records=mysqli_num_rows($res);
    $pageNum=ceil($total_records/$pagesize);
    // 判断提交状态
    if(isset($_GET['page']) && $_GET['page'] >1){
        $pageVal=$_GET['page'];
    }else{
        $pageVal=1;
    }
    // 计算起始位置
    $page=($pageVal-1)*$pagesize;
    $sql = "select * from student limit $page,$pagesize";
    $res=mysqli_query($link,$sql);
    // echo "pageVal".$pageVal."<br>pageNum".$pageNum;        
    // 函数
    function pageup($pageVal){
        if($pageVal<=1){
            return $pageVal;
        }else{
            return $pageVal-=1;
        }
    }
    function pagedown($pageVal,$pageNum){
        if($pageVal>=$pageNum){
            return $pageNum;
        }else{
            return $pageVal+=1;
        }
    }
?>    