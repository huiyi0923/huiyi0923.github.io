<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>修改文章</title>
<?php
if (strlen($_GET['title'])<4){
    echo '后端判断：标题不可少于4个';
}elseif (strlen($_GET['title'])>60){
    echo '后端判断：标题最多30个';
}elseif (strlen($_GET['neir'])<20){
    echo '后端判断：内容最少10个字';
}elseif (strlen($_GET['neir'])>500){
    echo '后端判断：内容最多250个字';
}else{
    $servername = "localhost"; //域名
    $username = "yanxi"; //账户名
    $password = "09098734"; //密码
    $dbname = "aqwb"; //数据库名
    //创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    //检测连接
    if ($conn->connect_error) {
        die("连接失败:".$conn->connect_error);
    }
    $sql = "update article set title='".$_GET['title']."' where wid = '".$_GET['wid']."' ";
    $sql2 = "update article set content='".$_GET['neir']."' where wid = '".$_GET['wid']."' ";
    $sql3 = "update article set yangs='".$_GET['ztys']."' where wid = '".$_GET['wid']."' ";
    if ($conn->query($sql) === TRUE) {
        echo "<h3>标题修改成功</h3><br>";
    } else {
        echo "Error:" .$sql . "<br>" . $conn->error;
    }
    if ($conn->query($sql2) === TRUE) {
        echo "<h3>内容修改成功</h3><br>";
    } else {
        echo "Error:" .$sql2 . "<br>" . $conn->error;
    }
    if ($conn->query($sql3) === TRUE) {
        echo "<h3>样式修改成功</h3>";
    } else {
        echo "Error:" .$sql3 . "<br>" . $conn->error;
    }
    $conn->close();
}
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>