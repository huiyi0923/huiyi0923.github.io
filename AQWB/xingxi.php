<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
    <link rel="stylesheet" href="https://huiyi0923.github.io/newweb/gongtindex.css" type="text/css">
    <link rel="stylesheet" href="./index2.css" type="text/css">
    <title>阿清微博2.0--消息</title>
    <style>
        body{
            background-color: #EDF0F5;
        }
        .xiaoxi{
            width: 90%;
            margin: auto;
            border-radius: 5px;
            background-color: #fff;
            color: #000;
            margin-top: 5vh;
            margin-bottom: 5vh;
        }
        .xiaoxi:hover{
            box-shadow: 2px 3px 10px 5px #dcdcdc75;
        }
        .xiaoxi .x1{
            font-size: x-large;
            padding: 3vh;
        }
        .xtxiaoxi{
            position: fixed;
            top: 5%;
            left: 10%;
            width: 80%;
            height: 80%;
            background-color: #fff;
            box-shadow: 2px 3px 10px 1000px #a4a4a49c;
            overflow: auto;
            border-radius: 5px;
            display: none;
            background-color: #f6fbff;
        }
        .gbxtxx{
            position: absolute;
            top: 5px;
            right: 5px;
            color: rgb(255, 255, 255);
            font-size: large;
            background-color: darkorchid;
            border-radius: 5px;
            padding: 5px;
        }
        .xtxiaoxi h3{
            text-align: center;
            margin-top: 3px;
            margin-bottom: 5px;
            /* border-bottom: 1px solid #e0ebff; */
        }
        .xxneir{
            background-color: #ffffff;
            border-radius: 20px;
            width: 90%;
            margin: auto;
            color: #000;
            padding: 8px;
        }
        @media (min-width: 768px) {
            .xiaoxi{
                width: 75%;
            }
        }
    </style>
</head>
<body>
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
    ?>
    <div class="tobu">
        <div class="logo"><img src="https://huiyi0923.github.io/data/logo.png" alt=""><p><img src="https://huiyi0923.github.io/data/slogo.png" alt=""></p></div>
        <div class="xcj2">
            <span>未登录</span>
            <div class="ycd"><p><i class="ncm"></i><br><a href="./modify.html" class="xgxx">修改信息</a></p><span>X</span><p class="zux">退出登陆</p></div>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
            </svg>
        </div>
        <div class="caidan"><ul>
            <li><a href="https://huiyi0923.github.io/newweb/qajar.html">AQ机器</a></li>
            <li><a href="./login.html">登录</a></li>
            <li><a href="./registered.html">注册</a></li>
            <li><a href="#">首页</a></li>
            <li><button class="wq">    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-low" viewBox="0 0 16 16">
                <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm.5-9.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 11a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm5-5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm-11 0a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9.743-4.036a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm-7.779 7.779a.5.5 0 1 1-.707-.707.5.5 0 0 1 .707.707zm7.072 0a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707zM3.757 4.464a.5.5 0 1 1 .707-.707.5.5 0 0 1-.707.707z"/>
              </svg>黑夜</button></li>
        </ul></div>
        <div class="caidan2"><button>≡</button></div>
        <div class="yccd"><p>阿清微博2.0</p><span>X</span><div class="zstp"><img src="https://www.loliapi.com/acg/" alt="" class="bjtp"></div><ul>
            <li><a href="./login.html"> 登 录 </a></li>
            <li><a href="./registered.html"> 注 册 </a></li>
            <li><a href="https://huiyi0923.github.io/newweb/micro_weiqing.html"> 首 页 </a></li>
            <li><a href="https://huiyi0923.github.io/newweb/qajar.html"> A Q 机 器 </a></li>
            <li><button class="bjbh">黑夜</button></li>
        </ul></div>
    </div>
    <div class="xcj">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
        </svg>
    </div>
    <div class="zanntz">
        <p style="font-size: x-large;">站内通知</p>
        <p class="TZ"></p>
        <svg class="gbtz" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-backspace-reverse-fill" viewBox="0 0 16 16">
            <path d="M0 3a2 2 0 0 1 2-2h7.08a2 2 0 0 1 1.519.698l4.843 5.651a1 1 0 0 1 0 1.302L10.6 14.3a2 2 0 0 1-1.52.7H2a2 2 0 0 1-2-2V3zm9.854 2.854a.5.5 0 0 0-.708-.708L7 7.293 4.854 5.146a.5.5 0 1 0-.708.708L6.293 8l-2.147 2.146a.5.5 0 0 0 .708.708L7 8.707l2.146 2.147a.5.5 0 0 0 .708-.708L7.707 8l2.147-2.146z"/>
        </svg>
        <i style="color: #6753e6;"> &nbsp; ——阿清微博</i>
    </div>
    <div class="xuanf"><svg xmlns="http://www.w3.org/2000/svg" width="20vh" height="15vh" fill="currentColor" class="bi bi-cloud-moon-fill" viewBox="0 0 16 16" style="display: none;">        <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"></path>        <path d="M11.286 1.778a.5.5 0 0 0-.565-.755 4.595 4.595 0 0 0-3.18 5.003 5.46 5.46 0 0 1 1.055.209A3.603 3.603 0 0 1 9.83 2.617a4.593 4.593 0 0 0 4.31 5.744 3.576 3.576 0 0 1-2.241.634c.162.317.295.652.394 1a4.59 4.59 0 0 0 3.624-2.04.5.5 0 0 0-.565-.755 3.593 3.593 0 0 1-4.065-5.422z"></path>      </svg>    </div>
    <div class="xuanf2"><svg xmlns="http://www.w3.org/2000/svg" width="20vh" height="15vh" fill="currentColor" class="bi bi-cloud-sun-fill" viewBox="0 0 16 16" style="display: block;">      <path d="M11.473 11a4.5 4.5 0 0 0-8.72-.99A3 3 0 0 0 3 16h8.5a2.5 2.5 0 0 0 0-5h-.027z"></path>      <path d="M10.5 1.5a.5.5 0 0 0-1 0v1a.5.5 0 0 0 1 0v-1zm3.743 1.964a.5.5 0 1 0-.707-.707l-.708.707a.5.5 0 0 0 .708.708l.707-.708zm-7.779-.707a.5.5 0 0 0-.707.707l.707.708a.5.5 0 1 0 .708-.708l-.708-.707zm1.734 3.374a2 2 0 1 1 3.296 2.198c.199.281.372.582.516.898a3 3 0 1 0-4.84-3.225c.352.011.696.055 1.028.129zm4.484 4.074c.6.215 1.125.59 1.522 1.072a.5.5 0 0 0 .039-.742l-.707-.707a.5.5 0 0 0-.854.377zM14.5 6.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1h-1z"></path>    </svg>  </div>
    <!-- 分割 -->

    <div class="xiaoxi">
        <p class="x1"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
  <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z"/>
  <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z"/>
</svg>系统消息</p>
    </div>
    <div class="xtxiaoxi">
        <h3><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-robot" viewBox="0 0 16 16">
  <path d="M6 12.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5ZM3 8.062C3 6.76 4.235 5.765 5.53 5.886a26.58 26.58 0 0 0 4.94 0C11.765 5.765 13 6.76 13 8.062v1.157a.933.933 0 0 1-.765.935c-.845.147-2.34.346-4.235.346-1.895 0-3.39-.2-4.235-.346A.933.933 0 0 1 3 9.219V8.062Zm4.542-.827a.25.25 0 0 0-.217.068l-.92.9a24.767 24.767 0 0 1-1.871-.183.25.25 0 0 0-.068.495c.55.076 1.232.149 2.02.193a.25.25 0 0 0 .189-.071l.754-.736.847 1.71a.25.25 0 0 0 .404.062l.932-.97a25.286 25.286 0 0 0 1.922-.188.25.25 0 0 0-.068-.495c-.538.074-1.207.145-1.98.189a.25.25 0 0 0-.166.076l-.754.785-.842-1.7a.25.25 0 0 0-.182-.135Z"/>
  <path d="M8.5 1.866a1 1 0 1 0-1 0V3h-2A4.5 4.5 0 0 0 1 7.5V8a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1v1a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-1a1 1 0 0 0 1-1V9a1 1 0 0 0-1-1v-.5A4.5 4.5 0 0 0 10.5 3h-2V1.866ZM14 7.5V13a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V7.5A3.5 3.5 0 0 1 5.5 4h5A3.5 3.5 0 0 1 14 7.5Z"/>
</svg>系统消息（可向下滑动）</h3>
        <span class="gbxtxx">关闭</span>
        <?php
            //查询
            $sql = "select * from comments";
            $reslut = $con->query($sql);
            if($reslut){
                $res = $reslut->fetch_all();
                foreach($res as $k=>$v){
                    if ($v[6]== $_GET['id']){
                        $sql = "select * from comments";
                        ?><div class="xxneir"><?php
                            echo '有人评论了你！<br>';
                            echo '评论的文章ID：'.$v[3].'<br>';
                            echo '评论者：'.$v[5].'&nbsp; &nbsp; ';
                            echo '时间：'.$v[4].'<br>';
                        ?></div><?php
                        echo '<br>';
                    }}
                }
            $con->close();
        ?>
    </div>
    <!-- 分割 -->

    <div class="daoh">
        <a href="./index2.php?id="><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
            <path d="M4 2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1ZM4 5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM7.5 5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1ZM4.5 8a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm2.5.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1Zm3.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
            <path fill-rule="evenodd" d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V1Zm11 0v14h-3v-2.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5V15H3V1h10Z"/>
          </svg></a>
        <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></a>
        <a href=""><svg class="gerzx" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
          </svg></a>
    </div>
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
      <div class="hyanygl">
        <ul>
            <li><i class="glyphicon glyphicon-ice-lolly"></i></li>
        </ul>
    </div>
    <script src="./gongt.js"></script>
    <script>
        // let jz=0
        document.querySelector('.xiaoxi').addEventListener('click',()=>{
            document.querySelector('.xtxiaoxi').style.display='block'
        })
        document.querySelector('.gbxtxx').addEventListener('click',()=>{
            document.querySelector('.xtxiaoxi').style.display='none'
        })
        document.querySelector('.gerzx').addEventListener('click',(e)=>{
            e.preventDefault()
            // document.querySelector('.srid').style.display='block'
            let urlParams = new URLSearchParams(window.location.search);
            let id = urlParams.get('id');
            location.href=`./gerzx.php?id=${id}`
        })
        let urlParams = new URLSearchParams(window.location.search);
        let id2 = urlParams.get('id');
        let token2=localStorage.getItem('token')
        let username2=localStorage.getItem('username')
        if (id2!=username && id2.length>0){
            alert('这不是你的账号')
            location.href=`./index2.php?id=${username}`
        }
        if(token2.length>=24 && id2.length<=0){
            location.href=`./xingxi.php?id=${username2}`
            jz=1
        }else if(token2.length<=0 || username2.length<=0){
            alert('你没有登录')
            location.href=`./index2.php`
            console.log(id2)
        }
        document.querySelector('.gerzx').addEventListener('click',(e)=>{
            e.preventDefault()
            // document.querySelector('.srid').style.display='block'
            let urlParams = new URLSearchParams(window.location.search);
            let id = urlParams.get('id');
            location.href=`./gerzx.php?id=${id}`
        })
    </script>
    <script src="./gongt.js"></script>
  </body>
</html>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>