<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
    <meta name="description" content="原名：微清网络，作为回忆改名为：那年夏天网络">
    <meta name="keywords" content="微清,网络,官网,夏天,网站,微清网络,HTML,html,微清网-（那年夏天网络）,微博,阿清微博,AQWB">
    <link rel="stylesheet" href="./mianban.css" type="text/css">
    <link rel="stylesheet" href="https://huiyi0923.github.io/newweb/gongtindex.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/mdui/0.4.3/css/mdui.min.css">
    <title>操作面板</title>
    <style>
        body {
            background-color: #f7f9ff;
        }
    </style>
</head>
<body>
    <div class="tisl">
        <h3>提示</h3>
        <div class="neirxx">
            <p>加载失败！请重试</p>
        </div>
        <br><br>
        <button id="toggle-auto-switch" class="mdui-btn mdui-btn-raised mdui-ripple gbts" type="button">关闭</button>
    </div>
</div>
    <div class="tobunr">
        <img src="http://q2.qlogo.cn/headimg_dl?dst_uin=1148246926&spec=5" alt="">
        <span class="nc"></span><i class="gonggai">公告</i>
    </div>
    <br><br><br><br>
    <div class="tuogk">
        <span class="ku">TG托管库：</span>
        <button class='tianjia'><a href="./TG-tjwj.php?TGid=<?php echo $_GET['TGid'] ?>">添 加</a></button>
        <br><br>
        <div class="fgx1"></div>
        <br>
        <?php
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
        $sql = "select * from tgwz";
        $reslut = $con->query($sql);
        if($reslut){
            $res = $reslut->fetch_all();
            foreach($res as $k=>$v){
                if ($v[2]== $_GET['TGid']){
                    $sql = "select * from tgwz";
                    ?><div class="nr1"><?php
                        $file = $v[1]; // 文件路径
                        // 获取文件扩展名
                        $ext = pathinfo($file, PATHINFO_EXTENSION);
                        // 判断文件类型
                        if (in_array($ext, array('jpg', 'jpeg', 'png', 'gif'))) {
                            echo '<div class="tuogk2">'.$v[1] .'<span>'.$v[3].'</span>';
                            ?><button class="sanc"><a href="./TG-sanc.php?TGwj=<?php echo $v[0] ?>&title=<?php echo $v[1] ?>">删除</a></button>
                                </div></div><?php
                                echo '<br>';
                        } elseif (in_array($ext, array('mp3', 'wav', 'ogg'))) {
                            echo '<div class="tuogk2">'.$v[1] .'<span>'.$v[3].'</span>';
                            ?><button class="sanc"><a href="./TG-sanc.php?TGwj=<?php echo $v[0] ?>&title=<?php echo $v[1] ?>">删除</a></button>
                                </div></div><?php
                                echo '<br>';
                        } else {
                            echo '<div class="tuogk2">'.$v[1] .'<span>'.$v[3].'</span>';
                            ?><button class="bj"><a href="./TG-bianj.php?TGwj=<?php echo $v[0] ?>&title=<?php echo $v[1] ?>">编辑</a></button><button class="sanc"><a href="./TG-sanc.php?TGwj=<?php echo $v[0] ?>&title=<?php echo $v[1] ?>">删除</a></button>
                            </div></div><?php
                            echo '<br>';
                        }
                        }
                    // echo '<br>';
                }}
        $con->close();
        ?>
    </div></div>
    <br><br><br>
    <p class="jzwz"></p>
    <script>
        if (toString(document.documentURI)=='http://weiqing.1ao.top/mianban.php' || toString(document.documentURI)=='http://localhost/PHP/mianban.php'){
            location.href=`./TG-login.html`
        }
        let urlParams = new URLSearchParams(window.location.search);
        let id = urlParams.get('TGid');
        if (id!=localStorage.getItem('TGid')){
            alert('你没有登录或不是你的账号')
            location.href=`./TG-login.html`
        }
        document.querySelector('.nc').innerHTML=`欢迎：${id}`
        
        document.querySelector('.gbts').addEventListener('click',()=>{
            document.querySelector('.tisl').style.display='none'
        })
        document.querySelector('.tobunr .gonggai').addEventListener('click',()=>{
            document.querySelector('.neirxx p').innerHTML=" 用 户 协 议 & 本 站 公 告<br><br>尊敬的用户您好！<br>1、本站是一个静态网页托管库，也就是可以<b>HTML，CSS，JS，TXT，PHP，图片(IMG)，音乐(MUSIC) 文件</b><br>2、本站只是一个简单的托管库，并不能像别的托管库一样可以使用GIT技术，如果你需要可以考虑换站<br>3、<b>禁止搭建“涩涩”“暴力”“血腥”等网站</b>，本站只给需要的人使用。<br>4、你每次进入都要查看本站网址后是否有“?”如果没有请再次登录。<br>5、如果你要访问你的网址请复制：<b>http://weiqing.1ao.top/data/(这里写文件名)</b>。列：http://weiqing.1ao.top/data/XXX.html"
            document.querySelector('.tisl').style.display='block'
            document.querySelector('.tisl').style.height='80%'
        })
        // document.querySelector('.bj').addEventListener('click',(e)=>{
        //     e.preventDefault()
        //     alert('请稍后作者在加班')
        // })
        document.querySelector('.jzwz').innerHTML=`本站网址：weiqing.1ao.top/mianban.php?TGid=${id}。把他复制下来，下次就不用那么麻烦了`
    </script>
        <div class="banq" style="color: #000;padding: 5vh;margin-bottom: 2vh;background-color: #fff;margin-top: 20vh;">
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
        <br>
        <p class="webtime">第一版发布时间：2023/9/2 20:00</p>
        <p class="webtime2"></p>
        <br>
        <p style="color: #000;">2023 © 微清网络 <a style="color: #4c81c2;" href="https://huiyi0923.github.io/jszc.html" target="_blank">--微清技术支持部</a></p>
      </div>
    <p class="bqxx">All rights reserved 微清网络</p>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>
</body>
</html>