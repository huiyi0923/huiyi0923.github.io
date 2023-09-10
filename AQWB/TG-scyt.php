<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://huiyi0923.github.io/data/logo2.ico" type="images/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>文件上传</title>
    <style>
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
            padding: 60px;
            background-color: #fff;
            box-sizing: border-box;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        .container h3 {
            font-weight: 900;
            text-align: center;
            margin-bottom: 30px;
        }
        .form_wrap input[type=file] {
            padding: 10px;
            border: 1px solid #e6e6e6;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 20px;
            font-size: 16px;
            color: #333;
        }
        .form_wrap button {
            background-color: #59B2E0;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 18px;
            font-weight: 600;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form_wrap button:hover {
            background-color: #4DA8D1;
        }
        .neirxx {
            margin-top: 40px;
            text-align: center;
            color: #333;
        }
        .neirxx p {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $allowedImageTypes = ['image/jpeg', 'image/png'];
        $allowedMusicTypes = ['audio/mpeg', 'audio/wav'];

        // 检查是否有文件上传
        if (!empty($_FILES['file']['name'])) {
            $fileType = $_FILES['file']['type'];
            $fileSize = $_FILES['file']['size'];

            // 检查文件类型和大小
            if (in_array($fileType, $allowedImageTypes) && $fileSize <= 3 * 1024 * 1024) {
                // 图片符合要求
                $destination = './data/' . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $destination);
                echo "<div class='neirxx'><p>图片上传成功！<br>文件位于：http://weiqing.1ao.top/data/" . $_FILES['file']['name'] . "。请复制后浏览</p></div><br>";

                $filename = $_FILES['file']['name']; // 获取用户输入的文件名

                header('content-type: text/html ; charset=utf-8');
                $host = "localhost";
                $user = "yanxi2";
                $password = "09098734";
                $db = "tgk";
                $mysqli = new mysqli($host, $user, $password, $db); //实例化mysqli对象，连接mysql数据库
                if ($mysqli->connect_errno) {
                    die($mysqli->connect_error);
                }
                $mysqli->set_charset('utf8'); //设置字符集
                $sql = "insert into tgwz(title, zhuozid, scsj) values (?, ?, ?)";
                $mysqli_stmt = $mysqli->prepare($sql); //准备预处理语句
                $title = $filename;
                $zhuozid = $_GET['TGid'];
                $scsj = date('Y-m-d H:i:s');
                $mysqli_stmt->bind_param('sss', $title, $zhuozid, $scsj); //s代表string类型
                //执行预处理语句
                if ($mysqli_stmt->execute()) {
                    echo '文件生成成功！已经托管了' . $mysqli_stmt->insert_id . '个文件<br>'; //程序成功，返回插入数据表的行id
                    echo PHP_EOL;
                } else {
                    echo '执行失败，内部错误：' . $mysqli_stmt->error.'<br>'; //执行失败， 错误信息
                }
                mysqli_close($mysqli);

            } elseif (in_array($fileType, $allowedMusicTypes) && $fileSize <= 5 * 1024 * 1024) {
                // 音乐符合要求
                $destination = './data/' . $_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $destination);
                echo "<div class='neirxx'><p>音乐上传成功！<br>文件位于：http://weiqing.1ao.top/data/" . $_FILES['file']['name'] . "。请复制后浏览</p></div><br>";

                $filename = $_FILES['file']['name']; // 获取用户输入的文件名

                header('content-type: text/html ; charset=utf-8');
                $host = "localhost";
                $user = "yanxi2";
                $password = "09098734";
                $db = "tgk";
                $mysqli = new mysqli($host, $user, $password, $db); //实例化mysqli对象，连接mysql数据库
                if ($mysqli->connect_errno) {
                    die($mysqli->connect_error);
                }
                $mysqli->set_charset('utf8'); //设置字符集
                $sql = "insert into tgwz(title, zhuozid, scsj) values (?, ?, ?)";
                $mysqli_stmt = $mysqli->prepare($sql); //准备预处理语句
                $title = $filename;
                $zhuozid = $_GET['TGid'];
                $scsj = date('Y-m-d H:i:s');
                $mysqli_stmt->bind_param('sss', $title, $zhuozid, $scsj); //s代表string类型
                //执行预处理语句
                if ($mysqli_stmt->execute()) {
                    echo '文件生成成功！已经托管了' . $mysqli_stmt->insert_id . '个文件<br>'; //程序成功，返回插入数据表的行id
                    echo PHP_EOL;
                } else {
                    echo '执行失败，内部错误：' . $mysqli_stmt->error.'<br>'; //执行失败， 错误信息
                }
                mysqli_close($mysqli);
            } else {
                // 文件不符合要求
                echo "<div class='neirxx'><p>文件类型或大小不符合要求！(只支持图片，音乐，图片大小不大于3MB,音乐大小不大于5MB)</p></div><br>";
            }
        } else {
            // 没有选择文件
            echo "<div class='neirxx'><p>请选择要上传的文件！</p></div><br>";
        }
    }
    ?>
    <div class="container">
        <h3>添加文件</h3>
        <!-- 表单 -->
        <div class="form_wrap">
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="file" accept="image/*, audio/*">
                <button type="submit">确认上传</button>
            </form>
        </div>
    </div>
</body>
</html>
