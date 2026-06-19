<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p class="kg-box">
<?php
       
        $num1 = $_POST["num1"];
        
      
        
        echo  $num1 . " กิโลกรัม "  ."<br>";
        

        $total = $num1 * 2.20462;
        echo " เท่ากับ " . $total . " ปอนด์ " ."<br>";
    ?>
    </p>
    
<a class="btn-back" href="index.php">กลับหน้าแรก</a>
</body>
</html>