<link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
<title>更改文章内容</title>
<style>
        .srid{
            color: #000;
            width: 60%;
            margin: auto;
            background-color: #fefefe;
            box-shadow: 2px 3px 10px 1000px #a4a4a49c;
            text-align: center;
            padding: 10px;
            border-radius: 10px;
            position: fixed;
            top: 10%;
            left: 20%;
            overflow: hidden;
        }
        @media (max-width:768px){
            .srid{
                width: 90%;
                margin: auto;
            }
        }
        a{
            color: #000;
        }
        .srid textarea{
            width: 80%;
            margin: auto;
        }
        .sy{
            color: #20c526;
        }
        @keyframes sanyao{
    30% {
        color: #20c526;
    }
    50% {
        color: #1e93b1;
    }
    80% {
        color: #8e62da;
    }
    100% {
        color: #da3b3b;
    }
    80% {
        color: #8e62da;
    }
    50% {
        color: #1e93b1;
    }

}
    </style>
<?php
header( 'content-type:text/html ;charset-utf-8');
$host = "localhost";
$user = "yanxi";
$id=$_GET['id'];
$zuozid=$_GET['zuozid'];
$wid=$_GET['wid'];
$nr2=$_GET['ner1'];
$bit2=$_GET['bit1'];
if ($id!=$zuozid){
    echo '这不是你的文章你无法操作';
}else{
    ?>
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/mdui/0.4.3/css/mdui.min.css">
    <div class="srid">
    <form method="post">
        <h2>输入更改内容</h2>
        <textarea class="title" id="VALUE1" cols="30" rows="2" placeholder="输入更改的标题"></textarea><br>
        <textarea class="neir" id="VALUE2" cols="30" rows="10" placeholder="输入更改的内容"></textarea><br>
        <h4> &nbsp; &nbsp; 选择字体样式</h4>
             <input type="radio" name="xz" value="1" id="mor" checked> 默认 
             <input type="radio" name="xz" value="2" id="jbz"><span style="color:#a062d6"> 炫酷紫 </span>
             <input type="radio" name="xz" value="3" id="syz"><span style="animation:sanyao 3s infinite" class="sy"> 闪耀字体 </span>
             <br><br>
        <button id="toggle-auto-switch" class="mdui-btn mdui-btn-raised mdui-ripple genggai" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16"><path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/></svg>确认</button></a>
        <a href="./index2.php?id="><button id="toggle-auto-switch" class="mdui-btn mdui-btn-raised mdui-ripple gbgrzx" type="button">关闭</button></a>
        </form>
    </div>
    <script>
        document.querySelector('.genggai').addEventListener('click',()=>{
            let ztys=null
            if (jbz.checked) {
                ztys=2
            } else if (syz.checked) {
                ztys=3
            } else {
                ztys=1
            }
            location.href=`./bianjpd.php?wid=<?php echo $wid; ?>&title=${document.querySelector('.title').value}&neir=${document.querySelector('.neir').value}&ztys=${ztys}`
        })
        document.querySelector('#VALUE1').value='<?php echo $bit2; ?>'
        document.querySelector('#VALUE2').value='<?php echo $nr2; ?>'
    </script>
    <?php
}
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>