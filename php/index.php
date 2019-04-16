<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    
</head>
<body>
    <?php
    echo "所使用的文件名是：";
    echo __FILE__;
    echo "<br>";
    echo "文件行数是";
    echo __LINE__;
    echo "操作系统是";
    echo "<br>";
    echo PHP_OS;
    echo "<br>";
    echo PHP_VERSION;
    echo "<br>";
    $ip = $_SERVER["REMOTE_ADDR"];
    echo $ip;
    $user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
echo $user_IP;
    ?>
</body>
</html>