<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>删除文章</title>
<?php
header( 'content-type:text/html ;charset-utf-8');
$host = "localhost";
$user = "yanxi";
$id=$_GET['id'];
$zuozid=$_GET['zuozid'];
if ($id!=$zuozid){
    echo '<h3>这不是你的文章你无法操作</h3>';
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
    $sql = "DELETE FROM article WHERE wid='".$_GET['wid']."'";
    $sql2 = "DELETE FROM comments WHERE bprzuozid='".$_GET['wid']."'";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$sql2);
    echo'<h3>删除成功</h3>';
    $conn->close();
}
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>