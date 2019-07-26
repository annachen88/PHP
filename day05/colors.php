<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- 顯示同一頁面action="colors.php"  change=> action submit -->
    <!-- action="get-colors.php" -->
   
    <form action="<?php echo $_SERVER['PHP_SELF']//設定為自動的名稱?>" method="POST">
        <h3>請選擇顏色(可多選)</h3>
        <p>
            <input type="checkbox" name="colors[]" id="red" value="red">
            <label for="red">紅</label>
            <input type="checkbox" name="colors[]" id="black" value="black">
            <label for="black">黑</label>
            <input type="checkbox" name="colors[]" id="pink" value="pink">
            <label for="pink">粉</label>
        </p>
        <input type="submit" value="送出" name="submit">
    </form>
    <?php
        //確認submit是否被按
        if(isset($_POST['submit'])){
            if(empty($_POST['colors'])){
                echo  "沒有選顏色";
            }else{
                foreach($_POST['colors'] as $color){
                    echo $color."<br>";
                }
            }
        }

    ?>
</body>
</html>