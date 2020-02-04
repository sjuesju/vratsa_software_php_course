<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Some vars</title>
        <style>
        p {
            font-size: 200%;
        }
        #number {
            font-size: 150%;
            color: red
        }
        #little {
            font-size: 100%;
        }
        </style>
    </head>

    <body>
    <p>Behold, a random number: <span id="number"><?php echo rand(-100,100)?></span></p>
    <p id="little">Refresh the page and the number will change </p>
    </body>

</html>