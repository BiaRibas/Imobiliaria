<?php
    require_once 'controller/ImovelController.php';
?>

<!doctype html>
<html lanf="end">
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de Imovel</title>
    </head>    
    <body>
        <?php
            if(isset($_GET['action'])){
                if($_GET['action'] == 'editar'){
                    $imovel = call_user_func(array('ImovelController', 'editar'), $_GET['id']);
                    require_once 'view/cadImovel.php';
                }
                if($_GET['action'] == 'excluir'){
                    $imovel = call_user_func(array('ImovelController', 'excluir'), $_GET['id']);
                    require_once 'view/listaImovel.php';
                }
                if($_GET['action'] == 'listar'){

                    require_once 'view/listaImovel.php';
                }

            }else{
                require_once 'view/cadImovel.php';
            }
        ?>
    </body>        
</html>  