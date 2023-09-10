<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$arr = array(
    'status' => '响应成功！',
    'date' => date('Y-m-d H:i:s l')
);
echo json_encode($arr, JSON_UNESCAPED_UNICODE);

$servername = "localhost"; //域名
$username = "yanxi"; //账户名
$password = "09098734"; //密码
$dbname = "aqwb"; //数据库名
$V=null;
//创建连接.
$con = new mysqli($servername, $username, $password, $dbname);
//检测连接
if ($con->connect_error){
    die("连接失败:". $con->connect_error);
}
//查询
$sql = "select * from liuran";
$reslut = $con->query($sql);
if($reslut){
    $res = $reslut->fetch_all();
    foreach($res as $k=>$v){
        $V=$v[2];
        $sql = "select * from liuran";
        }}
$con->close();

$servername2 = "localhost"; //域名
$username2 = "yanxi"; //账户名
$password2 = "09098734"; //密码
$dbname2 = "aqwb"; //数据库名
//创建连接
$conn = new mysqli($servername2, $username2, $password2, $dbname2);
//检测连接
if ($conn->connect_error) {
    die("连接失败:".$conn->connect_error);
}
$V++;
$sql = "update liuran set zongdy='".$V."' where zid = '1' ";
if ($conn->query($sql) === TRUE) {
    echo"";
} else {
    echo "Error:" .$sql2 . "<br>" . $conn->error;
}
$conn->close();
?>

