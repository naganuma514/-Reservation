<?php
$reser=$_GET['reservation'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
名前を入力してください。
    <form action="check.php" method="post">
     <input type="text" name="name">
     <input type="hidden" name="day" value="<?php echo $reser ;?>">
     <button type="submit" name="b">予約する</button>
    </form>
</body>
</html>