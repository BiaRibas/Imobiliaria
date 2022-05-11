<h1>Usuario</h1>
<hr>
    <div>
        <table style="top:40px">
            <thead>
                    <tr>
                        <th>Login</th>
                        <th>Permissão</th>
                        <th><a href="cadUsuario">Novo</a></th>
                    </tr>   
            </thead>
            <tbody>
                <?php
                    require_once 'controller/UsuarioController.php';
                    $usuarios = call_user_func(array('UsuarioController', 'listar'));

                    if(isset($usuarios) && !empty($usuarios)){
                        foreach ($usuarios as $usuario){
                
                ?>                        
                    <tr>
                        <td><?php echo $usuario->getLogin();?></td>
                        <td><?php echo $usuario->getPermissao();?></td>
                        <td>
                            <a href="index.php?action=editar&id=<?php echo $usuario->getId();?>">Editar</a>
                            <a href="index.php?action=excluir&id=<?php echo $usuario->getId();?>">Excluir</a>
                        </td>                            
                    </tr>
                    <?php
                    }
                }else {
                    ?>
                    <tr>
                        <td colspan="5">Nenhuma registro encontrado</td>
                    </tr>    
                    <?php
                }
                    ?>    
            </tbody>
        </table>
    </div>
