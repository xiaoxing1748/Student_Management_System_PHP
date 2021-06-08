<?php
    include("conn.php");
    include("pagecut.php");
?>
<!DOCTYPE html>
<html lang="zh-cn">
<script src="./js/AJAXfunction.js"></script>

<body>
    <!-- <h1>学生列表</h1> -->
    <div>
        <a href='#' onclick="return addstu()"><div class="button_little">添加学生</div></a>
        <a href="#" onclick="return addclass()"><div class="button_little">添加班级</div></a>
        <!-- <a href="#" onclick="showstudentpagecut()"><div>切换显示</div></a> -->
        <a onclick="topageup(<?php echo pageup($pageVal) ?>)" href="#" ><div class="bottom_vertical">▲</div></a>
        <a onclick="topagedown(<?php echo pagedown($pageVal,$pageNum) ?>)" href="#"><div class="bottom_vertical">▼</div></a>
    </div>            
</body>

</html>