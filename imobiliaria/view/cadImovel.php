<?php
if (isset($_POST['btnSalvar'])) {
    echo 'yep!';
    require_once 'controller/ImovelController.php';
    call_user_func(array('ImovelController', 'salvar'));
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Cadastro de Imovel</title>
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Cadastro de Imovel
                    </span>
                </div>
                <form name="cadImovel" id="cadImovel" action="index.php?action=listar" method="post" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Descricao: </span>
                        <input class="input100" type="text" name="descricao" id="descricao" placeholder=""
                        value="<?php echo isset($imovel)?$imovel->getDescricao():'' ?> "/>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Foto:</span>
                        <input class="input100" type="text" name="foto" id="foto" placeholder=""
                        value="<?php echo isset($imovel)?$imovel->getFoto():'' ?> "/>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
                        <span class="label-input100">Valor:</span>
                        <input class="input100" type="text" name="valor" id="valor" placeholder=""
                        value="<?php echo isset($imovel)?$imovel->getValor():'' ?> "/>
                        <span class="focus-input100"></span>
                    </div>
                    <br />
                    <select style="margin-top:10px;border-radius: 5px;" name="tipo" id="tipo">
                        <option value="0">***SELECT***</option>
                        <option value="A" <?php echo isset($imovel) && $imovel->getTipo()=='A'?'selected':''?>>Apartamentos</option>
                        <option value="L" <?php echo isset($imovel) && $imovel->getTipo()=='L'?'selected':''?>>Loja</option>
                    </select>
                    <br>
                    <div style="margin-top:25%;" class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="btnSalvar" id="btnSalvar">
                            Enviar
                        </button>
                    </div>
                    <input type="hidden" name="id" id="id" value="<?php echo isset($imovel)?$imovel->getId():'';?>" />
                </form>
</body>

</html>