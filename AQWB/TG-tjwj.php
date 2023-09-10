<!-- <form action="1.php" method="POST">
    <input type="text" name="filename" placeholder="请输入文件名">
    <input type="submit" value="生成文件">
  </form>
 -->

  <!DOCTYPE html>
  <html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
    <meta name="description" content="原名：微清网络，作为回忆改名为：那年夏天网络">
    <meta name="keywords" content="微清,网络,官网,夏天,网站,微清网络,HTML,html,微清网-（那年夏天网络）,微博,阿清微博,AQWB">
    <title>添加文件</title>
    <!-- 引入bootstrap.css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <!-- 公共 -->
    <style>
      html,
      body {
        background-color: #EDF0F5;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
      }
  
      .container {
        width: 520px;
        padding-top: 10vh;
        background-color: #fff;
        padding: 60px;
        box-sizing: border-box;
      }
  
      .container h3 {
        font-weight: 900;
      }
    </style>
    <!-- 表单容器和内容 -->
    <style>
      .form_wrap {
        color: #8B929D !important;
      }
  
      .form-text {
        color: #8B929D !important;
      }
    </style>
  </head>
  
  <body>
    <script>
      // 使用 JavaScript 获取本地数据并设置到 input 元素的 value 属性中
      window.onload = function() {
          var TGid = localStorage.getItem('TGid');
          document.getElementById('TGidInput').value = TGid;
      };
    </script>
    <div class="container">
      <h3>添加文件</h3>
      <!-- 表单 -->
      <div class="form_wrap">
        <form action="./TG-tjwjpd.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">输入文件名</label>
            <input type="text" class="form-control wjm" name="filename" placeholder="请带后缀,列:XXX.html,xxx.css">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">输入内容</label>
            <textarea name="value" id="nn" cols="30" rows="10" class="form-control" placeholder="窗口太小可以上下拉动"></textarea>
          </div>
          <input type="hidden" name="TGid" id="TGidInput">
          <button type="submit" class="btn btn-primary btn-login"> 生成文件 </button>
          <button type="button" class="btn btn-primary btn-login xskj"> 显示框架 </button>
        </form>
      </div>
      <p class="scwj1">需要上传“图片或音乐”？<a href='./TG-scyt.php?TGid=<script>localStorage.getItem("TGid")</script>'>点我上传</a></p>
    </div>
  </body>
  <script>
    document.querySelector('.xskj').addEventListener('click',()=>{
        document.querySelector('#nn').value='<meta charset="UTF-8"><!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>标题</title><style>/* css内容 */</style></head><body><!-- HTML内容 --></body></html>'
    })
    if (localStorage.getItem('TGid')==null){
      location.href=`./TG-login.html`
    }
    document.querySelector('#nn').value='<meta charset="UTF-8"><!--勿删(TXT文件可以删)-->'
    // document.querySelector('.scwj1 a').addEventListener('click',(e)=>{
    //   e.preventDefault()
    //   // let sj =localStorage.getItem("TGid")
    //   location.href=`./TG-scyt.php?TGid=<?php echo $_GET['TDid'] ?>`
    // })
    document.querySelector('.scwj1 a').addEventListener('click', (e) => {
      e.preventDefault()
      const TGid = localStorage.getItem('TGid');
      // 构建新的链接 URL
      const newUrl = `./TG-scyt.php?TGid=${TGid}`;
      // 跳转到新的链接 URL
      location.href = newUrl;
    });
  </script>
  </html>

  