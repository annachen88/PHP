<?php
    $data=array("item1","item2","item3");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <!-- php echo 換成等號-->
        <?php foreach($data as $item):?>
        <li><?= $item?></li>
        <?php endforeach; ?>
    </ul>
    <?php
        echo "<ul>";
        foreach($data as $item){
            echo "<li>".$item."</li>";
        }
        echo "</ul>";
    ?>
</body>
</html>