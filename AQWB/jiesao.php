
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
    <title>查看全文</title>
    <style>
        body{
            background-color: #f6feff;
        }
        .wzck{
            background-color: #fff;
            width: 85%;
            border-radius: 10px;
            box-shadow: 2px 3px 10px 5px #e6eded;
            padding-left: 20px;
            padding-right: 20px;
            margin: auto;
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
            border-radius: 5px;
        }
        #send{
            padding: 2vh;
            border-radius: 5px;
            border: none;
            background-color: #9ea9e5;
            color: #fff;
        }
        #send:hover{
            background-color: #8ad0e9;
        }
        .prnr{
            width: 80%;
            margin: auto;
            background-color: #fff;
            padding-left: 15px;
            padding-right: 15px;
        }
        @media (max-width:768px){
            .prnr{
                width: 90%;
            }
        }
        .fgx1{
            border-bottom: 1px solid #e1e1e1;
            width: 70%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="wzck">
        <h2 style="text-align: center;">文章全部内容</h2>
        <p class="w1"></p>
        <p class="w2"></p>
        <p class="w3"></p>
        <p class="w4"></p>
        <br><br>
  </div>
 <br>

<div class="w">
    <div class="controls">
      <textarea placeholder="说点什么吧...没有登录无法发送。不要有表情包" id="area" cols="30" rows="5" maxlength="150" class="neir"></textarea>
    <div>
    <button id="send">发布</button>
</div>
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
?><div class="prnr"><?php
if($reslut){
    $res = $reslut->fetch_all();
    foreach($res as $k=>$v){
        if ($v[3]==$_GET['wid']){
            $sql = "select * from comments";
                echo '<span style="color:red">' . $v[5] . '</span>：' . $v[1].'<br>';
                // echo '<br>'.'内容：'.$v[1].'<br>';
                // echo '评论者：'.$v[5].'&nbsp; &nbsp; ';
                echo 'TIME：'.$v[4].'<br>';
            echo '<br>';
            echo '<div class="fgx1"></div>';
            echo '<br>';
        }}
    }
?></div><?php
$con->close();
?>

    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let title = urlParams.get('bt');
        let content = urlParams.get('nr');
        let author = urlParams.get('zz');
        let time = urlParams.get('sj');
        let id = urlParams.get('id');
        let zuozid=urlParams.get('zuozid');
        let wid=urlParams.get('wid');
        document.querySelector('.w1').innerHTML=`文章标题：<span>${title}</span>`
        document.querySelector('.w2').innerHTML=`文章内容：<span>${content}</span>`
        document.querySelector('.w3').innerHTML=`文章作者：<span>${author}</span>`
        document.querySelector('.w4').innerHTML=`发布时间：<span>${time}</span>`
        console.log(id,author)
        let token=localStorage.getItem('token')
        let username=localStorage.getItem('username')
        document.querySelector('#send').addEventListener('click',()=>{
            if (token.length<0 || username.length<0){
                alert('我学聪明了!你没有登录')
            }else{
                location.href=`fbpl.php?id=${id}&bprid=${zuozid}&neir=${document.querySelector('.neir').value}&wid=${wid}&zuozid=${zuozid}`
        }})
    </script>
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>