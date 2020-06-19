<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styles.css" rel="stylesheet" type="text/css"/>
    </head>
    
        <?php
            $text = file_get_contents('message.txt');
            $text= htmlspecialchars($text);
            echo'<div id=meat>' . $text . '</div>';        
        
             $text = file_get_contents('message.txt');
            
            file_put_contents('message.txt', '');
                    
        ?>
    
    
</html>
