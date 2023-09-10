<?php
$filename = $_POST['filename']; // 获取用户输入的文件名
$fileContent = $_POST['value']; // 文件内容
if (strlen($filename)<=2){
    echo'后端判断：文件名最少2字符';
    ?><script>alert('后端判断：文件名最少2字符')</script><?php
}elseif (strlen($filename)>10){
    echo'后端判断：文件名最多10字符';
    ?><script>alert('后端判断：文件名最多10字符')</script><?php
}elseif(strlen($fileContent)<=4){
    echo'后端判断：内容最少4字符';
    ?><script>alert('后端判断：内容最少4字符')</script><?php
}elseif(strlen($filename)>2 && strlen($fileContent)>4){
    $file = fopen('data/'.$filename, 'w'); // 打开文件，以写入模式
    fwrite($file, $fileContent); // 写入文件内容
    fclose($file); // 关闭文件

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
    $sql = "insert into tgwz(title,zhuozid,scsj) values(?,?,?)";
    $mysqli_stmt = $mysqli->prepare($sql);//准 备预处理语句
    $title = $filename;
    $zhuozid = $_POST['TGid'];
    $scsj=date('Y-m-d H:i:s');
    //s代表string类型
    $mysqli_stmt->bind_param('sss',$title,$zhuozid,$scsj);
    //执行预处理语句
    if ($mysqli_stmt->execute()) {
    echo '文件生成成功！已经托管了'.$mysqli_stmt->insert_id.'个文件';//程序成功，返回插入数据表的行id
    echo PHP_EOL;
    // header('Refresh:2,Url=./index2.php?id=$_POST['fbdnr1'];');
    } else {
        echo '执行失败，内部错误：'.$mysqli_stmt->error;//执行失败， 错误信息
    }
    mysqli_close($mysqli);

    echo '文件位于：http://weiqing.1ao.top/data/'.$filename.'。请复制后浏览';
}else{
    echo'执行失败内部错误，请联系QQ1148246926';
}
?>
<script src="https://cdn.jsdelivr.net/gh/wallleap/cdn/js/love.js"></script>
<script src="https://huiyi0923.github.io/AQWB/fangwbs.js"></script>