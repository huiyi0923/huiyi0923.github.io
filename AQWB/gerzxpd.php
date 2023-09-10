<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>签名判断</title>
<?php
                $nr = $_GET['nr'];
                if (strlen($nr)<8){
                    echo '<h3>后端判断：不可少于4个</h3>';
                }elseif (strlen($nr)>100){
                    echo '<h3>后端判断：最多50个</h3>';
                }else{
                    $servername = "localhost"; //域名
                    $username = "yanxi"; //账户名
                    $password = "09098734"; //密码
                    $dbname = "aqwb"; //数据库名
                    //创建连接
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    //检测连接
                    if ($conn->connect_error) {
                        die("连接失败:".$conn>connect_error);
                    }-
                    // $sql = "UPDATE user SET jianjie='.$_POST['nr'].' WHERE uid='10020'";
                    $sql = "update user set jianjie='".$_GET['nr']."' where uid = '".$_GET['id']."' ";
                    if ($conn->query($sql) === TRUE) {
                        echo "<h3>成功</h3>";
                    } else {
                        echo "Error:" .$sql . "<br>" . $conn->error;
                    }
                    $conn->close();

                }
            ?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>