<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>登录判断</title>
<?php     
    echo "结果如下（如果下面没有任何内容 就是：ID或密码错误）";
    echo "<br>";
    $servername = "localhost"; //域名
    $username = "yanxi"; //账户名
    $password = "09098734"; //密码
    $dbname = "aqwb"; //数据库名
    //创建连接.
    $con = new mysqli($servername, $username, $password, $dbname);
    //检测连接
    if ($con->connect_error){
        die("连接失败:". $con->connect_error);
    }
    //查询
    $sql = "select * from user"; 
    $reslut = $con->query($sql);

    $name = $_POST['ID'];
    $mimah=$_POST['mima2'];
    if (strlen($name)<4){
        echo '<h3>后端判断：昵称最少两个字</h3>';
    }elseif(strlen($name)>16){
        echo '<h3>后端判断：昵称最多八个字</h3>';
    }elseif(strlen($mimah)<6){
        echo '<h3>后端判断：密码最少6个</h3>';
    }elseif(strlen($mimah)>8){
        echo '<h3>后端判断：密码最多八个</h3>';
    }elseif($reslut){
        $res = $reslut->fetch_all();
        foreach($res as $k=>$v){
            if ($name==$v[0] && $mimah==$v[5]){
                echo'<h3>登录成功！</h3>';
                ?>
                <script>
                localStorage.setItem('token','IWELQDP5DP24NEJITXN54JEF')
                localStorage.setItem('username',<?php echo $name; ?>)
                setTimeout(() => {
                    location.href='./index2.php?id='
                }, 1000)
                </script>
                <?php
            }
        }
    }else{
        echo"<h3>后端判断：错误</h3>";
    }
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>