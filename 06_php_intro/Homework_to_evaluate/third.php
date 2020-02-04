<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Some vars</title>
        <style>
        p {
            font-size: 200%;
        }
        #little {
            font-size: 100%;
        }
        </style>
    </head>

    <body>
    <p>Time in your time zone: <?php echo date("Y-m-d H:i:s"); ?></p>
    <p>Time in Sydney's time zone: <?php date_default_timezone_set("Australia/Sydney"); echo date("Y-m-d H:i:s"); ?></p>    
    <p id="little">Refresh the page to update the dates</p>
    </body>

</html>