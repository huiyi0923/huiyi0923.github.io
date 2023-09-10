<title>删除文件</title>
<?php
header( 'content-type:text/html ;charset-utf-8');
$file = '/www/wwwroot/weiqing.1ao.top/data/'.$_GET['title'];
if (!unlink($file))
  {
  echo ("删除失败");
  }
else
  {
  echo ("成功！ $file");
  }
$id=$_GET['TGwj'];
    $servername = "localhost"; //域名
    $username = "yanxi2"; //账户名
    $password = "09098734"; //密码
    $dbname = "tgk"; //数据库名
    //创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    //检测连接
    if ($conn->connect_error) {
        die("连接失败:".$conn->connect_error);
    }
    $sql = "DELETE FROM tgwz WHERE id='".$_GET['TGwj']."'";
    mysqli_query($conn,$sql);
    echo'<h3>删除成功</h3>';
    $conn->close();
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>