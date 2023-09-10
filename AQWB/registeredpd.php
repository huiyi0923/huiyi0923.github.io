<!--<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">-->
<!--<title>注册判断</title>-->
<?php     
    $name = $_POST['username2'];
    $QQh=$_POST['QQ2'];
    $mimah=$_POST['mima2'];
    $mimah2=$_POST['mima3'];
    if (strlen($name)<4){
        echo '<h3>后端判断：昵称最少两个字</h3>';
    }elseif(strlen($name)>16){
        echo '<h3>后端判断：昵称最多八个字</h3>';
    }elseif(strlen($QQh)<5){
        echo '<h3>后端判断：请输入正确的QQ号</h3>';
    }elseif(strlen($mimah)<6){
        echo '<h3>后端判断：密码最少6个</h3>';
    }elseif(strlen($mimah)>8){
        echo '<h3>后端判断：密码最多八个</h3>';
    }elseif($mimah!=$mimah2){
        echo '<h3>后端判断：两次输入的不一致</h3>';
    }else{
        header('content-type: text/html ; charset=utf-8');
        $host = "localhost";
        $user = "yanxi";
        $password = "09098734";
        $db = "aqwb";
        $mysqli = new mysqli($host, $user, $password, $db); //实例化mysqli对象，连接mysql数据库
        if ($mysqli->connect_errno) {
            die($mysqli->connect_error);
        }
        $mysqli->set_charset('utf8'); //设置字符集
        $sql = "insert into user(username,QQ,mima,zhucsj) values(?,?,?,?)";
        $mysqli_stmt = $mysqli->prepare($sql);//准 备预处理语句
        $username = $_POST['username2'];
        $QQ=$_POST['QQ2'];
        $mima=$_POST['mima2'];
        $zhucsj=date('Y-m-d/H:i:s');
        //s代表string类型
        $mysqli_stmt->bind_param('ssss' ,$username , $QQ,$mima,$zhucsj);
        //执行预处理语句
        if ($mysqli_stmt->execute()) {
            echo '<h3>注册成功！你的ID：</h3>'.$mysqli_stmt->insert_id;//程序成功，返回插入数据表的行id
            ?>
            <script>localStorage.setItem('ID', <?php echo $mysqli_stmt->insert_id; ?> ) </script>
            <?php
            echo PHP_EOL;
            echo '<br>';
            echo '<a href="./login.html">点“鸡”登录</a>';
        }else{
            echo '<h3>执行失败，内部错误：</h3>'.$mysqli_stmt->error;//执行失败， 错误信息
        }
        mysqli_close($mysqli);
    }
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>