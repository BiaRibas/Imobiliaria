<h1>Imovel</h1>
<hr>
    <div>
        <table style="top:40px">
            <thead>
                    <tr>
                        <th>Descricao</th>
                        <th>Foto</th>
                        <th>Valor</th>
                        <th>Tipo</th>
                        <th><a href="cadImovel">Novo</a></th>
                    </tr>   
            </thead>
            <tbody>
                <?php
                    require_once 'controller/ImovelController.php';
                    $imovels = call_user_func(array('ImovelController', 'listar'));

                    if(isset($imovels)){
                        foreach ($imovels as $imovel){
                
                ?>                        
                    <tr>
                        <td><?php echo $imovel->getDescricao();?></td>
                        <td><?php echo $imovel->getFoto();?></td>
                        <td><?php echo $imovel->getValor();?></td>
                        <td><?php echo $imovel->getTipo();?></td>
                        <td>
                            <a href="index.php?action=editar&id=<?php echo $imovel->getId();?>">Editar</a>
                            <a href="index.php?action=excluir&id=<?php echo $imovel->getId();?>">Excluir</a>
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