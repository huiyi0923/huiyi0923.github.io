<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>发布文章</title>
<?php
    $fbdnr1 = $_GET['fbdnr1'];
    $fbdnr2 = $_GET['fbdnr2'];
    if (strlen($fbdnr1)<8){
        echo '<h3>后端判断：标题不可少于4个</h3>';
    }elseif (strlen($fbdnr1)>60){
        echo '<h3>后端判断：标题最多30个</h3>';
    }elseif (strlen($fbdnr2)<20){
        echo '<h3>后端判断：内容最少10个字</h3>';
    }elseif (strlen($fbdnr1)>500){
        echo '<h3>后端判断：内容最多250个字</h3>';
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
        $sql2 = "SELECT username,QQ FROM user WHERE uid = ? "; 
        $mysqli_stmt2 = $mysqli->prepare( $sql2);
        $id2 = $_GET['id'];//找ID为10009 $_GET['id']
        $mysqli_stmt2->bind_param('i', $id2);
        if ($mysqli_stmt2->execute()){
        //bind_ result() 绑定结果集中的值到变量
        $mysqli_stmt2->bind_result($username,$QQ);
        //遍历结果集
        while ($mysqli_stmt2->fetch()) {
            $username;
            $QQ;
        }}

        $mysqli->set_charset('utf8'); //设置字符集
        $sql = "insert into article(title,content,riqi,zuozhe,zuozid,QQ2,yangs) values(?,?,?,?,?,?,?)";
        $mysqli_stmt = $mysqli->prepare($sql);//准 备预处理语句
        $title = $_GET['fbdnr1'];
        $content = $_GET['fbdnr2'];
        $riqi=date('Y-m-d/H:i:s');
        $zuozhe= $username;
        $zuozid=$id2;
        $QQ2=$QQ;
        $yangs=$_GET['ztys'];
        //s代表string类型
        $mysqli_stmt->bind_param('ssssssi',$title,$content,$riqi,$zuozhe,$zuozid,$QQ2,$yangs);
        //执行预处理语句
        if ($mysqli_stmt->execute()) {
        echo '<h3>发布成功！你的文章ID：<h3>'.$mysqli_stmt->insert_id;//程序成功，返回插入数据表的行id
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