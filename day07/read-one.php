<h3>第<?php echo $id //從news.php取得$id?>篇消息</h3>
<a href="./news.php">回首頁</a>
<?php
    header("Refresh:5;URL=news.php");
    echo "五秒後回首頁";
?>