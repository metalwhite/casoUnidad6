<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>conversor</title>
    </head>
    <body>
        <?php
        echo "El valor hexadecimal introducido es: ".$_POST["hexadecimal"]; 
        ?>
        <br>
        <br>
        <?php

        $color = $_POST["hexadecimal"];
        $hex = str_replace("#","",$color);
        
        
        
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2)); 
            $b = hexdec(substr($hex, 4, 2)); 
        
        
           

        
        
        echo "El valor convertido a RGB es: ("."$r".","."$g".","."$b".")";
        
        
        ?>
    
    </body>
</html>