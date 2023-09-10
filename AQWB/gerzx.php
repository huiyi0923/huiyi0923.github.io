
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

$sql = "SELECT username,jianjie,QQ,zhucsj FROM user WHERE uid = ? "; 
$mysqli_stmt = $mysqli->prepare( $sql);
$id = $_GET['id'];//找ID为10009 czpy2$_POST['czpy2']
$mysqli_stmt->bind_param('i', $id);
if ($mysqli_stmt->execute()){
//bind_ result() 绑定结果集中的值到变量
$mysqli_stmt->bind_result($username, $jianjie, $QQ,$zhucsj);
//遍历结果集
while ($mysqli_stmt->fetch()) {
    $username;
    $jianjie;
    $QQ;
    $zhucsj;
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
    <meta name="description" content="原名：微清网络，作为回忆改名为：那年夏天网络">
    <meta name="keywords" content="微清,网络,官网,夏天,网站,微清网络,HTML,html,微清网-（那年夏天网络）,博客,个人主页">
    <link rel="stylesheet" href="https://huiyi0923.github.io/newweb/gongtindex.css" type="text/css">
    <link rel="stylesheet" href="./MY.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/mdui/0.4.3/css/mdui.min.css">
    <title>阿清微博2.0--个人中心</title>
    <style>
        body{
            background-color: #f3f9ff;
        }
    </style>
</head>
<body>
    <div class="ycm1">
        <form action="./gerzxpd.php" method="get">
            <h3>添加简介</h3>
            <textarea name="nr" id="" cols="30" rows="5" placeholder="请输入简介" style="width: 90%;color:#000" class="nr"></textarea><br><br>
            <button id="toggle-auto-switch" class="mdui-btn mdui-btn-raised mdui-ripple sj" type="button">确定</button>
            <button id="toggle-auto-switch" class="mdui-btn mdui-btn-raised mdui-ripple gbjj" type="button">关闭</button>
            <p>&nbsp;</p>
        </form>
    </div>
    <div class="tobu">
        <img src="https://huiyi0923.github.io/data/壁纸.jpg" alt="" class="img1">
        <div class="kais">
            <span><img src="http://q2.qlogo.cn/headimg_dl?dst_uin=<?php echo $QQ; ?>&spec=5" alt="" class="img2"></span>
            <span><span class="i1"><?php echo $username; ?></span><span class="i2">QQ<?php echo $QQ; ?></span></span>
            <br>
            <p class="zan">👍<span class="zs2">0</span></p>
            <!-- <div class="laiz">
                <p>?岁 <i>|</i> ?月?日 ?座 <i>|</i> 现居? <i>|</i> 来自? <i>|</i> <span class="gs1" title="微清网络用户">公司?</span> <i>|</i> 学生 <i>|</i> <span class="gs2">邮箱?</span> <i>|</i></p>
            </div> -->
            <!-- <div class="dengji">
                <img src="https://huiyi0923.github.io/data/svip10.png" alt="">
                <img src="https://huiyi0923.github.io/data/dsvip.png" alt="">
                <img src="https://huiyi0923.github.io/data/sviphlw.png" alt="">
                <img src="https://huiyi0923.github.io/data/sviplz.png" alt="">
                <img src="https://huiyi0923.github.io/data/cjys.png" alt="">
                <img src="https://huiyi0923.github.io/data/lz10.png" alt="">
            </div> -->
            <div class="qinm"><?php echo '简介：'.$jianjie; ?> &nbsp; <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.067 6.067 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.118 8.118 0 0 1-3.078.132 3.659 3.659 0 0 1-.562-.135 1.382 1.382 0 0 1-.466-.247.714.714 0 0 1-.204-.288.622.622 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896.126.007.243.025.348.048.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04zM4.705 11.912a1.23 1.23 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.39 3.39 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3.122 3.122 0 0 0 .126-.75l-.793-.792zm1.44.026c.12-.04.277-.1.458-.183a5.068 5.068 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005a.031.031 0 0 1-.007.004zm3.582-3.043.002.001h-.002z"/>
              </svg><span style="color:bluegreen">点画笔添加</span></div>
            <hr class="fgx">
            <div class="biaoq">
                <span>敬请期待</span>
                <span>敬请期待</span>
                <span>敬请期待</span>
                <span>敬请期待</span>
                <span>敬请期待</span>
                <span>敬请期待</span>
            </div>
        </div>
        </div>
        <div class="tobu2">
            <div class="kais2">
                <div class="aqwb">
                    <br>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-webcam-fill" viewBox="0 0 16 16">
                        <path d="M6.644 11.094a.5.5 0 0 1 .356-.15h2a.5.5 0 0 1 .356.15c.175.177.39.347.603.496a7.166 7.166 0 0 0 .752.456l.01.006h.003A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.224-.947l.002-.001.01-.006a3.517 3.517 0 0 0 .214-.116 7.5 7.5 0 0 0 .539-.34c.214-.15.428-.319.603-.496ZM7 6.5a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z"/>
                        <path d="M2 3a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H2Zm6 1.5a2 2 0 1 1 0 4 2 2 0 0 1 0-4ZM12.5 7a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1Z"/>
                      </svg> &nbsp;&nbsp;&nbsp;阿清微博
                    <br>
                    <div class="fbgdwb">
                        <?php
                            $mysqli = new mysqli ($host, $user, $password, $db);
                            if ( $mysqli->connect_errno){
                                die($mysqli->connect_error);
                            }
                            $mysqli->set_charset('utf8');
                            $sql2 = "SELECT title,content,riqi FROM article WHERE zuozid = ? "; 
                            $mysqli_stmt2 = $mysqli->prepare( $sql2);
                            $id2 = $_GET['id'];//找ID为10009 $_GET['id']
                            $mysqli_stmt2->bind_param('i', $id2);
                            if ($mysqli_stmt2->execute()){
                            //bind_ result() 绑定结果集中的值到变量
                            $mysqli_stmt2->bind_result($title, $content, $riqi);
                            //遍历结果集
                            while ($mysqli_stmt2->fetch()) {
                                echo '<br>'.'标题：'.$title.'<br>';
                                echo '内容：'.$content.'<br>';
                                echo '发布时间：'.$riqi.'<br>'.'<br>';
                            }}
                        ?>
                    </div>
                    <p>去看看微博吧 <a href="./index2.php?id=" style="color: #4c81c2;" target="_blank">去看看</a></p>
                </div>
                <div class="sj" style="text-align: center;">
                    <?php echo "注册时间:".$zhucsj; ?>
                    <br>
                </div>
    </div>
    <br>
    <div class="banq" style="color: #000;padding: 5vh;margin-bottom: 2vh;background-color: #fff;">
        <h3 style="color: #000;">联系方式</h3>
        <span style="color: #4c81c2;">QQ </span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg><span style="color: #4ae029;"> 1148246926@qq.com</span><br>
        <span style="color: #4c81c2;">Microsoft </span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
        </svg><span style="color: #4ae029;"> ASD493122328@outlook.com</span><br>
        <span style="color: #4c81c2;">Git </span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
        </svg><span style="color: #4ae029;"> huiyi0923</span>
        <br><br>
        <h5>微清网络--你的热爱 <span style="color: #32b6da;">/</span> 微清网络--发现你的热爱 <span style="color: #32b6da;">/</span> 微清网络-发现另一个自己 <span style="color: #32b6da;">/</span> 微清网-（那年夏天网络）</h5>
        <br><br>
        <p style="color: #000;">2023 © 微清网络 <a style="color: #4c81c2;" href="https://huiyi0923.github.io/jszc.html" target="_blank">--微清技术支持部</a></p>
      </div>
      <!-- <script src="./MY.js"></script> -->
      <script>
        document.querySelector('.qinm svg').addEventListener('click',()=>{
            document.querySelector('.ycm1').style.display='block'
        })
        document.querySelector('.gbjj').addEventListener('click',()=>{
            document.querySelector('.ycm1').style.display='none'
        })
        document.querySelector('.sj').addEventListener('click',()=>{
            let urlParams = new URLSearchParams(window.location.search);
            let id = urlParams.get('id');
            location.href=`./gerzxpd.php?id=${id}&nr=${(document.querySelector('.nr').value)}`
        })
      </script>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>
</body>
</html>