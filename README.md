# 小美我恨你
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>微清</title>
        <style>
            .box{
                width: 600px;
                height: 1200px;
                margin: auto;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="box">
            <button id="button">首页(点我有惊喜)</button>
<script>
window.AudioContext = window.AudioContext || window.webkitAudioContext;
(function () {
    if (!window.AudioContext) {
        alert('当前浏览器不支持Web Audio API');
        return;
    }
    var eleButton = document.getElementById('button');
    var audioCtx = new AudioContext();
    var arrFrequency = "880 987 1046 987 1046 1318 987 659 659 880 784 880 1046 784 659 659 698 659 698 1046 659 1046 1046 1046 987 698 698 987 987 880 987 1046 987 1046 1318 987 659 659 880 784 880 1046 784 659 698 1046 987 1046 1174 1174 1174 1046 1046 880 987 784 880 1046 1174 1318 1174 1318 1567 1046 987 1046 1318 1318 1174 784 784 880 1046 987 1174 1046 784 784 1396 1318 1174 659 1318 1046 1318 1760 1567 1567 1318 1174 1046 1046 1174 1046 1174 1567 1318 1318 1760 1567 1318 1174 1046 1046 1174 1046 1174 987 880 880 987 880".split(" ");
    var start = 0, direction = 1;
    eleButton.addEventListener('mouseenter', function () {
        var frequency = arrFrequency[start];
        if (!frequency) {
            direction = -1 * direction;
            start = start + 2 * direction;
            frequency = arrFrequency[start];
        }
        start = start + direction;
        var oscillator = audioCtx.createOscillator();
        var gainNode = audioCtx.createGain();
        oscillator.connect(gainNode);
        gainNode.connect(audioCtx.destination);
        oscillator.type = 'sine';
        oscillator.frequency.value = frequency;
        gainNode.gain.setValueAtTime(0, audioCtx.currentTime);
        gainNode.gain.linearRampToValueAtTime(1, audioCtx.currentTime + 0.01);
        oscillator.start(audioCtx.currentTime);
        gainNode.gain.exponentialRampToValueAtTime(0.001, audioCtx.currentTime + 1);
        oscillator.stop(audioCtx.currentTime + 1);
    });
})();
</script>
            <br>
            <script>
                var name = prompt("要怎么称呼您呢？");
                alert("您好："+name);
            </script>
            <br>
            <h4>您好：访问者！</h4>
            <td class="BS0111">
                <form method="GET" action="search.asp?action=search" target="_blank">
                &nbsp;<img border="0" src="pic/fle.gif">&nbsp;搜索范围：<select size="1" name="s_type">
                    <option value="">所有贴子</option>
                    <option value="topic" selected>贴子标题</option>
                    <option value="content">贴子正文</option>
                </select>&nbsp;搜索方式：<select size="1" name="judge_type">
                    <option selected value="1">精确</option>
                    <option value="0">模糊</option>
                </select>&nbsp;关键词<font color="#808080">(可用空格分开)</font>：<input type="text" name="key" value="请输入关键词" style="width:150px;" onFocus="if(this.value=='请输入关键词'){this.value='';}" onBlur="if(this.value==''){this.value='请输入关键词';}">&nbsp;<input type="submit" value="搜索" name="B1" style="border:0;background-color:transparent;background:url(/mis/images/obtn_60.gif);width:60px;height:21px;cursor:pointer;" onmouseout = "javascript:this.style.backgroundPosition = '0 0';" onMouseOver="javascript:this.style.backgroundPosition = '0 -21px';"><input type="hidden" name="action" size="20" value="search">&nbsp;
                <input type="button" value="返回" name="B1" style="border:0;background-color:transparent;background:url(/mis/images/obtn_60.gif);width:60px;height:21px;cursor:pointer;" onmouseout = "javascript:this.style.backgroundPosition = '0 0';" onMouseOver="javascript:this.style.backgroundPosition = '0 -21px';" onclick="javascript:history.go(-1);">
                </form>
            </td> 
            <h1 style="color: rgb(121, 219, 220);">微清让世界遇见你！</h1>
            <h2 style="color: rgb(118, 46, 169);">点击任意处有惊喜(不稳定)</h2>
            <img src="https://user-images.githubusercontent.com/126973386/223406272-48697b8c-7454-4e20-b5c5-000ddbdee458.png" alt="图片失效" width="200px">
            <embed src="./那一瞬间.m4a" width="500" height="300" autostart=false>
            <body background="./bg.jpg">
            <iframe scrolling="no" src="https://tianqiapi.com/api.php?style=tw&skin=pitaya" frameborder="1" width="400" height="500" allowtransparency="true"></iframe>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/Justlovesmile/CDN/js/sakura.js"></script>
            <br>
            <script>
                alert('由于考级原因，网站暂时停止维护\n2023.3.20恢复更新\n--3.12');
            </script>
            <script type="text/javascript">
                onload = function() {
                    var click_cnt = 0;
                    var $html = document.getElementsByTagName("html")[0];
                    var $body = document.getElementsByTagName("body")[0];
                    $html.onclick = function(e) {
                        var $elem = document.createElement("b");
                        $elem.style.color = "#E94F06";
                        $elem.style.zIndex = 9999;
                        $elem.style.position = "absolute";
                        $elem.style.select = "none";
                        var x = e.pageX;
                        var y = e.pageY;
                        $elem.style.left = (x - 10) + "px";
                        $elem.style.top = (y - 20) + "px";
                        clearInterval(anim);
                        switch (++click_cnt) {
                            case 10:
                                $elem.innerText = "OωO";
                                break;
                            case 20:
                                $elem.innerText = "(๑•́ ∀ •̀๑)";
                                break;
                            case 30:
                                $elem.innerText = "(๑•́ ₃ •̀๑)";
                                break;
                            case 40:
                                $elem.innerText = "(๑•̀_•́๑)";
                                break;
                            case 50:
                                $elem.innerText = "（￣へ￣）";
                                break;
                            case 60:
                                $elem.innerText = "(╯°口°)╯(┴—┴";
                                break;
                            case 70:
                                $elem.innerText = "૮( ᵒ̌皿ᵒ̌ )ა";
                                break;
                            case 80:
                                $elem.innerText = "╮(｡>口<｡)╭";
                                break;
                            case 90:
                                $elem.innerText = "( ง ᵒ̌皿ᵒ̌)ง⁼³₌₃";
                                break;
                            case 100:
                            case 101:
                            case 102:
                            case 103:
                            case 104:
                            case 105:
                                $elem.innerText = "(ꐦ°᷄д°᷅)";
                                break;
                            default:
                                $elem.innerText = "";
                                break;
                        }
                        $elem.style.fontSize = Math.random() * 10 + 8 + "px";
                        var increase = 0;
                        var anim;
                        setTimeout(function() {
                            anim = setInterval(function() {
                                if (++increase == 150) {
                                    clearInterval(anim);
                                    $body.removeChild($elem);
                                }
                                $elem.style.top = y - 20 - increase + "px";
                                $elem.style.opacity = (150 - increase) / 120;
                            }, 8);
                        }, 70);
                        $body.appendChild($elem);
                    };
                };
                </script>
                <br>        
            <span id="webtime"></span>
<script type="text/javascript">function show_runtime() {
        window.setTimeout("show_runtime()", 1000);
        X = new Date("3/6/2023 23:59:59");
        Y = new Date();
        T = (Y.getTime() - X.getTime());
        M = 24 * 60 * 60 * 1000;
        a = T / M;
        A = Math.floor(a);
        b = (a - A) * 24;
        B = Math.floor(b);
        c = (b - B) * 60;
        C = Math.floor((b - B) * 60);
        D = Math.floor((c - C) * 60);
        document.getElementById("webtime").innerHTML = "网站已安全运行: " + A + "天" + B + "小时" + C + "分" + D + "秒"
    }
    show_runtime();
</script>
            <br />
            <div class="foot">
                Github © 2023 版权所有
                <br>
                <h5>站长QQ：1148246926；站长是ikun，联系站长请先发kun图！</h5>
                <h5>微清：提供技术服务支持</h5>
                <h5>大胆的说一声：微清YYDS！</h5>
            <br>
            <a href="https://www.baidu.com" target="_blank">点我：搜💌索</a>
        </div>
    </body>
</html>
<!--上次那个爱盗代码的，要是再被我看到，我直接把你吊起来打！-->
