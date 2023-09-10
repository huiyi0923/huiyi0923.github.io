
<?php
header( 'content-type:text/html ;charset-utf-8');
$host = "localhost";
$user = "yanxi";
$password = "09098734";
$db = "aqwb";
$mysqli = new mysqli ($host, $user, $password, $db);
if ( $mysqli->connect_errno){
    die($mysqli->connect_error);
}
$mysqli->set_charset('utf8');

$sql = "SELECT title,content,riqi,zuozhe FROM article WHERE wid = ? "; 
$mysqli_stmt = $mysqli->prepare( $sql);
$id = $_POST['czwz2'];//找ID为10009
$mysqli_stmt->bind_param('s', $id);
if ($mysqli_stmt->execute()){
//bind_ result() 绑定结果集中的值到变量
$mysqli_stmt->bind_result($title, $content, $riqi,$zuozhe);
//遍历结果集
while ($mysqli_stmt->fetch()) {
    $title;
    $content;
    $riqi;
}}
//释放结果集
$mysqli_stmt->free_result( );
$mysqli_stmt->close( ); 
$mysqli->close( );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
    <title>查找文章</title>
    <style>
        .body{
            background-color: #eef7fc;
        }
        .zans{
            width: 90%;
            margin: auto;
            box-shadow: 2px 3px 10px 5px #d6d6d6;
            border-radius: 10px;
            background-color: #fcfcfc;
        }
        .zans p{
            padding: 1vh;
            padding-left: 4vh;
        }
        .zans h2{
            text-align: center;
            padding-top:2vh;
        }
        .zans p span{
            color: green;
        }

        body{
            background-color: #f6feff;
        }
        .wzck{
            background-color: #fff;
            width: 90%;
            border-radius: 10px;
            box-shadow: 2px 3px 10px 5px #e6eded;
            padding-left: 20px;
            padding-right: 20px;
            margin-left: 5%;
        }
        .wzck span{
            color: green;
        }
        .w{
            margin-top: 3vh;
            margin: auto;
            width: 80%;
        }
        .w textarea{
            width: 90%;
            margin: auto;
            border: none;
            border: 2px solid #9ea9e5;
            border-radius: 20px;
        }
        #send{
            padding: 2vh;
            border-radius: 5px;
            border: none;
            background-color: #9ea9e5;
        }
        #send:hover{
            border: 1px solid #8ad0e9;
        }
        .prnr{
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding-left: 15px;
            padding-right: 15px;
        }
        .zans img{
            height: 100px;
        }
        @media (max-width:768px){
            .prnr{
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="zans">
        <h2>结果如下（如果没有任何内容表示没有这个文章【如有条请向下滑动】）</h2>
        <p>标题：<span><?php echo $title; ?></span></p>
        <p>文章内容：<span><?php echo $content; ?></span></p>
        <p>发布时间：<span><?php echo $riqi; ?></span></p>
        <p>作者：<span><?php echo $zuozhe; ?></span></p>
    </div>
    
<!-- <div class="w">
    <div class="controls">
      <textarea placeholder="说点什么吧..." id="area" cols="30" rows="5" maxlength="150" class="neir"></textarea>
      <div>
        <button id="send">发布</button>
      </div>
    </div>
</div> -->
<?php
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
$sql = "select * from comments";
$reslut = $con->query($sql);
if($reslut){
    $res = $reslut->fetch_all();
    foreach($res as $k=>$v){
        if ($v[3]==$_POST['czwz2']){
            $sql = "select * from comments";
            ?><div class="prnr"><?php
                echo '<br>'.'内容：'.$v[1].'<br>';
                echo '评论者：'.$v[5].'&nbsp; &nbsp; ';
                echo '时间：'.$v[4].'<br>'.'<br>';
            ?></div><?php
            echo '<br>';
        }}
    }
$con->close();
?>
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>