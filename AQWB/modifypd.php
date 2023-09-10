<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>修改判断</title>
<?php     
    echo "<h3>结果如下（如果下面没有任何内容 就是：用户名或密码错误）</h3>";
    echo "<br>";
    $servername = "localhost"; //域名
    $username = "yanxi"; //账户名
    $password = "09098734"; //密码
    $dbname = "aqwb"; //数据库名
    //创建连接.
    $conn = new mysqli($servername, $username, $password, $dbname);
    //检测连接
    if ($con->connect_error){
        die("连接失败:". $con->connect_error);
    }
    //查询

    $nic = $_GET['nic'];
    $xgQQ=$_GET['xgQQ'];
    $mima=$_GET['mima'];
    if (strlen($nic)<4){
        echo '<h3>后端判断：昵称最少两个字</h3>';
    }elseif(strlen($nic)>16){
        echo '<h3>后端判断：昵称最多八个字</h3>';
    }elseif(strlen($mima)<6){
        echo '<h3>后端判断：密码最少6个<h3>';
    }elseif(strlen($mima)>8){
        echo '<h3>后端判断：密码最多八个<h3>';
    }elseif(strlen($xgQQ)<5){
        echo '<h3>后端判断：QQ账号错误</h3>';
    }elseif(strlen($xgQQ)>15){
        echo '<h3>后端判断：QQ账号错误</h3>';
    }else{
        $sql = "update user set username='".$_GET['nic']."' where uid = '".$_GET['uid']."' ";
        $sql2 = "update user set QQ='".$_GET['xgQQ']."' where uid = '".$_GET['uid']."' ";
        $sql3 = "update user set mima='".$_GET['mima']."' where uid = '".$_GET['uid']."' ";
        if ($conn->query($sql) === TRUE) {
            echo "<h3>昵称修改成功</h3><br>";
        } else {
            echo "Error:" .$sql . "<br>" . $conn->error;
        }
        if ($conn->query($sql2) === TRUE) {
            echo "<h3>QQ修改成功</h3><br>";
        } else {
            echo "Error:" .$sql2 . "<br>" . $conn->error;
        }
        if ($conn->query($sql3) === TRUE) {
            echo "<h3>密码修改成功</h3>";
        } else {
            echo "Error:" .$sql3 . "<br>" . $conn->error;
        }
        $conn->close();
    }
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>