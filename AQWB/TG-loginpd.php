<?php     
    echo "结果如下（如果下面没有任何内容 就是：ID或密码错误）";
    echo "<br>";
    $servername = "localhost"; //域名
    $username = "yanxi2"; //账户名
    $password = "09098734"; //密码
    $dbname = "tgk"; //数据库名
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
    $mimah=$_POST['mima'];
    if (strlen($name)<4){
        echo '后端判断：ID错误';
    }elseif(strlen($name)>16){
        echo '后端判断：ID错误';
    }elseif(strlen($mimah)<6){
        echo '后端判断：密码最少6个';
    }elseif(strlen($mimah)>8){
        echo '后端判断：密码最多八个';
    }elseif($reslut){
        $res = $reslut->fetch_all();
        foreach($res as $k=>$v){
            if ($name==$v[0] && $mimah==$v[2]){
                echo'<h3>登录成功！</h3>';
                ?>
                <script>
                localStorage.setItem('TGid',<?php echo $name; ?>)
                setTimeout(() => {
                    location.href='./mianban.php?TGid=<?php echo $name; ?>'
                }, 1000)
                </script>
                <?php
            }
        }
    }else{
        echo"后端判断：错误";
    }
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>