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
    if(isset($_SERVER['HTTP_REFERER'])){
        $var1 = $_SERVER['HTTP_REFERER'];
        echo "HTTP_REFERER: ".$var1;
        echo "<br>You can go back to where you came from :<a href=\"".$var1."\">Go back</a>";
        
    }else {
        echo '<h2>Great! you landed on this page directly</h2>';
    }
    ?>
</body>
</html>