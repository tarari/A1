<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>A1</title>
    </head>
    <body>
        <h1>Activitats</h1>
        <ul>
        <?php
            $dirs=scandir('.');
            foreach ($dirs as $item){
                if(is_dir($item)&&($item!='.')&&($item!='..')
                        &&($item!='.git ')){
                    $v[]=$item;
                    echo '<li><a href="'.$item.'">'.$item.'</a></li>';
                }
            }
        ?>
        </ul>
    </body>
</html>

