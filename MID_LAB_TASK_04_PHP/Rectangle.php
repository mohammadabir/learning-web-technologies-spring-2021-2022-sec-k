<?php
$area=0;
$perimeter=0;
$length="";
$width="";
if(isset($_POST["calculateBtn"]))
{
    $length= $_POST["length"];
    $width= $_POST["width"];
    
    $area=$length*$width;

    $perimeter=2*($length+$width);
}
 
?>

<html>
    <head>
        <title>Calculate area and perimeter of a Rectangule</title>
       
    </head>
    <body>
        <h1>Area and Perimeter of Rectangle</h1>
        <h2>Area: <?=$area?></h2>
        <h2>Perimeter:<?=$perimeter?></h2>
        <form action="" method="post">
            <label for="len">Length:
                <input type="text" name="length" value="<?=$length?>">
            </label><br><br>
            <label for="wid">Width:
                <input type="text" name="width" value="<?=$width?>">
            </label><br><br>
            <button name="calculateBtn" type="submit">Calculate</button>
        </form>
    </body>
</html>
 