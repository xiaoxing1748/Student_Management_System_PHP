// /**
//  *设置单击响应函数
//  * @param  {[String]} objStr [ 要设置单击响应事件的元素的id ]
//  * @param  {[function]} fun  [ 单击后响应的行为 ]
//  * @return {[none]}
//  */
// 没什么用的修改颜色
function change(myid, mode) {
    document.getElementById(myid).style.display = mode;
    if (mode == 'block') {
        //设置下拉菜单所在div的边框
        document.getElementById(myid).style.borderTop = "none";
        //设置鼠标划过的li的边框及背景颜色
        document.getElementById(myid).parentNode.style.backgroundColor = "#fff";
        document.getElementById(myid).parentNode.style.borderBottom = "none";
    } else {
        //当不显示下拉列表时，鼠标划过的li的边框及背景颜色
        document.getElementById(myid).parentNode.style.backgroundColor = "";
        document.getElementById(myid).parentNode.style.border = "";
    }
}

// 显示时间
// function time() {
//     var vWeek, vWeek_s, vDay;
//     vWeek = ["星期天", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六"];
//     var date = new Date();
//     year = date.getFullYear(); //年
//     month = date.getMonth() + 1; //月
//     day = date.getDate(); //日
//     hours = date.getHours(); //时
//     minutes = date.getMinutes(); //分
//     seconds = date.getSeconds(); //秒
//     vWeek_s = date.getDay(); //周
//     document.getElementById("time").innerHTML = "&nbsp;&nbsp;" + year + "/" + month + "/" + day + "/" + "\t" + hours + ":" + minutes + ":" + seconds + "\t" + vWeek[vWeek_s];
//     setInterval("time()", 1000);
// };

// 重载页面，延迟1s
function reloadpage() {
    setTimeout("location.reload();", 1000);
}
// // 全选
// var item = document.getElementsByName("item");

// function myClick(objStr, fun) {
//     var obj = document.getElementById(objStr);
//     obj.onclick = fun;
// }
// // 获取全选/全不选选项
// var checkOrCancelAll = document.getElementById("checkOrCancelAll");

// // 全选/全不选
// myClick("checkOrCancelAll", function() {
//     if (this.checked) {
//         for (var i = 0; i < item.length; i++) {
//             item[i].checked = true;
//         }
//     } else {
//         for (var i = 0; i < item.length; i++) {
//             item[i].checked = false;
//         }
//     }
// });