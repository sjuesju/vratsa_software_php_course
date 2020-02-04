<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Some vars</title>
    </head>

    <body>
    <?php 
        $a = 5;
        $b = 10;
        echo "a = $a, b = $b"."<span style='margin-left:80px;'> </span>";
        $c = $a;
        $a = $b;
        $b = $c;
        echo "a = $a, b = $b"."<br>";
    ?>
    <?php 
        $a = 8;
        $b = 25;
        echo "a = $a, b = $b"."<span style='margin-left:80px;'> </span>";
        $c = $a;
        $a = $b;
        $b = $c;
        echo "a = $a, b = $b"."<br>";
    ?>
    <?php 
        $a = 17;
        $b = 3;
        echo "a = $a, b = $b"."<span style='margin-left:80px;'> </span>";
        $c = $a;
        $a = $b;
        $b = $c;
        echo "a = $a, b = $b"."<br>";
    ?>
    </body>

</html>