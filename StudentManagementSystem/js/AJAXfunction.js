var xmlHttp;

function createXmlHttpRequestObject() {
    if (window.ActiveXObject) {
        try {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xmlHttp = false;
        }

    } else {
        try {
            xmlHttp = new XMLHttpRequest();
        } catch (e) {
            xmlHttp = false;
        }
    }
    if (!xmlHttp)
        alert("返回创建的对象或显示错误信息");
    else
        return xmlHttp;
}
// 菜单
function menu() {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getmenu;
    xmlHttp.open("GET", './compoment/menu.php', true);
    xmlHttp.send(null);

}

function getmenu() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("menu").innerHTML = xmlHttp.responseText;
        console.log("getmenu");
        // 优先显示学生页控件并连带显示学生页
        showpagecutcontrol()
    }
}
// 显示班级页主页
function showclass() {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getclass;
    xmlHttp.open("GET", 'class.php', true);
    xmlHttp.send(null);

}

function getclass() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showclass").innerHTML = xmlHttp.responseText;
        document.getElementById("showstudent").style.display = "none";
        document.getElementById("showsturesult").style.display = "none";
        document.getElementById("showstudentfunction").style.display = "none";
        document.getElementById("showclassfunction").style.display = "none";
        document.getElementById("addstu").style.display = "none"
        document.getElementById("addclass").style.display = "none"
        document.getElementById("showclass").style.display = "";
        document.getElementById("showpagecutcontrol").style.display = "";
        // location.reload();
        console.log("getclass");
    }
}
// 班级页：按专业id筛选
function showclassresult() {
    createXmlHttpRequestObject();
    var course_id = document.getElementById("course_id").value;
    xmlHttp.onreadystatechange = getclassresult;
    xmlHttp.open("GET", 'classresult.php?course_id=' + course_id, true);
    xmlHttp.send(null);

}

function getclassresult() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showclassresult").innerHTML = xmlHttp.responseText;
        document.getElementById("showclassresult").style.display = "";
        console.log("getclassresult");
    }
}

// 显示分页控件
function showpagecutcontrol() {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getpagecutcontrol;
    xmlHttp.open("GET", './compoment/pagecutcontrol.php', true);
    xmlHttp.send(null);

}


function getpagecutcontrol() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showpagecutcontrol").innerHTML = xmlHttp.responseText;
        document.getElementById("showpagecutcontrol").style.display = "";
        document.getElementById("showclassfunction").style.display = "none"
        document.getElementById("showstudentfunction").style.display = "none"
        document.getElementById("showclass").style.display = "none";
        document.getElementById("addstu").style.display = "none";
        document.getElementById("showclassresult").style.display = "none";

        showstudent()
        console.log("pagecut");
    }
}
// 显示学生页主页
function showstudent() {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getstudent;
    xmlHttp.open("GET", 'student.php', true);
    xmlHttp.send(null);
}


function getstudent() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showstudent").innerHTML = xmlHttp.responseText;
        document.getElementById("showclass").style.display = "none";
        document.getElementById("addstu").style.display = "none";
        document.getElementById("addclass").style.display = "none"
        document.getElementById("showstudent").style.display = "";
        // location.reload();
        console.log("getstudent");
    }
}

// 学生页：分页显示topageup
function topageup(pageup) {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getpageup;
    xmlHttp.open("GET", 'student.php?page=' + pageup, true);
    xmlHttp.send(null);

}

function getpageup() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showstudent").innerHTML = xmlHttp.responseText;
        console.log("pageup");
    }
}
// 学生页：分页显示topagedown
function topagedown(pagedown) {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getpagedown;
    xmlHttp.open("GET", 'student.php?page=' + pagedown, true);
    xmlHttp.send(null);

}

function getpagedown() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showstudent").innerHTML = xmlHttp.responseText;
        console.log("pagedown");
    }
}
// 学生页：显示按班级筛选结果
function showsturesult() {
    createXmlHttpRequestObject();
    var class_id = document.getElementById("class_id").value;
    xmlHttp.onreadystatechange = getstudentresult;
    xmlHttp.open("GET", 'sturesult.php?class_id=' + class_id, true);
    xmlHttp.send(null);

}

function getstudentresult() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showsturesult").innerHTML = xmlHttp.responseText;
        document.getElementById("showsturesult").style.display = "";
        console.log("getstudentresult");
    }
}
// 学生页：跳转到添加学生
function addstu() {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = toaddstu;
    xmlHttp.open("GET", './compoment/addstu.html', true);
    xmlHttp.send(null);

}

function toaddstu() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("addstu").innerHTML = xmlHttp.responseText;
        document.getElementById("showsturesult").style.display = "none";
        document.getElementById("showclassresult").style.display = "none";
        document.getElementById("showpagecutcontrol").style.display = "none";
        document.getElementById("addstu").style.display = ""
        console.log("addstu");
    }
}
// 学生页：跳转到修改学生
function showstudentfunction(student_id) {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getstudentfunction;
    xmlHttp.open("GET", './compoment/studentfunction.php?upid=' + student_id, true);
    xmlHttp.send(null);

}

function getstudentfunction() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showstudentfunction").innerHTML = xmlHttp.responseText;
        document.getElementById("showsturesult").style.display = "none";
        document.getElementById("showclassresult").style.display = "none";
        document.getElementById("showpagecutcontrol").style.display = "none";
        document.getElementById("addstu").style.display = "none"
        document.getElementById("showclassfunction").style.display = "none"
        document.getElementById("showstudentfunction").style.display = ""
        console.log("showstudentfunction");
    }
}
// 班级页：跳转到添加班级
function addclass() {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = toaddclass;
    xmlHttp.open("GET", './compoment/addclass.html', true);
    xmlHttp.send(null);

}

function toaddclass() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("addclass").innerHTML = xmlHttp.responseText;
        document.getElementById("showpagecutcontrol").style.display = "none";
        document.getElementById("addclass").style.display = ""
        console.log("addclass");
    }
}

function showpagecontrol() {
    document.getElementById("showpagecutcontrol").style.display = "";
}
// 班级页：跳转到修改班级
function showclassfunction(class_id) {
    createXmlHttpRequestObject();
    xmlHttp.onreadystatechange = getclassfunction;
    xmlHttp.open("GET", './compoment/classfunction.php?upid=' + class_id, true);
    xmlHttp.send(null);

}

function getclassfunction() {
    if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
        document.getElementById("showclassfunction").innerHTML = xmlHttp.responseText;
        document.getElementById("showsturesult").style.display = "none";
        document.getElementById("showclassresult").style.display = "none";
        document.getElementById("showstudentfunction").style.display = "none"
        document.getElementById("showpagecutcontrol").style.display = "none";
        document.getElementById("addstu").style.display = "none"
        document.getElementById("showclassfunction").style.display = ""
        console.log("showclassfunction");
    }
}