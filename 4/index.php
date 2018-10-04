<html>
    <head>
        <title>title</title>
    </head>
   
    <body>
        <form action="<?= $_SERVER['PHP_SELF']?>" method="POST">
            <label><p>Usuario</p><input type="text" name="usuario" ></label>
            <input type="submit" value="Envia">   
        </form>
    </body>
</html>


<?php

    if(isset($_POST['usuario'])&&!empty($_POST['usuario'])){
        $usuario=$_POST['usuario'];
        echo 'Hola '.$usuario;
    }else{
        echo 'Introduce un nombre';
    }
    
    ?>

