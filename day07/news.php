<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include "./nav.php";
    //isset判斷的是變數是否存在
    if(isset($_GET['id'])){
        //如果點某一消息，接收到get，引用該消息的模板php
        $id = $_GET['id'];
        include "./read-one.php";
    }else{
        include "./read-all.php";
    }
    ?>
</body>
</html>