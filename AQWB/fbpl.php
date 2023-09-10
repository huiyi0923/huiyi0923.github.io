<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>发布评论</title>
<?php
    $neir = $_GET['neir'];
    if (strlen($neir)<8){
        echo '<h3>后端判断：不可少于4个</h3>';
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
        $sql2 = "SELECT username FROM user WHERE uid = ? "; 
        $mysqli_stmt2 = $mysqli->prepare( $sql2);
        $id2 = $_GET['id'];//找ID为10009 $_GET['id']
        $mysqli_stmt2->bind_param('i', $id2);
        if ($mysqli_stmt2->execute()){
        //bind_ result() 绑定结果集中的值到变量
        $mysqli_stmt2->bind_result($username);
        //遍历结果集
        while ($mysqli_stmt2->fetch()) {
            $username;
        }}

        $mysqli->set_charset('utf8'); //设置字符集
        $sql = "insert into comments(content,zuozheid,bprzuozid,riqi,zuozhe,bprid) values(?,?,?,?,?,?)";
        $mysqli_stmt = $mysqli->prepare($sql);//准 备预处理语句
        $content = $neir;
        $riqi=date('Y-m-d/H:i:s');
        $zuozheid = $_GET['id'];
        $bprzuozid = $_GET['wid'];
        $zuozhe=$username;
        $bprid=$_GET['zuozid'];
        //s代表string类型
        $mysqli_stmt->bind_param('ssssss',$content,$zuozheid,$bprzuozid,$riqi,$zuozhe,$bprid);
        //执行预处理语句
        if ($mysqli_stmt->execute()) {
        echo '<h3>发布成功！</h3>'.$mysqli_stmt->insert_id;//程序成功，返回插入数据表的行id
        echo PHP_EOL;
        // header('Refresh:2,Url=./index2.php?id=$_POST['fbdnr1'];');
        } else {
            echo '<h3>执行失败，内部错误：</h3>'.$mysqli_stmt->error;//执行失败， 错误信息
        }
        mysqli_close($mysqli);
    }
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>