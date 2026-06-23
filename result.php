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
       
        $kg1 = $_POST["kg1"];
        
      
        
        echo  $kg1 . " กิโลกรัม "  ."<br>";
        

        $Pound = $kg1 * 2.20462;
        echo " เท่ากับ " . $Pound . " ปอนด์ " ."<br>";
    ?>
    </p>
    
<a href="index.php">กลับหน้าแรก</a>
</body>
</html>