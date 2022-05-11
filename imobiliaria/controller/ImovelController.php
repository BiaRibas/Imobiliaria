<?php
    require_once 'model/imovel.php';

    class ImovelController{
        public static function salvar(){
        print_r($_POST);
        $imovel = new Imovel();
        $usuario->setId($_POST['id']);
        $imovel->setDescricao($_POST['descricao']);
        $imovel->setFoto($_POST['foto']);
        $imovel->setValor($_POST['valor']);
        $imovel->setTipo($_POST['tipo']);

        $imovel->save();
    }
    public static function listar(){
        $imovels = new Imovel;

        return $imovels->listAll();
    }

    public static function editar($id){
            
        $imovels = new Imovel;
        $imovels = $imovels->find($id);
        return $imovels;
    }

    public static function excluir($id){
        $imovels = new Imovel;
        $imovels = $imovels->remove($id);
    }

    }
    

?>