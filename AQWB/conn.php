<?php
$servername = "localhost"; $username = "yanxi"; $password ='09098734';$port='3306'; //创建连接
$conn = mysqli_connect($servername, $username, $password); //检测连接
if (!$conn) {
	die("Connection failed:". mysqli_connect_error());
}
echo "连接成功";

mysqli_close($conn);//关闭连接
?>